<?php

/**
 * File Name: User_model.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	protected $table = 'user';

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->get($this->table);
	}

	# code...

}

/* End of file: User_model.php */
