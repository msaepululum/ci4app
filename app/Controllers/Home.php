<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// echo "hellow word";
		// echo $this->request->uri->getSegment(1);
	}

	//--------------------------------------------------------------------

}
