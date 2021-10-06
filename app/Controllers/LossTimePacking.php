<?php

namespace App\Controllers;

class LossTimePacking extends BaseController
{
    function __construct()
	{
		$this->model = new \App\Models\ModelLossTimePacking();
	}
    public function index()
    {
        return view('LossTimePacking_view');
    }
}
