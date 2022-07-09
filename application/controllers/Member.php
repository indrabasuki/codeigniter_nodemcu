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
	}

	public function index()
	{
		$data['member'] = $this->member->getAll()->result();
		$this->template->app('member/index', 'Data Anggota', $data);
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

/* End of file: Member.php */
