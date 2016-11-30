<?php

class Login_model extends CI_Model {
	protected $table = 'login';
	protected $primaryKey = 'idLogin';

	public function __construct()
	{
		parent::__construct();
	}
}