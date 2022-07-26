<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    public function index($id, $nama){
        echo "bootcamp programming";
        echo "<br>";
        echo "id   : ",$id ,'<br>';
        echo "nama : ",$nama;
        $name = "satria";
        $nim = 2030511078;

        return view('siswa',compact('name', 'nim'));
    }
    public function show($hai){
        echo "Selamat datang di bootcamp";
        echo "<br>";
        echo $hai;
    }
}
