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
	}

	public function index()
	{
		$this->template->app('dashboard/index', 'Dashboard');
	}
}

/* End of file: Dashboard.php */
