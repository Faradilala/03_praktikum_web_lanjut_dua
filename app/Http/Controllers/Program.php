<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program extends Controller
{
    public function makananMenu(){
        return "Pizza";
    }

    public function minumanMenu(){
        return "Air mineral";
    }

    public function snackMenu(){
        return "Potato Chips";
    }
}
