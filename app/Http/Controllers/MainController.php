<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;
class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function dresses(){
        
        $dresses = Dress::all();

        $data = [
            'dresses' => $dresses 
        ];

        return view('dresses', $data);
    }
}
