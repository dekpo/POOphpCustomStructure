<?php
namespace App;

class Utils
{

    static function clearInput($input)
    {
        $strCleared = trim($input);
        $strCleared = strip_tags($strCleared);
        $strCleared = stripslashes($strCleared);
        $strCleared = str_replace("/", "", $strCleared);
        $strCleared = htmlspecialchars($strCleared, ENT_QUOTES);
        return $strCleared;
    }


    static function print_r_pre($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }


    static function var_dump_pre($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}
