<?php

namespace App\Validations;

use App\Models\UserModel;

class CustomRules
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function check_pwd(string $str, string &$error = null): bool
    {

        $data = $this->userModel->asObject()
            ->where('userPhone', $_POST['user_phone'])
            ->first();
        if (empty($data)) {
            return false;
        } elseif (password_verify($str, $data->userPwd)) {
            return true;
        } else {
            return false;
        }
    }
}
