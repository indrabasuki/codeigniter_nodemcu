<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * File Name: Rfid.php
 * AUTHOR: 
 * Date:
 */
class Rfid extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	}

	public function create()
	{
		$id = $this->input->get('id_device');
		var_dump($id);
		die;
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

/* End of file: Rfid.php */
