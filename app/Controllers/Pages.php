<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {


        $data = [
            'title' => 'Home | MaysunApps',
            'ulum' => ['satu', 'dua', 'tiga']
        ];

        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | MaysunApps'
        ];

        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl lembah',
                    'kota' => 'depok'
                ],
                [
                    'tipe' => 'rumah',
                    'alamat' => 'sinagar',
                    'kota' => 'tasik'
                ]
            ]
        ];

        echo view('pages/contact', $data);
    }

    //--------------------------------------------------------------------

}
