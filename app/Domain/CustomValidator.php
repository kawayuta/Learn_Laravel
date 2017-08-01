<?php

namespace App\Domain;

class CustomValidator extends \Illuminate\Validation\Validator
{

    public function validateDomain($attribute, $value, $parameters)
    {
        $email = explode('@',$value);

        if ($email[1] == 'gmail.com') {
            return true;
        } else {
            return false;
        }
    }
}