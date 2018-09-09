<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_streaming extends CI_Controller {

	function __construct() {

		parent::__construct();

		$this->load->model('m_live_streaming');
		$this->load->helper('url');
		$this->load->library('session');

		}

	public function index() {

		$data['live_streamingg'] = $this->m_live_streaming->tampil_data()->result();
		// $data['berita_utamaa']= $this->m_berita_utama->tampil_data()->result();
		$this->load->view('live_streaming', $data);
	}

	public function tambah()
	{
		$this->load->view('live_streaming');
	}

	public function tambah_aksi()
	{
		$ip = $this->input->post('ip');

		$data = array('ip' => $ip);

		$result = $this->m_live_streaming->input_data('live_streamingg', $data);
		if ($result == 1) {
			$this->session->userdata('mess', 'Data Berhasil di input');
			redirect('live_streaming', 'refresh');
		}else {
			$this->session->userdata('mess', 'Data Gagal Di Input');
			redirect('live_streaming', 'refresh');
		}
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$hap = $this->m_live_streaming->hapus_data('live_streamingg', $where);
		if ($hap >= 1) {
			$this->session->userdata('messa', 'Data berhasil Di Hapus');
			redirect('live_streaming', 'refresh');
		}else {
			$this->session->userdata('messa', 'Data Gagal Dihapus');
			redirect('live_streaming','refresh');
		}
	}

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['live_streamingg'] = $this->m_live_streaming->edit_data($where, 'live_streamingg')->result();
		$this->load->view('live_streaming', $data);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$ip = $this->input->post('ip');

		$data = array('ip' => $ip);

		$where = array('id' => $id);

		$this->m_live_streaming->update_data($where, $data, 'live_streamingg');
		redirect('live_streaming');

	}

}

/* End of file Live_streaming.php */
/* Location: ./application/controllers/Live_streaming.php */