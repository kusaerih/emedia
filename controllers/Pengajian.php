<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengajian');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['pengajiann'] = $this->m_pengajian->tampil_data()->result();
		$this->load->view('pengajian', $data);
	}

	public function tambah()
	{
		$this->load->view('pengajian');
	}

	public function tambah_aksi()
	{
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_kegiatan   = $this->input->post('nama_kegiatan');
		$date 			 = $this->input->post('date');
		$datee 			 = $this->input->post('datee');
		$jam_mulai 		 = $this->input->post('jam_mulai');
		$jam_selesai 	 = $this->input->post('jam_selesai');
		$tempat_kegiatan = $this->input->post('tempat_kegiatan');

		$data = array(
						'nama_pengumuman' => $nama_pengumuman,
						'nama_kegiatan'   => $nama_kegiatan,
						'date'            => $date,
						'datee'			  => $datee,
						'jam_mulai'       => $jam_mulai,
						'jam_selesai'     => $jam_selesai,
						'tempat_kegiatan' => $tempat_kegiatan
					 );

		$result = $this->m_pengajian->input_data('pengajiann', $data);

		if ($result >= 1) {
			$this->session->set_flashdata('not', 'Data berhasil diinput');
			redirect('pengajian');
		}else{
			$this->session->set_flashdata('not', 'Data gagal diinput');
			redirect('pengajian');
		}
	}

	public function hapus($id)
	 {
	 	$where = array('id' => $id);
	 	$hap = $this->m_pengajian->hapus_data($where, 'pengajiann');
	 	if ($hap >= 1) {
	 		$this->session->set_flashdata('del', 'Data berhasil dihapus');
	 		redirect('pengajian');
	 	}else{
	 		$this->session->set_flashdata('del', 'Data Gagal dihapus');
	 		redirect('pengajian');
	 	}

	 }

	 public function edit($id)
	 {
	 	$where = array('id' => $id );
	 	$data['pengajiann'] = $this->m_pengajian->edit_data($where, 'pengajiann')->result();
	 	$this->load->view('pengajian_edit', $data);
	 }

	public function update()
	 {
	 	$id 			 = $this->input->post('id');
	 	$nama_pengumuman = $this->input->post('nama_pengumuman');
	 	$nama_kegiatan   = $this->input->post('nama_kegiatan');
	 	$date			 = $this->input->post('date');
	 	$datee 			 = $this->input->post('datee');
	 	$jam_mulai 		 = $this->input->post('jam_mulai');
	 	$jam_selesai 	 = $this->input->post('jam_selesai');
	 	$tempat_kegiatan = $this->input->post('tempat_kegiatan');

	 	$data = array(
	 					'nama_pengumuman' => $nama_pengumuman,
	 					'nama_kegiatan'   => $nama_kegiatan,
	 					'date'			  => $date,
	 					'datee'			  => $datee,
	 					'jam_mulai'		  => $jam_mulai,
	 					'jam_selesai'	  => $jam_selesai,
	 					'tempat_kegiatan' => $tempat_kegiatan
	 				);

	 	$where = array('id' => $id );
	 	$this->m_pengajian->update_data($where, $data,  'pengajiann');
	 	redirect('pengajian');
	 } 

}

/* End of file Pengajian.php */
/* Location: ./application/controllers/Pengajian.php */