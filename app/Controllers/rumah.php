<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_p;

class rumah extends BaseController
{
	public function index()
	{
		$lin = new M_p();
		echo view('header');
        echo view('menu');
        echo view('footer');
	}
}
