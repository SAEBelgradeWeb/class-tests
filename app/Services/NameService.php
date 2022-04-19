<?php

namespace App\Services;

use Exception;

class NameService
{


    public function fullname($firstname, $lastname)
    {
        if (is_string($firstname) && is_string($lastname)) {
            return $firstname . " " . $lastname;
        }

       throw new Exception("Not supported values. Please use only strings");
    }
}
