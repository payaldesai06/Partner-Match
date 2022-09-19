<?php

namespace App;

class Commonhelper
{
    public static function active($path, $active = 'active') {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}
