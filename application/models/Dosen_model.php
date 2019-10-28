<?php

/**
 * kelas ini digunakan untuk model autentikasi...
 */
class Dosen_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function ambil_semua_dosen()
	{	

		return $this->db->get('dosen')->result();
		
	}


	public function ambil_dosen($id)
	{
		return $this->db->get_where('dosen', ['id_dosen' => $id])->row();
		// select * from anggota where id_anggota=$id
	}
		
	public function tambah_dosen($nip, $nama, $alamat, $tanggal_lahir)
	{
		$this->nip = $nip;
		$this->nama = $nama;
		$this->alamat = $alamat;
		$this->tanggal_lahir = $tanggal_lahir;

		$this->db->insert('dosen', $this);
		
	}

	public function update_dosen($id)
	{
		// ambil inputan
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tanggal_lahir = $this->input->post('tanggal_lahir'); //content

		$this->nip = $nip;
		$this->nama = $nama;
		$this->alamat = $alamat;
		$this->tanggal_lahir = tanggal_lahir;

		$this->db->update('dosen', $this, ['id_dosen' => $id]);

	}

	public function hapus_dosen($id)
	{
		$this->db->delete('dosen', array('id_dosen' => $id ));
	}
}
	