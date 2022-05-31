<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lp_users';
    protected $primaryKey       = 'userId';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['userId', 'userFirstName', 'userEmailAddress', 'userPhone', 'userAdress', 'userAvatar', 'userPwd'];
}
