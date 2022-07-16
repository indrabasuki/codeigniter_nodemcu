<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Dashboard.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
class Dashboard extends CI_Controller
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
		$this->template->app('dashboard/index', 'Dashboard', $data);
	}
}

/* End of file: Dashboard.php */
