<?php

namespace App\Validations;

class CustomRules
{
    function check_date(string $str, string &$error = null)
    {
        if ($str < date("Y-m-d"))
            return false;

        return true;
    }
}
