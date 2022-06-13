<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function register()
    {
        if (isLoggedIn()) redirect()->to('/profile');
        
        $data = [
            'page' => 'register',
            'validation' => null
        ];
        if ($this->request->getMethod() == 'post') {
            $this->validation->setRules([
                'ufullname' => [
                    'label' => 'Nom complet',
                    'rules' => 'required',
                    'errors' => ['required' => 'Le nom complet est obligatoire']
                ],
                'uphone' => [
                    'label' => 'Numéro téléphone',
                    'rules' => 'required|is_unique[lp_users.userPhone]',
                    'errors' => ['is_unique' => 'Ce numéro de téléphone est déjà utilisé, veuillez choisir un autre ou connectez-vous.']
                ],
                'upassword' => [
                    'label' => "Mot de passe",
                    'rules' => 'required|min_length[6]',
                    'errors' => [
                        'required' => 'Le mot de passe est obligatoire',
                        'min_length' => 'Le mot de passe doit contenir aumoins 6 caractères'
                    ]

                ],
                'upawordconfirm' => [
                    'label' => "Confirmer Mot de passe",
                    'rules' => 'required|matches[upassword]',
                    'errors' => [
                        'required' => 'Le mot de passe est obligatoire',
                        'min_length' => 'Le champs confirmer mot de passe doit être le  aumoins 6 caractères'
                    ]
                ]
            ]);
            if ($this->validation->withRequest($this->request)->run()) {
                /* Function to send mail here */
                $data = array(
                    "userFirstName" => $this->request->getVar('ufullname'),
                    "userPhone" => $this->request->getVar('uphone'),
                    'userPwd' => password_hash($this->request->getVar('upassword'), PASSWORD_BCRYPT),
                );

                $this->userModel->save($data);
                $userdata = $this->userModel->asObject()->where('userPhone', $this->request->getVar('uphone'))->first();

                session()->set('user_data', $userdata);
                return redirect()->to('/profile');
            } else {
                $data = [
                    'page' => 'register',
                    'validation' => $this->validation->getErrors()
                ];
            }
        }

        echo view("pages/" . localLang() . "/register", $data);
    }


    function login()
    {
        if (isLoggedIn()) redirect()->to('/profile');

        $data = [
            'page' => 'login',
            'validation' => null
        ];

        if ($this->request->getMethod() == 'post') {
            $this->validation->setRules([
                'user_phone' => [
                    'label' => 'Numéro téléphone',
                    'rules' => 'required'
                ],
                'user_password' => [
                    'label' => 'Password',
                    'rules' => 'required|check_pwd',
                    'errors' => ['check_pwd' => 'Numéro de téléphone ou Mot de passe incorrect']
                ]
            ]);

            if ($this->validation->withRequest($this->request)->run()) {
                $data = $this->userModel->where(['userPhone' => $this->request->getVar('user_phone')])
                    ->first();
                session()->set('user_data', $data);
                return ($data['userRole'] === 'provider') ? redirect()->to('/profile') : redirect()->to('/dashboard');
            } else {
                $data = [
                    'page' => 'login',
                    'validation' => $this->validation->getErrors()
                ];
            }
        }
        return view("pages/" . localLang() . "/register", $data);
    }

    function logout()
    {
        $session = session()->get('user_data');
        session()->destroy();
        return redirect()->to('/');
    }

    function myProfile()
    {
        if (!isLoggedIn()) return redirect()->to('/login');

        $page = 'profile';
        $data = [
            'page' => $page,
            'validation' => null,
            'links' => headerData($page, localLang()),
            'lang' => localLang(),
            'categories' =>  categoryData($page),
            'allcategories' => allCategoriesData(),
            'cities' => cityData($page),
            'premiumservices' =>  premiumServices($page),
            'myservices' =>  userServices(),
            'allservices' => allServices($page),
            'servicesByCity' => servicesByCity(),
            'userdata' => (object) session()->get('user_data')
        ];

        if ($this->request->getMethod() == 'post') {
            $this->validation->setRules([
                'ufullname' => [
                    'label' => 'Nom complet',
                    'rules' => 'required',
                    'errors' => ['required' => 'Le nom complet est obligatoire']
                ],
                'uphone' => [
                    'label' => 'Numéro téléphone',
                    'rules' => 'required',
                ],
                'uemail' => [
                    'label' => "Email Adresse",
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Le champ Email est obligatoire',
                        'valid_email' => "L'adresse mail saisi n'est pas valide"
                    ]
                ],
                'uadress' => [
                    'label' => "Adresse",
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Le champ Adresse est requis',
                    ]
                ]
            ]);
            if ($this->validation->withRequest($this->request)->run()) {
                $data = [
                    "userFirstName" => $this->request->getVar('ufullname'),
                    "userPhone" => $this->request->getVar('uphone'),
                    "userEmailAddress" => $this->request->getVar('uemail'),
                    "userAdress" => $this->request->getVar('uadress'),
                ];

                $sessData = (object) session()->get('user_data');

                $this->userModel->set($data)->where("userId", $sessData->userId)->update($data);

                $userdata = $this->userModel->asObject()->where('userId', $sessData->userId)->first();

                if (!empty($userdata)) {
                    session()->set('user_data', $userdata);
                }
                return redirect()->to('/profile');
            } else {

                $data['validation'] = $this->validation->getErrors();
            }
        }

        echo view("pages/" . localLang() . "/profile", $data);
    }
}
