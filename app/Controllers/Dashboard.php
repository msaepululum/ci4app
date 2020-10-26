<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo  $this->nama;
    }

    public function coba($nama = '')
    {
        echo "Nama Saya adalah $nama";
    }

    //--------------------------------------------------------------------

}
