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
                'services' => $this->serviceModel->asObject()->where('categoryId', $category->categoryId)->findAll(),
                'links' => headerData($this->page, localLang()),
                'page' => $this->page,
                'lang' => localLang(),
                'isMobile' => $this->isMobile,
                'categories' =>  categoryData($this->page),
                'cities' => cityData($this->page),
            ];

            return view('services/' . localLang() . '/servicesbycategory', $data);
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
                ->join('lp_categories', 'lp_categories.categoryId=lp_services.serviceId')
                ->where($wheres)->orderBy('serviceName_fr', 'ASC')->find()
        ];
        return view('services/' . localLang() . '/listing', $data);
    }
}
