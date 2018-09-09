<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_pengumuman');
		$this->load->helper('url');
		$this->load->library('session');
		
	}

	public function index() {
		$data['berita_upacaraa'] = $this->m_pengumuman->tampil_data()->result();
		$this->load->view('pengumuman', $data);
	}

	public function tambah()
	{
		$this->load->view('pengumuman');
	}

	public function tambah_aksi()
	{
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$date = $this->input->post('date');
		$datee = $this->input->post('datee');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$tempat_kegiatan = $this->input->post('tempat_kegiatan');
		$dress_code = $this->input->post('dress_code');

		$data = array(
			           'nama_pengumuman' => $nama_pengumuman,
			           'nama_kegiatan' => $nama_kegiatan,
			           'date' => $date,
			           'datee' => $datee,
			           'jam_mulai' => $jam_mulai,
			           'jam_selesai' => $jam_selesai,
			           'tempat_kegiatan' => $tempat_kegiatan,
			           'dress_code' => $dress_code

			            );
		$result = $this->m_pengumuman->input_data('berita_upacaraa', $data);
		if ($result == true) {
			$this->session->set_flashdata('notif', 'Berhasil di input');
			redirect('pengumuman');
		}else{
			$this->session->set_flashdata('notif', 'Gagal Di input !!!');
			redirect('pengumuman');
		}
	}

		public function hapus($id)
		{
			$where = array('id' => $id);
			$pesan = $this->m_pengumuman->hapus_data($where, 'berita_upacaraa' );
			if ($pesan >= 1) {
				$this->session->set_flashdata('notifi', 'Berhasil Di Hapus !!!');
				redirect('pengumuman');
			}else{
				$this->session->userdata('notifi', 'Gagal Di Hapus !!!');
				redirect('pengumuman', 'refresh');
			}
		}


		public function edit($id)
		{
			$where = array('id' => $id);
			$data['berita_upacaraa'] = $this->m_pengumuman->edit_data($where, 'berita_upacaraa')->result();
			$this->load->view('pengumuman_edit', $data);
		}

		public function update($id)
		{
			$id = $this->input->post('id');
			$nama_pengumuman = $this->input->post('nama_pengumuman');
			$nama_kegiatan = $this->input->post('nama_kegiatan');
			$date = $this->input->post('date');
			$datee = $this->input->post('datee');
			$jam_mulai = $this->input->post('jam_mulai');
			$jam_selesai = $this->input->post('jam_selesai');
			$tempat_kegiatan = $this->input->post('tempat_kegiatan');
			$dress_code = $this->input->post('dress_code');

			$data = array(
				           'nama_pengumuman' => $nama_pengumuman,
				           'nama_kegiatan' => $nama_kegiatan,
				           'date' => $date,
				           'datee' => $datee,
				           'jam_mulai' => $jam_mulai,
				           'jam_selesai' => $jam_selesai,
				           'tempat_kegiatan' => $tempat_kegiatan,
				           'dress_code' => $dress_code
				     );
			$where = array('id' => $id);
			$this->m_pengumuman->update_data($where, $data, 'berita_upacaraa');
			redirect('pengumuman');
		}
}

/* End of file pengumuman.php */
/* Location: ./application/controllers/pengumuman.php */