<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119083,
            "Nama" => "Haura Dwika Priandini",
            "Gender" => "Femeale",
            "Phone" => 6281226045742,
            "Kelas" => "XII RPL 3"
        ];
    }
    //
}
