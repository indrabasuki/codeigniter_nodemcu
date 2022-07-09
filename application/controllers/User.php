<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: User.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('User_model', 'user');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->user->getAll()->result();
		$this->template->app('user/index', 'Data User', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->template->app('user/create', 'Tambah Data User');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id', true),
				'is_active' => $this->input->post('is_active', true),
				'created_at' 	=> date('Y-m-d'),
			];
			$this->user->create($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
			redirect('user');
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->user->getById($id)->row();

		$this->template->app('user/edit', 'Edit Data Pengguna', $data);
	}

	public function update()
	{
		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'telepon' => htmlspecialchars($this->input->post('telepon', true)),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role_id' => $this->input->post('role_id', true),
			'is_active' => $this->input->post('is_active', true),
			'created_at' 	=> date('Y-m-d'),
		];
		$id = $this->input->post('id', true);
		$this->user->update($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di update</div>');
		redirect('user');
	}

	public function detail($id)
	{
		$data['user'] = $this->user->getById($id)->row();
		$this->template->app('user/detail', 'Detail Data Pengguna', $data);
	}

	public function delete($id)
	{
		$this->user->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');
		redirect('user');
	}
}

/* End of file: User.php */
