<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_utama extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('m_berita_utama');
		$this->load->helper('url');
		$this->load->library('session');
		
	}
	
	public function index()
	{
		
		$data['berita_utamaa']= $this->m_berita_utama->tampil_data()->result();
		$this->load->view('berita_utama', $data);	

	}
    
    public function tambah()
    {
        $this->load->view('berita_utama');
    }
    

    public function tambah_aksi()
    {
            
        $nama_kegiatan   = $this->input->post('nama_kegiatan');
        $date            = $this->input->post('date');
        $datee           = $this->input->post('datee');
        $jam_mulai       = $this->input->post('jam_mulai');
        $jam_selesai     = $this->input->post('jam_selesai');
        $tempat_kegiatan = $this->input->post('tempat_kegiatan');
        $pic             = $this->input->post('pic');

        $data = array(
            'nama_kegiatan'   => $nama_kegiatan,
            'date'            => $date,
            'datee'           => $datee,
            'jam_mulai'       => $jam_mulai,
            'jam_selesai'     => $jam_selesai,
            'tempat_kegiatan' => $tempat_kegiatan,
            'pic'             => $pic
            );

        $result = $this->m_berita_utama->input_data('berita_utamaa', $data);
        if ($result == true){
        	$this->session->set_flashdata('success','Data Berhasil Diinput !!!'); 
        	redirect('berita_utama');
        }else{
            $this->session->set_flashdata('success','Data Gagal Diinput !!!');
        redirect('berita_utama');
        }
    }

    public function hapus($id)
    {
        $where = array ('id' => $id);
        $bb = $this->m_berita_utama->hapus_data($where, 'berita_utamaa');
        if ($bb>= 1) {
        	$this->session->set_flashdata('pesann', 'Data Berhasil Dihapus  !!!');
        	redirect('berita_utama', 'refresh');
        }else{
        	$this->session->set_flashdata('pesann', 'Data Gagal Dihapus  !!!');
        	redirect('berita_utama', 'refresh');
        }
    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['berita_utamaa'] = $this->m_berita_utama->edit_data($where, 'berita_utamaa')->result();
        $this->load->view('berita_utama_edit', $data);
    }
    public function update()
    {
        $id              = $this->input->post('id');
        $nama_kegiatan   = $this->input->post('nama_kegiatan');
        $date            = $this->input->post('date');
        $datee           = $this->input->post('datee');
        $jam_mulai       = $this->input->post('jam_mulai');
        $jam_selesai     = $this->input->post('jam_selesai');
        $tempat_kegiatan = $this->input->post('tempat_kegiatan');
        $pic             = $this->input->post('pic');

        $data = array(
            'nama_kegiatan'   => $nama_kegiatan,
            'date'            => $date,
            'datee'           => $datee,
            'jam_mulai'       => $jam_mulai,
            'jam_selesai'     => $jam_selesai,
            'tempat_kegiatan' => $tempat_kegiatan,
            'pic'             => $pic
            );

        $where = array('id' => $id);

        $this->m_berita_utama->update_data($where,$data,'berita_utamaa');
        redirect('berita_utama');
    }

}

/* End of file Berita_utama.php */
/* Location: ./application/controllers/Berita_utama.php */