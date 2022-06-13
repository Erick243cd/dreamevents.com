<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lp_users';
    protected $primaryKey       = 'userId';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['userId', 'userFirstName', 'userEmailAddress', 'userPhone', 'userAdress', 'userAvatar', 'userPwd'];
}
