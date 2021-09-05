<?php

namespace App\Auth;

use \App\Config;

class DbAuth{

    public function login($email,$password){
        $user = Config::getDb()->query("
        SELECT * FROM users 
        WHERE password=? AND email=?",null,array(md5($password),$email));
        if (is_object($user)) {
            $_SESSION['auth'] = $user;
            header("Location:./?p=home");
        }
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

}