<?php

namespace App\Controllers;

use Config\UserAgents;

class Pages extends BaseController
{
    public function views($page = 'home')
    {
      
        $agent = $this->request->getUserAgent();

        if (file_exists(APPPATH . 'views/pages/' . localLang() . '/' . $page . '.php')) {
            //Head and footer Links

            $data = [
                'links' => headerData($page, localLang()),
                'page' => $page,
                'lang' => localLang(),
                'isMobile' => $agent->isMobile(),
                'categories' =>  categoryData($page),
                'allcategories' => allCategoriesData(),
                'cities' => cityData($page),
                'premiumservices' => $page === 'home' ? premiumServices($page) : null,
                'allservices' => $page === 'home' ? allServices($page) : null,
                'servicesByCity' => $page === 'home' ? servicesByCity() : null
            ];

            return view('pages/' . localLang() . '/' . $page, $data);
        } else {
            return view('errors/404');
        }
    }

    public function index()
    {
        return view('welcome_message');
    }
}
