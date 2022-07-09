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
	}

	public function index()
	{
		$this->template->app('report/index', 'Laporan');
	}

	public function print()
	{
		$start = $this->input->post('tanggal_awal');
		$end = $this->input->post('tanggal_akhir');

		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
	}
}

/* End of file: Report.php */
