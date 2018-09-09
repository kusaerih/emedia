<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_senam extends CI_Model {

function tampil_data()
	{
		$this->db->order_by("date", "desc");
		return $this->db->get('senamm');
	}
function input_data($table,$data)
	{
		return $this->db->insert($table, $data);
	}
function hapus_data($where,$table)
	{
		$this->db->where($where);
		return $this->db->delete($table);
		if ($this->db->affected_rows() == 1) {
			return TRUE;
		}
		return FALSE;
	}
function edit_data($where,$table)
	{
		return $this->db->get_where($table, $where);
	}

function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}	

}

/* End of file M_senam.php */
/* Location: ./application/models/M_senam.php */