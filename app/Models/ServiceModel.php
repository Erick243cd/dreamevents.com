<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lp_services';
    protected $primaryKey       = 'serviceId';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['serviceId', 'categoryId', 'userId', 
    'cityId', 'serviceName_fr', 'serviceName_en', 'serviceEmail', 'servicePhone', 'serviceWebsite', 'serviceLocation', 'serviceDescription'];

   
}
