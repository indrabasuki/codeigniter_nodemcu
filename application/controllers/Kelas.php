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
	}

	public function index()
	{

		$data['kelas'] = $this->kelas->getAll()->result();
		$this->template->app('kelas/index', 'Data Kelas', $data);
	}

	public function create()
	{
		# code...
	}

	public function edit()
	{
		# code...
	}

	public function delete()
	{
		# code...
	}
}

/* End of file: Kelas.php */
