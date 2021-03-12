<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $links = [
            [
                'name' => 'Nosotros',
                'route'=> '',
                'active' => ''
            ],
            [
                'name' => 'Trabaja con nosotros',
                'route'=> '',
                'active' => ''
            ],
            [
                'name' => 'Contacto',
                'route'=> '',
                'active' => ''
            ],

            
        ];

        return view('welcome',compact('links'));
    }
}
