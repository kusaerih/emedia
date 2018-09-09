<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slide extends CI_Model {

	function manual_query($qry)
    {
        return $this->db->query($qry);
    }

	function tampil_beritama()
		{

			// $this->db->limit('5');
			// $where = array('date' => date('Y-m-d'), BETWEEN, 'datee' => date('Y-m-d'));
			// $this->db->where($where);
			// $this->db->where('date >= ', date('Y-m-d'));
			// $this->db->where( 'datee >= ', date("'.$date.'"));
			// $this->db->where('datee <= ',  date("'.$datee.'"));
			// $this->db->where('date BETWEEN "'.$dat.'" AND "'.$datee.'"', '',false);
			// $this->db->order_by('date', 'desc');
			// return $this->db->get('berita_utamaa');
		}

	function tampil_fotoke()
	{
		$this->db->limit('5');
		return $this->db->get('foto_kegiatann');
	}

	function tampil_upacara()
	{
		$this->db->limit('5');
		$this->db->where('datee >= ', date('Y-m-d'));
		$this->db->order_by("date", "desc");
		return $this->db->get('berita_upacaraa');
	}

	function tampil_terbaik()
	{
		$this->db->limit('1');
		return $this->db->get('pegawai_terbaikk');
	}
	function tampil_bazar()
	{
		$this->db->limit('5');
		$this->db->where('datee', date('Y-m-d'));
		$this->db->order_by("date", "desc");
		return $this->db->get('bazarr');
	}
	function tampil_duka()
	{
		$this->db->limit('1');
		return $this->db->get('berita_dukaa');
	}
	function tampil_pengajian()
	{
		$this->db->limit('5');
		$this->db->where('datee', date('Y-m-d'));
		$this->db->order_by("date", "desc");
		return $this->db->get('pengajiann');
	}
	function tampil_senam()
	{
		$this->db->limit('5');
		$this->db->order_by("date", "desc");
		return $this->db->get('senamm');
	}
	function tampil_video()
	{
		$this->db->limit('1');
		return $this->db->get('video_kegiatann');
	}



}

/* End of file M_slide.php */
/* Location: ./application/models/M_slide.php */