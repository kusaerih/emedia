<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita_duka extends CI_Model {

	public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all()
  {
    return $this->db->get('berita_dukaa');
  }

  function edit_data($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('berita_dukaa')->row();
  }

  public function insert($data)
  {
    $this->db->insert('berita_dukaa', $data);
  }


  public function update($where,$data,$table)
  {
      $this->db->where($where);
      $this->db->update($table,$data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('berita_dukaa');
  }


}

/* End of file M_berita_duka.php */
/* Location: ./application/models/M_berita_duka.php */