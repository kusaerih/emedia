<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_kegiatan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foto_kegiatan');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('url', 'download'));
		$this->load->library('session');
	}

	public function index()
	{		
		$data['imagess'] = $this->m_foto_kegiatan->get_all()->result();
		$this->template('foto_kegiatan', $data);
	}

	public function template($content, $data=null)
	{
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template', $data);
	}

	public function do_download($file)
	{
		$foto = $file;
		$data= file_get_contents('./images/'.$file);
		force_download($name, $data);
		redirect('foto_kegiatan');	
	}

	public function create()
	{
		$data['imagess'] = $this->m_foto_kegiatan->get_all()->result();
		$this->load->view('foto_kegiatan', $data);
	}

	public function store()
	{
		$config = array(
			'upload_path' 	=> './images/',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' 		=> '2048',
			'max_width'		=> '2000',
			'max_height' 	=> '2000'
 		);
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('foto')) {
			$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
			redirect(site_url('foto_kegiatan/create'));
		} else {
			$file = $this->upload->data();			
			$data = array(
					'nama_kegiatan' => $this->input->post('nama_kegiatan'),
					'foto' 			=> $file['file_name'],
					'keterangan' 	=> $this->input->post('keterangan')
			);

			$result = $this->m_foto_kegiatan->insert($data, 'foto_kegiatann');
        if ($result >= 1){
        	$this->session->set_flashdata('pesann', 'Data Berhasil Diinput !!!'); 
        	redirect('foto_kegiatan');
            }else{
            $this->session->set_flashdata('pesann','Data Berhasil Diinput !!!');
        redirect('foto_kegiatan');
        }
      }
	}
	public function edit($id)
    {
        $where = array('id' => $id);
        $data['imagess'] = $this->m_foto_kegiatan->edit_data($where, 'foto_kegiatann')->result();
        $this->load->view('foto_kegiatan_edit', $data);
    }

	public function update()
    {
    	$id  			= $this->input->post('id');
    	$nama_kegiatan 	= $this->input->post('nama_kegiatan');
        $foto 			= $this->input->post('foto');
        $keterangan 	= $this->input->post('keterangan');
    	$config 		= array(
			'upload_path' 	=> './images/',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' 		=> '2048',
			'max_width' 	=> '2000',
			'max_height' 	=> '2000'
 		);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')) {
			$data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'keterangan' 	=> $keterangan
            );

	    $where = array('id' => $id );
	    
		} else {
			$file = $this->upload->data();			
			
			$data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'foto' 			=> $file['file_name'],
            'keterangan' 	=> $keterangan
            );

	        $where = array(
	            'id' => $id
	            );
	    }

        $this->m_foto_kegiatan->update($where,$data,'foto_kegiatann');
        redirect('foto_kegiatan');
    }


	public function delete($id)
	{
		$row = $this->m_foto_kegiatan->get_by_id($id);

		if ($row) {

			// unlink() use for delete files like image.
			unlink('./images/'.$row->filefoto);

			$this->m_foto_kegiatan->delete($id);
			$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus  !!!');
		    redirect('foto_kegiatan');
	        }else{
	    	$this->session->set_flashdata('pesan', 'Data Gagal Dihapus  !!!');
	    	redirect('foto_kegiatan');
        }
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama_kegiatan', 'Nama File', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}
	

/* End of file foto_kegiatan.php */
/* Location: ./application/controllers/foto_kegiatan.php */