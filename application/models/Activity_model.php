<?php

/**
 * File Name: Activity_model.php
 * AUTHOR: 
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Activity_model extends CI_Model
{

	protected $table = 'activity';

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('member', 'activity.member_id=member.id_member');
		$this->db->join('kelas', 'member.kelas_id=kelas.id_kelas');
		return $this->db->get();
	}

	public function get_id_anggota($id)
	{

		return $this->db->get_where('activity', ['member_id' => $id])->row();
	}

	public function report($start, $end)
	{

		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('member', 'activity.member_id=member.id_member');
		$this->db->join('kelas', 'member.kelas_id=kelas.id_kelas');
		$this->db->where('date >=', $start);
		$this->db->where('date >=', $start);

		return $this->db->get();
	}
}

/* End of file: Activity_model.php */
