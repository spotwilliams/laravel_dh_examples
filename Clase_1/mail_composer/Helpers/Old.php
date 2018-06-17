<?php

namespace App\Helpers;

class Old
{
    
    public static function show($value)
    {
        if ($_POST and $_POST[$value]) {
            return $_POST[$value];
        } else {
            return '';
        }
        
    }
}