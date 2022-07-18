<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Member.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
class Member extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Member_model', 'member');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['member'] = $this->member->getAll()->result();

		$this->template->app('member/index', 'Data Anggota', $data);
	}

	public function create()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['kelas'] = $this->db->get('kelas')->result();
			$data['id_member'] = $this->member->generateID();
			$this->template->app('member/create', 'Tambah Data Anggota', $data);
		} else {
			$data = [
				'id_member' 			=> htmlspecialchars($this->input->post('id_member', true)),
				'id_card' 				=> htmlspecialchars($this->input->post('id_card', true)),
				'id_device' 			=> htmlspecialchars($this->input->post('id_device', true)),
				'is_staff' 			=> htmlspecialchars($this->input->post('is_staff', true)),
				'name' 			=> htmlspecialchars($this->input->post('name', true)),
				'telepon' 			=> htmlspecialchars($this->input->post('telepon', true)),
				'kelas_id' 			=> htmlspecialchars($this->input->post('id_kelas', true)),
				'address' 			=> htmlspecialchars($this->input->post('address', true)),
				'created_at' 	=> date('Y-m-d'),
			];
			$this->member->create($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
			redirect('member');
		}
	}

	public function edit($id)
	{
		$data['member'] = $this->member->getById($id)->row();
		$data['kelas'] = $this->db->get('kelas')->result();
		$this->template->app('member/update', 'Data Anggota', $data);
	}

	public function update()
	{
		$data = [
			'id_card' 				=> htmlspecialchars($this->input->post('id_card', true)),
			'id_device' 			=> htmlspecialchars($this->input->post('id_device', true)),
			'is_staff' 			=> htmlspecialchars($this->input->post('is_staff', true)),
			'name' 			=> htmlspecialchars($this->input->post('name', true)),
			'telepon' 			=> htmlspecialchars($this->input->post('telepon', true)),
			'kelas_id' 			=> htmlspecialchars($this->input->post('id_kelas', true)),
			'address' 			=> htmlspecialchars($this->input->post('address', true)),
			'created_at' 	=> date('Y-m-d'),
		];
		$id = $this->input->post('id_member', true);
		$this->member->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di update</div>');
		redirect('member');
	}


	public function detail($id)
	{
		$data['member'] = $this->member->getById($id)->row();

		$this->template->app('member/detail', 'Detail Data Anggota', $data);
	}

	public function delete($id)
	{
		$this->member->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');
		redirect('member');
	}
}

/* End of file: Member.php */
