<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function about() {
        return "Nama :  Faradila Wahyu Wijayanti <br>
        Kelas : MI 2D <br>
        Absen : 10 <br>
        Telepon :   081332355638<br>
        Jurusan :   Teknologi Informasi";
    }
}
