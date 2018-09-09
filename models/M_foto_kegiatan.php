<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto_kegiatan extends CI_Model {
	public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all()
  {
    // $this->db->limit(6);
    return $this->db->get('foto_kegiatann');

  }

  function edit_data($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('foto_kegiatann')->row();
  }

  public function insert($data)
  {
    $this->db->insert('foto_kegiatann', $data);
  }


  public function update($where,$data,$table)
  {
      $this->db->where($where);
      $this->db->update($table,$data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('foto_kegiatann');
  }

}

/* End of file M_produk_bkn.php */
/* Location: ./application/models/M_produk_bkn.php */