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
	protected $primary_key = 'id';

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->get($this->table);
	}

	public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		$this->db->where($this->primary_key, $id);
		$this->db->update($this->table, $data);
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, [$this->primary_key => $id]);
	}

	public function delete($id)
	{
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table);
	}
}

/* End of file: User_model.php */
