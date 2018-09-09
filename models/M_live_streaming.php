<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_live_streaming extends CI_Model {

	function tampil_data()
	{
		return $this->db->get('live_streamingg');
	}

	function input_data($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);
		return $this->db->delete($table);
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		}
		return FALSE;
	}

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

}

/* End of file M_live_streaming.php */
/* Location: ./application/models/M_live_streaming.php */