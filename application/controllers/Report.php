<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Report.php
 * AUTHOR: Irvan Maulana
 * Date:
 */
class Report extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Activity_model');
	}

	public function index()
	{
		$this->template->app('report/index', 'Laporan');
	}

	public function print()
	{
		$start = $this->input->post('tanggal_awal');
		$end = $this->input->post('tanggal_akhir');

		$query = $this->Activity_model->report($start, $end)->result();

		$data['report'] = $query;
		if ($query) {

			$this->load->view('report/cetak', $data);
		}
	}
}

/* End of file: Report.php */
