<?php

class Site extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    public function index()
	{
	    $this->load->view('index');
	}
}