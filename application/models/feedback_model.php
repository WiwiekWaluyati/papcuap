<?php
/**
* kolom komen
*/
class Feedback_model extends CI_Model
{
	function __construct()
	{
			parent::__construct();
			$this->load->database();
	}

	public function ambil_semua_feedback()
	{
		return $this->db->get('feedback')->result();
	
	}
	public function tambah_feedback($nrp, $nama, $penilaian, $kesan)
	{
		$this->nrp = $nrp;
		$this->nama = $nama;
		$this->penilaian = $penilaian;
		$this->kesan = $kesan;

		$this->db->insert('feedback', $this);
	}
	public function hapus_feedback($id)
	{
		$this->db->delete('feedback', array('id' => $id));
	}
}