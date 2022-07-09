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
	}

	public function index()
	{
		$data['user'] = $this->user->getAll()->result();
		$this->template->app('user/index', 'Data User', $data);
	}

	public function create()
	{
		$this->template->app('user/create', 'Tambah Data User');
	}

	public function edit($id)
	{
		$this->template->app('user/edit', 'Edit Data User');
	}

	public function detail($id)
	{
		$this->template->app('user/detail', 'Detail Data User');
	}

	public function delete()
	{
		# code...
	}
}

/* End of file: User.php */
