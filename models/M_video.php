<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video extends CI_Model {
public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all()
  {
    return $this->db->get('video_kegiatann');
  }

  function edit_data($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('video_kegiatann')->row();
  }

  public function insert($table, $data)
  {
    $this->db->insert($table, $data);
  }


  public function update($where,$data,$table)
  {
      $this->db->where($where);
      $this->db->update($table,$data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('video_kegiatann');
  }
  

}

/* End of file M_video.php */
/* Location: ./application/models/M_video.php */