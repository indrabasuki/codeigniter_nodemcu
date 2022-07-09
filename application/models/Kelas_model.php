<?php

/**
 * File Name: Kelas_model.php
 * AUTHOR: irvanmaulana
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{

	protected $table = 'kelas';

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

/* End of file: Kelas_model.php */
