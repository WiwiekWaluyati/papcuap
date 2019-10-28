<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
* 
*/
	class Feedback extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('feedback_model');
	}
	public function index()
{
		//ambil data feedback
		$data_feedback = $this->feedback_model->ambil_semua_feedback();

		//masukkan data ke array yang akan dipassing ke view
		$data['feedback'] = $data_feedback;

		$this->load->view('header_view');
		$this->load->view('menu_view');
		$this->load->view('content/feedback/data_feedback.php', $data); //content //,$data = untuk passing data ( memuat data feedback)
		$this->load->view('footer_view');
}
	public function create()
{
		$this->load->view('header_view');
		$this->load->view('menu_view');
		$this->load->view('content/feedback/tambah_feedback.php'); //content //,$data = untuk passing data ( memuat data feedback)
		$this->load->view('footer_view');
}
	public function store()
{
		$nrp =$this->input->post('nrp');
		$nama =$this->input->post('nama');
		$penilaian =$this->input->post('penilaian');
		$kesan =$this->input->post('kesan');

		$this->feedback_model->tambah_feedback($nrp, $nama, $penilaian, $kesan, '');

		/*$data['message'] =' Simpan data feedback berhasil';
	*/
		redirect(base_url('index.php/feedback'));
}
	public function delete($id)
{
		$this->feedback_model->hapus_feedback($id);

		redirect(base_url('index.php/feedback'));
}
}
