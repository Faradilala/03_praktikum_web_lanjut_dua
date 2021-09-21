<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function comment($nama,$pesan) {
        return "nama : $nama
            <br> pesan: $pesan";
    }

}