<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Kelas.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
class Kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Kelas_model', 'kelas');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['kelas'] = $this->kelas->getAll()->result();
		$this->template->app('kelas/index', 'Data Kelas', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('description', 'Email', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->template->app('kelas/create', 'Tambah Data Kelas');
		} else {
			$data = [
				'kelas_name' 			=> htmlspecialchars($this->input->post('name', true)),
				'description' 	=> htmlspecialchars($this->input->post('description', true)),
				'created_at' 	=> date('Y-m-d'),
			];
			$this->kelas->create($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
			redirect('kelas');
		}
	}

	public function edit($id)
	{
		$data['kelas'] = $this->kelas->getById($id)->row();

		$this->template->app('kelas/update', 'Data Kelas', $data);
	}

	public function update()
	{
		$data = [
			'kelas_name' 	=> htmlspecialchars($this->input->post('name', true)),
			'description' 	=> htmlspecialchars($this->input->post('description', true)),
			'created_at' 	=> date('Y-m-d'),
		];
		$id = $this->input->post('id_kelas', true);
		$this->kelas->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di update</div>');
		redirect('kelas');
	}

	public function detail($id)
	{
		$data['kelas'] = $this->kelas->getById($id)->row();

		$this->template->app('kelas/detail', 'Detail Data Kelas', $data);
	}

	public function delete($id)
	{
		$this->kelas->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');
		redirect('kelas');
	}
}

/* End of file: Kelas.php */
