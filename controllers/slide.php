<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_slide');
		$this->load->helper('url');
	}

	public function index()
	{	
		$date_now 	= date('Y-m-d');
		$end_date 	= date('Y-m-d', strtotime("+3 day", strtotime(date("Y-m-d"))));

		$qry="SELECT * FROM `berita_utamaa` WHERE   `datee` >= '$date_now' ORDER BY `date` ASC LIMIT 5 ";

		$data['beritama'] = $this->m_slide->manual_query($qry)->result();

		// $data['beritama'] = $this->m_slide->tampil_beritama()->result();
					//echo $this->db->last_query(); die();
		
		$data['fotokeg'] = $this->m_slide->tampil_fotoke()->result();
		$data['upacara'] = $this->m_slide->tampil_upacara()->result();
		$data['terbaik'] = $this->m_slide->tampil_terbaik()->result();
		$data['bazar'] = $this->m_slide->tampil_bazar()->result();
		$data['duka'] = $this->m_slide->tampil_duka()->result();
		$data['pengajian'] = $this->m_slide->tampil_pengajian()->result();
		$data['senam'] = $this->m_slide->tampil_senam()->result();
		$data['video'] = $this->m_slide->tampil_video()->result();
		// $data['bazarr'] = $this->m_bazar->tampil_data()->result();

		$this->load->view('slide/indexx', $data);
		
	}

	// public function fotoke()
	// {
	// 	$dataf['fotokeg'] = $this->m_slide->tampil_fotoke()->result();
	// 	$this->load->view('revealmaster/indexx', $dataf);
	// }

}

/* End of file slide.php */
/* Location: ./application/controllers/slide.php */