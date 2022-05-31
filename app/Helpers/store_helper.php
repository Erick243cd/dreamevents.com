<?php

use App\Models\CategoryModel;
use App\Models\CityModel;
use Config\UserAgent;

function categoryData(?string $page)
{
    $category =  new CategoryModel();
    $limit = $page === 'services' ? 10 : 6;
    return $category->asObject()->limit($limit)->find();
}

function cityData(?string $page){
    $city = new CityModel();
    $limit = $page === 'services' ? 10 : 6;
    return $city->asObject()->limit($limit)->find();
}
