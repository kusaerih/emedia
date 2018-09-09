<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bazar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_bazar');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['bazarr'] = $this->m_bazar->tampil_data()->result();
		$this->load->view('bazar', $data);
	}

	public function tambah()
	{
		$this->load->view('bazar');
	}

	public function tambah_aksi()
	{
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_kegiatan	 = $this->input->post('nama_kegiatan');
		$date 			 = $this->input->post('date');
		$datee 			 = $this->input->post('datee');
		$jam_mulai 	 	 = $this->input->post('jam_mulai');
		$jam_selesai 	 = $this->input->post('jam_selesai');
		$tempat_kegiatan = $this->input->post('tempat_kegiatan');

		$data = array(
						'nama_pengumuman' => $nama_pengumuman,
						'nama_kegiatan'   => $nama_kegiatan,
						'date' 			  => $date,
						'datee'			  => $datee,
						'jam_mulai'		  => $jam_mulai,
						'jam_selesai' 	  => $jam_selesai,
						'tempat_kegiatan' => $tempat_kegiatan
					 );
		$result = $this->m_bazar->input_data('bazarr', $data);
		if ($result == true) {
			$this->session->set_flashdata('notti', 'Data Berhasil Diinput');
			redirect('bazar');
		}else{
			$this->session->set_flashdata('notti', 'Data Gagal Diinput');
			redirect('bazar');
		}
	}

	public function hapus($id)
	{
		$where = array('id' => $id );
		$noti = $this->m_bazar->hapus_data($where, 'bazarr');
		if ($noti >= 1) {
			$this->session->set_flashdata('nottif', 'Data Berhasil Dihapus');
			redirect('bazar');
		}else{
			$this->session->set_flashdata('nottif', 'Data Gagal Dihapus');
			redirect('bazar');
		}
	}

	public function edit($id)
	{
		$where = array('id' => $id );
		$data['bazarr'] = $this->m_bazar->edit_data($where, 'bazarr')->result();
		$this->load->view('bazar_edit', $data);
	}

	public function update($id)
	{
		$id 			 = $this->input->post('id');
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_kegiatan   = $this->input->post('nama_kegiatan');
		$date 			 = $this->input->post('date');
		$datee 			 = $this->input->post('datee');
		$jam_mulai 		 = $this->input->post('jam_mulai');
		$jam_selesai  	 = $this->input->post('jam_selesai');
		$tempat_kegiatan = $this->input->post('tempat_kegiatan');

		$data = array(
						'nama_pengumuman' => $nama_pengumuman,
						'nama_kegiatan'   => $nama_kegiatan,
						'date' 			  => $date,
						'datee'			  => $datee,
						'jam_mulai'   	  => $jam_mulai,
						'jam_selesai'  	  => $jam_selesai,
						'tempat_kegiatan' => $tempat_kegiatan );

		$where = array('id' => $id );
		$this->m_bazar->update_data($where, $data, 'bazarr');
		redirect('bazar');


	}



}

/* End of file Bazar.php */
/* Location: ./application/controllers/Bazar.php */