<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\UserAgents;

class Services extends BaseController
{
    protected $isMobile;
    protected $page;
    protected $agent;


    public function __construct()
    {
        $request = \Config\Services::request();
        $this->agent = $request->getUserAgent();
        $this->page = "listbycategory";
        $this->isMobile = $this->agent->isMobile();
    }


    public function servicesByCategories(?string $slug = null)
    {
        $category = $this->categoryModel->asObject()->where('categorySlug', $slug)->first();

        if (!empty($category)) {
            $data = [
                'services' => $this->serviceModel->asObject()
                    ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
                    ->join('lp_categories', 'lp_categories.categoryId=lp_services.categoryId')
                    ->where('lp_services.categoryId', $category->categoryId)->find(),
                'links' => headerData($this->page, localLang()),
                'premiumservices' => premiumServices($this->page),
                'page' => $this->page,
                'lang' => localLang(),
                'isMobile' => $this->isMobile,
                'categories' =>  categoryData($this->page),
                'cities' => cityData($this->page),
                'categoryName' => $category->categoryName_fr
            ];

            return view('services/' . localLang() . '/servicesbycategory', $data);
        } else {
            return view('errors/404');
        }
    }

    public function servicesByCities(?string $cityName = null)
    {
        $city = $this->cityModel->asObject()->where('cityName_fr', $cityName)->first();
        if (!empty($city)) {
            $data = [
                'services' => $this->serviceModel->asObject()
                    ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
                    ->join('lp_categories', 'lp_categories.categoryId=lp_services.categoryId')
                    ->where('lp_services.cityId', $city->cityId)->find(),
                'links' => headerData($this->page, localLang()),
                'premiumservices' => premiumServices($this->page),
                'page' => $this->page,
                'lang' => localLang(),
                'isMobile' => $this->isMobile,
                'categories' =>  categoryData($this->page),
                'cities' => cityData($this->page),
                'cityName' => $city->cityName_fr
            ];

            return view('services/' . localLang() . '/servicesbycity', $data);
        } else {
            return view('errors/404');
        }
    }


    // Search function
    public function serviceSearch()
    {
        $city = $this->request->getVar('city');
        $category = $this->request->getVar('category');
        $wheres = $category == "all" ? ["lp_services.cityId" => $city] : ["lp_services.cityId" => $city, "lp_services.categoryId" => $category];

        $data = [
            'links' => headerData($this->page, localLang()),
            'page' => $this->page,
            'lang' => localLang(),
            'isMobile' => $this->isMobile,
            'categories' =>  categoryData($this->page),
            'allcategories' => allCategoriesData(),
            'cities' => cityData($this->page),
            'premiumservices' => premiumServices($this->page),
            'searchResult' => $this->serviceModel->asObject()
                ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
                ->join('lp_categories', 'lp_categories.categoryId=lp_services.categoryId')
                ->where($wheres)->orderBy('serviceName_fr', 'ASC')->find()
        ];
        return view('services/' . localLang() . '/listing', $data);
    }

    public function index()
    {
        $data = [
            'links' => headerData($this->page, localLang()),
            'page' => $this->page,
            'lang' => localLang(),
            'isMobile' => $this->isMobile,
            'categories' =>  categoryData($this->page),
            'allcategories' => allCategoriesData(),
            'cities' => cityData($this->page),
            'premiumservices' => premiumServices($this->page),
            'services' => $this->serviceModel->asObject()
                ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
                ->join('lp_categories', 'lp_categories.categoryId=lp_services.categoryId')
                ->orderBy('serviceName_fr', 'ASC')->find()
        ];

        return view('services/' . localLang() . '/index', $data);
    }

    public function addnew()
    {
        if (!isLoggedIn()) return redirect()->to('/login');
        $userData = (object) session()->get('user_data');
        $page = 'newService';
        $data = [
            'page' => $page,
            'validation' => null,
            'page' => $page,
            'myservices' => userServices(),
            'links' => headerData($page, localLang()),
            'lang' => localLang(),
            'categories' =>  categoryData($page),
            'allcategories' => allCategoriesData(),
            'cities' => cityData($page),
            'premiumservices' =>  premiumServices($page),
            'myservices' =>  userServices(),
            'allservices' => allServices($page),
            'servicesByCity' => servicesByCity(),
            'userdata' => $userData
        ];

        if ($this->request->getMethod() == 'post') {
            $this->validation->setRules([
                'servname' => [
                    'label' => 'Nom du service',
                    'rules' => 'required',
                ],
                'servcategorie' => [
                    'label' => 'Catégorie',
                    'rules' => 'required',
                ],
                'servcity' => [
                    'label' => "Ville",
                    'rules' => 'required'
                ],
                'servlocation' => [
                    'label' => "Adresse",
                    'rules' => 'required'
                ],
                'servemail' => [
                    'label' => "Email",
                    'rules' => 'required|valid_email'
                ],
                'servphone' => [
                    'label' => "Téléphone",
                    'rules' => 'required'
                ],
                'servcoverimage' => [
                    'label' => 'Image de couverture',
                    'rules' => 'uploaded[servcoverimage]|max_size[servcoverimage, 9050]|is_image[servcoverimage]'
                ],

            ]);
            if ($this->validation->withRequest($this->request)->run()) {

                $temp_path = './public/assets/images/services/temp'; //Temporary Path before Fit image
                $real_path = './public/assets/images/services/covers'; //Real Path after Fit image
                $file = $this->request->getFile('servcoverimage');
                $imageName = substr($file->getRandomName(), 0, -4) . '.webp';

                if ($file->isValid() && !$file->hasMoved()) {
                    $file->move($temp_path, $imageName);
                    // resizing image
                    \Config\Services::image()->withFile($temp_path . '/' . $imageName)
                        ->fit(724, 482, 'center')
                        ->convert(IMAGETYPE_WEBP)
                        ->save($real_path . '/' . $imageName);
                }

                $data = [
                    "categoryId" => $this->request->getVar('servcategorie'),
                    "userId" => $userData->userId,
                    "cityId" => $this->request->getVar('servcity'),
                    "serviceName_fr" => $this->request->getVar('servname'),
                    "serviceName_en" => $this->request->getVar('servname'),
                    "serviceSlug" => strtolower(url_title(convert_accented_characters($this->request->getVar('servname')))) . date('m-d'),
                    "serviceEmail" => $this->request->getVar('servemail'),
                    "servicePhone" => $this->request->getVar('servphone'),
                    "serviceWebsite" => $this->request->getVar('servwebsite'),
                    "serviceLocation" => $this->request->getVar('servlocation'),
                    "serviceCoverImage" => $imageName,
                ];

                $this->serviceModel->save($data);

                return redirect()->to('/userservices');
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }

        echo view("pages/" . localLang() . "/addservice", $data);
    }

    public function viewDetail(?string $slug = null)
    {

        $service = $this->serviceModel->asObject()
            ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
            ->join('lp_categories', 'lp_categories.categoryId=lp_services.categoryId')
            ->where('lp_services.serviceSlug', $slug)->first();

        if (!empty($service)) {
            $data = [
                'links' => headerData($this->page, localLang()),
                'service' => $service,
                'page' => $this->page,
                'lang' => localLang(),
                'isMobile' => $this->isMobile,
                'categories' =>  categoryData($this->page),
                'allcategories' => allCategoriesData(),
                'cities' => cityData($this->page),
                'premiumservices' => premiumServices($this->page),
            ];

            return view('services/' . localLang() . '/servicesingle', $data);
        } else {
            return view('errors/404');
        }
    }

    public function userServices()
    {
        if (!isLoggedIn()) return redirect()->to('/login');
        $page = 'MyServices';

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
        return view('services/'. localLang() . '/userServices', $data);
    }
}
