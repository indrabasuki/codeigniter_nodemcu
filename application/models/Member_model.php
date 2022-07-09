<?php

/**
 * File Name: Member_model.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{

	protected $table = '';

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->get($this->table);
	}
}

/* End of file: Member_model.php */
