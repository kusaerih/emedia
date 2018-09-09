<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	function tampil_data()
	{
		$this->db->order_by("date", "desc");
		return $this->db->get('berita_upacaraa');
	}

	function insert_data($table, $data)
	{
		return $this->db->input($table, $data);
	}

	function hapus_data($where, $table)
	{
		$this->db->where($where);

		if ($this->db->affected_rows() == 1) {
			return TRUE;
		}
		return FALSE;
	}

	function edit_data($where, $data)
	{
		return $this->db->getwhere($table, $data);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */