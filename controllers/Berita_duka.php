<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_duka extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita_duka');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$data['berita_dukaa'] = $this->m_berita_duka->get_all()->result();
		$this->load->view('berita_duka', $data);
	}

	public function create()
	{
		$data['berita_dukaa'] = $this->m_berita_duka->get_all()->result();
		$this->load->view('berita_duka', $data);
	}

	public function store()
	{
		$config = array(
						 'upload_path'   => './images/',
						 'allowed_types' => 'gif|jpg|jpeg|png',
						 'max_size' 	 => '2048',
						 'max_width'	 => '2000',
						 'max_height' 	 => '2000'
						);
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('foto')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('berita_duka/create'));
		}else{
			$file= $this->upload->data();
			$data = array(
							'nama_pengumuman' => $this->input->post('nama_pengumuman'),
							'nama_pegawai' 	  => $this->input->post('nama_pegawai'),
							'nip' 			  => $this->input->post('nip'),
							'jabatan' 		  => $this->input->post('jabatan'),
							'foto' 			  => $file['file_name'],
							'keterangan' 	  => $this->input->post('keterangan')
						 );
			$result = $this->m_berita_duka->insert($data, 'berita_dukaa');
			if ($result >= 1) {
				$this->session->set_flashdata('pop', 'Data Berhasil Diinput');
				redirect('berita_duka');
			}else{
				$this->session->set_flashdata('pop', 'Data Berhasil Diinput');
				redirect('berita_duka');
			}
		}
	}

	public function delete($id)
	{
		$row = $this->m_berita_duka->get_by_id($id);

		if ($row == 1) {
			unlink('/images'.$row->foto);

			$this->m_berita_duka->delete($id);
			$this->session->set_flashdata('popu', 'Data berhasil dihapus');
			redirect('berita_duka');
		}else{
			$this->session->set_flashdata('popu', 'data gagal dihapus');
			redirect('berita_duka');
		}
	}

	public function edit($id)
	{
		$where = array('id' => $id );
		$data['berita_dukaa'] = $this->m_berita_duka->edit_data($where, 'berita_dukaa')->result();
		$this->load->view('berita_duka_edit', $data);
	}

	public function update()
	{
		$id 			 = $this->input->post('id');
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_pegawai    = $this->input->post('nama_pegawai');
		$nip 			 = $this->input->post('nip');
		$jabatan 		 = $this->input->post('jabatan');
		$foto  			 = $this->input->post('foto');
		$keterangan   	 = $this->input->post('keterangan');

		$config = array(
							'allowed_path'  => './images/',
							'allowed_types' => 'jpg|jpeg|png',
							'max_size' 		=> '2048',
							'max_width'     => '2000', 
							'max_height'    => '2000'
						);
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('foto')) {
			// $file = $this->upload->data();
			$data = array(
							'nama_pengumuman'  	=> $nama_pengumuman,
							'nama_pegawai' 		=> $nama_pegawai,
							'nip' 				=> $nip,
							'jabatan' 			=> $jabatan,
							// 'foto' 				=> $file['file_name'],
							'keterangan' 		=> $keterangan 
						);
			$where = array('id' => $id );
		} else {
			$file = $this->upload->data();
			$data = array(
							'nama_pengumuman' 	=> $nama_pengumuman,
							'nama_pegawai' 		=> $nama_pegawai,
							'nip' 				=> $nip,
							'jabatan' 			=> $jabatan,
							'foto' 				=> $file['file_name'],
							'keterangan' 		=> $keterangan
						);
			$where = array('id' => $id );
		}
			$this->m_berita_duka->update($where, $data, 'berita_dukaa');
			redirect('berita_duka');
		}
	}

	// public function update()
 //    {
 //    	$id  			= $this->input->post('id');
 //    	$nama_kegiatan 	= $this->input->post('nama_kegiatan');
 //        $foto 			= $this->input->post('foto');
 //        $keterangan 	= $this->input->post('keterangan');
 //    	$config 		= array(
	// 		'upload_path' 	=> './images/',
	// 		'allowed_types' => 'jpeg|jpg|png',
	// 		'max_size' 		=> '2048',
	// 		'max_width' 	=> '2000',
	// 		'max_height' 	=> '2000'
 // 		);
	// 	$this->load->library('upload', $config);
	// 	if (!$this->upload->do_upload('foto')) {
	// 		$data = array(
 //            'nama_kegiatan' => $nama_kegiatan,
 //            'keterangan' 	=> $keterangan
 //            );

	//     $where = array('id' => $id );
	    
	// 	} else {
	// 		$file = $this->upload->data();			
			
	// 		$data = array(
 //            'nama_kegiatan' => $nama_kegiatan,
 //            'foto' 			=> $file['file_name'],
 //            'keterangan' 	=> $keterangan
 //            );

	//         $where = array(
	//             'id' => $id
	//             );
	//     }

 //        $this->m_foto_kegiatan->update($where,$data,'foto_kegiatann');
 //        redirect('foto_kegiatan');
 //    }

/* End of file Berita_duka.php */
/* Location: ./application/controllers/Berita_duka.php */