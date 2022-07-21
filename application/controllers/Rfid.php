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
		$this->load->model('Member_model');
		$this->load->model('Activity_model');
	}
	public function get_id()
	{
		if (isset($_GET['id_device']) && isset($_GET['rfid'])) {
			$status = '';
			$id_device = $this->input->get('id_device');
			$rfid = $this->input->get('rfid');

			$dataRfid = array('id_device' => $id_device, 'uid_rfid' => $rfid, 'waktu' => time());

			$data_anggota = $this->Member_model->get_rfid($dataRfid['uid_rfid']);
			$showActivity = $this->Activity_model->get_id_anggota($data_anggota->id_member)->row();


			if (!$showActivity) {
				$in = 1;
				$out = 0;
				$status = 'In Gate';
			} else {
				if ($showActivity->in == 1) {
					$in = 0;
					$out = 1;
					$status = 'Out Gate';
				}
				if ($showActivity->out == 1) {
					$in = 1;
					$out = 0;
					$status = 'In Gate';
				}
			}
			$data = [
				'member_id' => $data_anggota->id_member,
				'in' => $in,
				'out' => $out,
				'date' => date('Y-m-d'),
				'time' => time(),
				'activity_description' => $status,
			];

			$this->db->insert('activity', $data);
		} else {
			echo "Variabel data tidak terdefinisi";
		}
	}
}

/* End of file: Rfid.php */
