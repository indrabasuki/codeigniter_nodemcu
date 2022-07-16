<?php

/**
 * File Name: Member_model.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
{



	protected $table = 'member';
	protected $primary_key = 'id_member';

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('kelas', 'member.kelas_id=kelas.id_kelas');
		return $this->db->get();
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

	public function generateID()
	{
		$this->db->select('RIGHT(member.id_member,5) as id_member', FALSE);
		$this->db->order_by('id_member', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('member');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->id_member) + 1;
		} else {
			$kode = 1;
		}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = "GE_" . $batas;
		return $kodetampil;
	}

	public function get_rfid($rfid)
	{
		return $this->db->get_where($this->table, ['id_card' => $rfid])->row();
	}
}

/* End of file: Member_model.php */
