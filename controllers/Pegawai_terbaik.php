<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_terbaik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai_terbaik');
		 
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$data['pegawai_terbaikk'] = $this->m_pegawai_terbaik->get_all()->result();
		$this->load->view('pegawai_terbaik', $data);
	}

	public function create()
	{
		$data['pegawai_terbaikk'] = $this->m_pegawai_terbaik->get_all()->result();
		$this->load->view('pegawai_terbaik', $data);
	}

	public function store()
	{
		$config = array(
		'upload_path' 	=> './images/',
		'allowed_types' => 'gif|jpg|png|jpeg',
		'max_size'  	=> '2048',
		'max_width'  	=> '2000',
		'max_height'    => '2000'
	);
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('pegawai_terbaik/create'));
		}
		else{
			$file = $this->upload->data();
			$data = array(
							'nama_pengumuman' => $this->input->post('nama_pengumuman'),
							'nama_pegawai'	  => $this->input->post('nama_pegawai'),
							'nip' 			  => $this->input->post('nip'),
							'jabatan' 		  => $this->input->post('jabatan'),
							'foto' 			  => $file['file_name'],
							'keterangan' 	  => $this->input->post('keterangan')
						);
			$result = $this->m_pegawai_terbaik->insert($data, 'pegawai_terbaikk');
			if ($result >= 1) {
				$this->session->set_flashdata('noti', 'Data Berhasil diinput !!!');
				redirect('pegawai_terbaik');
			}else{
				$this->session->set_flashdata('noti', 'Data Berhasil Diinput !!!');
				redirect('pegawai_terbaik');
			}
		}
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['pegawai_terbaikk'] = $this->m_pegawai_terbaik->edit_data($where, 'pegawai_terbaikk')->result();
		$this->load->view('pegawai_terbaik_edit', $data);
	}

	public function update()
	{
		$id 			 = $this->input->post('id');
		$nama_pengumuman = $this->input->post('nama_pengumuman');
		$nama_pegawai 	 = $this->input->post('nama_pegawai');
		$nip 			 = $this->input->post('nip');
		$jabatan 	 	 = $this->input->post('jabatan');
		$foto 			 = $this->input->post('foto');
		$keterangan 	 = $this->input->post('keterangan');

		$config = array(
						'upload_path'   => './images/',
						'allowed_types' => 'jpg|jpeg|png',
						'max_size' 		=> '2048',
						'max_width'		=> '2000',
						'max_height'	=> '2000'
						);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')) {
			$data = array(
							'nama_pengumuman' => $nama_pengumuman,
							'nama_pegawai'    => $nama_pegawai,
							'nip' 			  => $nip,
							'jabatan'  		  => $jabatan,
							'keterangan' 	  => $keterangan 
						);
			$where = array('id' => $id);
		}else{
			$file = $this->upload->data();

			$data = array(
							'nama_pengumuman' => $nama_pengumuman,
							'nama_pegawai' 	  => $nama_pegawai,
							'nip' 			  => $nip,
							'jabatan' 		  => $jabatan,
							'foto' 			  => $file['file_name'],
							'keterangan' 	  => $keterangan
						  );
			$where = array('id' => $id);
		}
		$this->m_pegawai_terbaik->update($where, $data, 'pegawai_terbaikk');
		redirect('pegawai_terbaik');
	}

	public function delete($id)
	{
		$row = $this->m_pegawai_terbaik->get_by_id($id);
		
		if ($row) {
			unlink('./images'.$row->foto);

			$this->m_pegawai_terbaik->delete($id);
			$this->session->set_flashdata('notif', 'Data Berhasil Dihapus');
			redirect('pegawai_terbaik');
		}else{
			$this->session->set_flashdata('notif', 'Data gagal dihapus');
			redirect('pegawai_terbaik');
		}
	}

}

/* End of file pegawai_terbaik.php */
/* Location: ./application/controllers/pegawai_terbaik.php */