<?php

class Site_model extends CI_Model {
	protected $table = 'site';
	protected $primaryKey = 'idSite';

	public function __construct()
	{
		parent::__construct();
	}
}