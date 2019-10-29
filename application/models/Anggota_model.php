<?php

/**
 * kelas ini digunakan untuk model autentikasi...
 */
class Anggota_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function ambil_semua_anggota()
	{	

		return $this->db->get('anggota')->result();
		
	}


	public function ambil_anggota($id)
	{
		return $this->db->get_where('anggota', ['id_anggota' => $id])->row();
		// select * from anggota where id_anggota=$id
	}
		
	public function tambah_anggota()
	{
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$kelas = $this->input->post('kelas');
		$foto = $this->uploadFile();

		$this->nama_anggota = $nama;
		$this->jenis_kelamin = $jenis_kelamin;
		$this->kelas = $kelas;
		$this->foto_profil = $foto;

		$this->db->insert('anggota', $this);
		
		return $this->db->insert_id();
	}

	public function update_anggota($id)
	{
		// ambil inputan
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$kelas = $this->input->post('kelas'); //content

		$this->nama_anggota = $nama;
		$this->jenis_kelamin = $jenis_kelamin;
		$this->kelas = $kelas;
		$this->foto_profil = '';

		$this->db->update('anggota', $this, ['id_anggota' => $id]);

	}

	public function hapus_anggota($id)
	{
		$this->db->delete('anggota', array('id_anggota' => $id ));
	}

	public function uploadFile()
	{
		$config['upload_path']          = './uploads/gambar_anggota/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'anggota_'.time();
		$config['overwrite']            = true;
		$config['max_size']           	= 1024; //1mb
 
		$this->load->library('upload', $config);
 
		if ($this->upload->do_upload('foto')){
			return $this->upload->data("file_name");
		}else{
			return ''; //jika tidak ada foto yang terupload
		}
	}
}
