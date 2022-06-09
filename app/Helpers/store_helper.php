<?php

use App\Controllers\Services;
use App\Models\CategoryModel;
use App\Models\CityModel;
use App\Models\ServiceModel;
use Config\UserAgent;

function categoryData(?string $page)
{
    $category =  new CategoryModel();
    $limit = $page === 'services' ? 10 : 6;
    return $category->asObject()->limit($limit)->find();
}

function cityData(?string $page)
{
    $city = new CityModel();
    $limit = $page === 'services' ? 10 : 6;
    return $city->asObject()->limit($limit)->find();
}

function allCategoriesData()
{
    $category =  new CategoryModel();
    return $category->asObject()->find();
}

function premiumServices(?string $page)
{
    $service =  new ServiceModel();
    $limit = $page == 'services' ? 100 : 8;
    return $service->asObject()
        ->join('lp_categories', 'lp_services.categoryId=lp_categories.categoryId')
        ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
        ->join('lp_users', 'lp_services.userId=lp_users.userId')
        ->where(['ispremium' => 1])->limit($limit)->find();
}

function allServices(?string $page)
{
    $service =  new ServiceModel();
    $limit = $page == 'services' ? 100 : 8;
    return $service->asObject()
        ->join('lp_categories', 'lp_services.categoryId=lp_categories.categoryId')
        ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
        ->limit($limit)->find();
}

function servicesByCity()
{
    $service = new ServiceModel();
    return $service->asObject()
        ->selectCount('lp_services.serviceId', 'nbCities')
        ->select('cityName_fr, cityImage')
        ->join('lp_cities', 'lp_services.cityId=lp_cities.cityId')
        ->groupBy('lp_cities.cityName_fr')->find();
}
