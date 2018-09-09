<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_kegiatan extends CI_Controller {

	function __construct() {
	     parent::__construct();
	     $this->load->model('m_jadwal_kegiatan');
		$this->load->helper('url');
		$this->load->library('session');
    }

	public function index()
	{
		$data['jadwal_kegiatann']= $this->m_jadwal_kegiatan->tampil_data()->result();
		$this->load->view('jadwal_kegiatan', $data);
	}
	public function tambah()
    {
        $this->load->view('jadwal_kegiatan');
    }
    

    public function tambah_aksi()
    {

        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $tanggal = $this->input->post('tanggal');
        $tempat_kegiatan = $this->input->post('tempat_kegiatan');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'tanggal' => $tanggal,
            'tempat_kegiatan' => $tempat_kegiatan
            );

        $result = $this->m_jadwal_kegiatan->input_data('jadwal_kegiatann', $data);
        if ($result == true){
        	$this->session->set_flashdata('success','Data Berhasil Diinput !!!'); 
        	redirect('jadwal_kegiatan');
        }else{
            $this->session->set_flashdata('success','Data Gagal Diinput !!!');
        redirect('jadwal_kegiatan');
        }
    }

    public function hapus($id)
    {
        $where = array ('id' => $id);
        $bb = $this->m_jadwal_kegiatan->hapus_data($where, 'jadwal_kegiatann');
        if ($bb>= 1) {
        	$this->session->set_flashdata('pesann', 'Data Berhasil Dihapus  !!!');
        	redirect('jadwal_kegiatan', 'refresh');
        }else{
        	$this->session->set_flashdata('pesann', 'Data Gagal Dihapus  !!!');
        	redirect('jadwal_kegiatan', 'refresh');
        }
    }


    public function edit($id)
    {
        $where = array('id' => $id);
        $data['jadwal_kegiatann'] = $this->m_jadwal_kegiatan->edit_data($where, 'jadwal_kegiatann')->result();
        $this->load->view('jadwal_kegiatan_edit', $data);
    }


    public function update()
    {
        $id = $this->input->post('id');
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $tanggal = $this->input->post('tanggal');
        $tempat_kegiatan = $this->input->post('tempat_kegiatan');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'tanggal' => $tanggal,
            'tempat_kegiatan' => $tempat_kegiatan
            );

        $where = array(
            'id' => $id
            );

        $this->m_jadwal_kegiatan->update_data($where,$data,'jadwal_kegiatann');
        redirect('jadwal_kegiatan');
    }

}

/* End of file Jadwal_kegiatan.php */
/* Location: ./application/controllers/Jadwal_kegiatan.php */