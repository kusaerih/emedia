<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Senam extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_senam');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['senamm'] = $this->m_senam->tampil_data()->result();
		$this->load->view('senam', $data);
	}

	public function tambah()
	{
		$this->load->view('senam');
	}

	public function tambah_aksi()
	{
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_kegiatan   = $this->input->post('nama_kegiatan');
		$date 			 = $this->input->post('date');
		$date			 = $this->input->post('datee');
		$jam_mulai 	 	 = $this->input->post('jam_mulai');
		$jam_selesai 	 = $this->input->post('jam_selesai');
		$tempat_kegiatan = $this->input->post('tempat_kegiatan');

		$data = array(
						'nama_pengumuman' => $nama_pengumuman,
						'nama_kegiatan'   => $nama_kegiatan,
						'date' 			  => $date,
						'date'			  => $datee,
						'jam_mulai' 	  => $jam_mulai,
						'jam_selesai' 	  => $jam_selesai,
						'tempat_kegiatan' => $tempat_kegiatan
					 );
		$result = $this->m_senam->input_data('senamm', $data);
		if ($result >= 1) {
			$this->session->set_flashdata('no', 'Data Berhasil diinput');
			redirect('senam');
		}else{
			$this->session->set_flashdata('no', 'Data Gagal diinput');
			redirect('senam');
		}
	}

	public function hapus($id)
	{
		$where = array('id' => $id );
		$pesan = $this->m_senam->hapus_data($where, 'senamm');
			if ($pesan >= 1) {
				$this->session->set_flashdata('not', 'Data berhasil dihapus');
				redirect('senam');
			} else {
				$this->session->set_flashdata('not', 'Data gagal dihapus');
				redirect('senam');
			}
		}

	public function edit($id)
		{
			$where = array('id' => $id);
			$data['senamm'] = $this->m_senam->edit_data($where, 'senamm')->result();
			$this->load->view('senam_edit', $data);
		}

	public function update()
		{
			$id 			 = $this->input->post('id');
			$nama_pengumuman = $this->input->post('nama_pengumuman');
			$nama_kegiatan   = $this->input->post('nama_kegiatan');
			$date 			 = $this->input->post('date');
			$datee           = $this->input->post('datee');
			$jam_mulai 		 = $this->input->post('jam_mulai');
			$jam_selesai 	 = $this->input->post('jam_selesai');
			$tempat_kegiatan = $this->input->post('tempat_kegiatan');

			$data = array(
							'nama_pengumuman' => $nama_pengumuman,
							'nama_kegiatan'   => $nama_kegiatan,
							'date' 			  => $date,
							'datee' 		  => $datee,
							'jam_mulai'		  => $jam_mulai,
							'jam_selesai' 	  => $jam_selesai,
							'tempat_kegiatan' => $tempat_kegiatan
						 );
			$where = array('id' => $id );
			$this->m_senam->update_data($where, $data, 'senamm');
			redirect('senam');
		}


}

/* End of file Senam.php */
/* Location: ./application/controllers/Senam.php */