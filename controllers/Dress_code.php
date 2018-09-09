<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dress_code extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dress_code');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['dress_codee'] = $this->M_dress_code->tampil_data()->result();
		$this->load->view('dress_code', $data);
	}

	public function tambah()
	{
		$this->load->view('dress_code');
	}

	public function tambah_aksi()
	{
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$date = $this->input->post('date');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$tempat_kegiatan = $this->input->post('tempat_kegiatan');
		$dress_code = $this->input->post('dress_code');

		$data = array(
						'nama_pengumuman' => $nama_pengumuman,
						'nama_kegiatan' => $nama_kegiatan,
						'date' => $date,
						'jam_mulai' => $jam_mulai,
						'jam_selesai' => $jam_selesai,
						'tempat_kegiatan' => $tempat_kegiatan,
						'dress_code' => $dress_code
					 );
		$result = $this->M_dress_code->input_data('dress_codee', $data);
		if ($result == true) {
			$this->session->flashdata('not', 'Data Berhasil Diinput');
			redirect('dress_code');
		}else{
			$this->session->flashdata('not', 'Data Gagal Diinput');
			redirect('dress_code');
		}

	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$dd = $this->M_dress_code->hapus_data($where, 'dress_codee');
		if ($dd >= 1) {
			$this->session->flashdata('not', 'Data Berhasil Dihapus !!!');
			redirect('dress_code');
		}else{
			$this->session->flashdata('not', 'Data Gagal Dihapus!!!');
			redirect('dress_code');
		}

	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['dress_codee'] = $this->M_dress_code->edit_data($where, 'dress_codee')->result();
		$this->load->view('dress_code_edit', $data);
	}

	public function update($id)
	{
		$id = $this->input->post('id');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$date = $this->input->post('date');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$tempat_kegitan = $this->input->post('tempat_kegitan');
		$dress_code = $this->input->post('dress_code');

		$data = array(
						'nama_pengumuman' => $nama_pengumuman,
						'nama_kegiatan' => $nama_kegiatan,
						'date' => $date,
						'jam_mulai' => $jam_mulai,
						'jam_selesai' => $jam_selesai,
						'tempat_kegitan' => $tempat_kegitan,
						'dress_code' => $dress_code
					);

	}

}

/* End of file Dress_code.php */
/* Location: ./application/controllers/Dress_code.php */