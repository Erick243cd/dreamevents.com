<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\UserAgents;

class Services extends BaseController
{
    public function index()
    {
        //
    }

    public function servicesByCategories(?string $slug = null)
    {
        $category = $this->categoryModel->asObject()->where('categorySlug', $slug)->first();

        $agent = $this->request->getUserAgent();

        $page = "listbycategory";

        if (!empty($category)) {
            $data = [
                'services' => $this->serviceModel->asObject()->where('categoryId', $category->categoryId)->findAll(),
                'links' => headerData($page, localLang()),
                'page' => $page,
                'lang' => localLang(),
                'isMobile' => $agent->isMobile(),
                'categories' =>  categoryData($page),
                'cities' => cityData($page)
            ];

            return view('services/'. localLang().'/servicesbycategory', $data);
        } else {
            return view('errors/404');
        }
    }
}
