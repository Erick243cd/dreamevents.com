<?php

namespace App\Models;

use CodeIgniter\Model;

class CityModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lp_cities';
    protected $primaryKey       = 'cityId';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['cityName_fr', 'cityName_en'];

   
}
