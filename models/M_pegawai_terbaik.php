<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai_terbaik extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all()
	{
		return $this->db->get('pegawai_terbaikk');
	}

	public function get_by_id($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('pegawai_terbaikk')->row();
	}

	public function insert($data)
	{
		$this->db->insert('pegawai_terbaikk', $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pegawai_terbaikk');
	}

}

/* End of file M_pegawai_terbaik.php */
/* Location: ./application/models/M_pegawai_terbaik.php */