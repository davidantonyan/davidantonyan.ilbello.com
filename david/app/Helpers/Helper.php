<?php

namespace App\Helpers;

class Helper{
    public static function logo()
    {
        echo '<a class="logo" href="'.url('/').'">D.A</a>';
    }
}