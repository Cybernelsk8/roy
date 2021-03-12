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
                'url'=> '',
                'active' => ''
            ],
            [
                'name' => 'Trabaja con nosotros',
                'url'=> '#trabajaconnosotros',
                'active' => ''
            ],
            [
                'name' => 'Contacto',
                'url'=> '#contacto',
                'active' => ''
            ],
            [
              'name' => 'Ubicaciones',
              'url' => '#',
              'active' => ''
            ],


        ];

        return view('welcome',compact('links'));
    }
}
