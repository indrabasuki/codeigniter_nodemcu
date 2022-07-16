<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Activity.php
 * AUTHOR: 
 * Date:
 */
class Activity extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Activity_model');
	}

	public function index()
	{
		$data['activity'] = $this->Activity_model->getAll()->result();
		$this->template->app('activity/index', 'Activity', $data);
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

	public function detail($id)
	{
		$data['activity'] = $this->user->getById($id)->row();
		$this->template->app('activty/detail', 'Detail Data Pengguna', $data);
	}
}

/* End of file: Activity.php */
