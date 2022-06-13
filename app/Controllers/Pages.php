<?php

namespace App\Controllers;

use Config\UserAgents;

class Pages extends BaseController
{
    public function index()
    {
        $agent = $this->request->getUserAgent();
        $page = 'home';
        $data = [
            'links' => headerData($page, localLang()),
            'page' => $page,
            'lang' => localLang(),
            'isMobile' => $agent->isMobile(),
            'categories' =>  categoryData($page),
            'allcategories' => allCategoriesData(),
            'cities' => cityData($page),
            'premiumservices' => premiumServices($page),
            'allservices' => allServices($page),
            'servicesByCity' =>  servicesByCity(),
            'userdata' => (object) session()->get('user_data')
        ];

        return view('pages/' . localLang() . '/' . $page, $data);
    }

    public function contact(){

    }
    public function about(){
        
    }
}
