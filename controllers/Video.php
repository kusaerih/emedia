<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_video');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index() {
		$data['videos'] = $this->m_video->get_all()->result();
		$this->load->view('video', $data);
	}

	public function create()
	{
		$data['videos'] = $this->m_video->get_all()->result();
		$this->load->view('video', $data);
	}

	private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('nama_video') == '')
        {
            $data['inputerror'][] = 'nama_video';
            $data['error_string'][] = 'Video name is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('keterangan') == '')
        {
            $data['inputerror'][] = 'keterangan';
            $data['error_string'][] = 'Keterangan Video is required';
            $data['status'] = FALSE;
        }

        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    public function video_do_upload()
    {
    	$config = array(
			'upload_path' => './images/',
			'allowed_types' => 'mp4|mpeg|avi|wmv|flv',
			'max_size' => '25048576',
			'overwrite' => FALSE,
	    	'remove_spaces' => TRUE,
			//'max_width' => '2000',
			//'max_height' => '2000'
	 	);

	 	$this->load->library('upload', $config);
	 	$this->upload->initialize($config);

	 	if (($_FILES['video']['size'] >= 25048576)) {
			$this->session->set_flashdata('pesann', 'Video Terlalu Besar !!!'); 
		    redirect('video');
		}

	 	if (!$this->upload->do_upload('video')) {
            $this->session->set_flashdata('pesann', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
	 	}

	 	return $this->upload->data('file_name');
    }

	public function store()
	{
		$this->form_validation->set_rules('nama_video', 'Nama File', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

		if($this->form_validation->run() != false){
			$data = array(
				'nama_video' => $this->input->post('nama_video'),
				'keterangan' => $this->input->post('keterangan')
			);

			

			$upload = $this->video_do_upload();
				if (!empty($_FILES['video']['name'])) {
					$upload = $this->video_do_upload();
					$data['video'] = $upload;
				}

			// $result = $this->m_video->insert('video_kegiatann', $data );
			// if ($result == true){
			//     $this->session->set_flashdata('pesann', 'Data Berhasil Diinput !!!'); 
			//     redirect('video');
			// }else{
			//     $this->session->set_flashdata('pesann','Data Gagal Diinput !!!');
			//     redirect('video');
			// }
		}
		$result = $this->m_video->insert('video_kegiatann', $data );
		        if ($result == true){
		        	$this->session->set_flashdata('success','Data Berhasil Diinput !!!'); 
		        	redirect('video');
		        }else{
		            $this->session->set_flashdata('success','Data Gagal Diinput !!!');
		        redirect('video');
		        }		
	}
	public function edit($id)
    {
        $where = array('id' => $id);
        $data['videos'] = $this->m_video->edit_data($where, 'video_kegiatann')->result();
        $this->load->view('video_edit', $data);
    }

	public function update()
    {
    	$id = $this->input->post('id');
    	$nama_video = $this->input->post('nama_video');
        $video = $this->input->post('video');
        $keterangan = $this->input->post('keterangan');
    	$config = array(
			'upload_path' => './images/',
			'allowed_types' => 'mp4|mpeg|avi|wmv|flv',
			'max_size' => '1000000',
			//'max_width' => '2000',
			//'max_height' => '2000'
 		);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('video')) {
			$data = array(
            'nama_video' => $nama_video,
            'keterangan' => $keterangan
            );

	        $where = array(
	            'id' => $id
	            );
		} else {
			$file = $this->upload->data();			
			
			$data = array(
            'nama_video' => $nama_video,
            'video' => $file['file_name'],
            'keterangan' => $keterangan
            );

	        $where = array(
	            'id' => $id
	            );
	    }

        $this->m_video->update($where,$data,'video_kegiatann');
        redirect('video');
    }


	public function delete($id)
	{
		$row = $this->m_video->get_by_id($id);

		if ($row) {

			// unlink() use for delete files like image.
			unlink('./images/'.$row->video);

			$this->m_video->delete($id);
			$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus  !!!');
		    redirect('video');
	        }else{
	    	$this->session->set_flashdata('pesan', 'Data Gagal Dihapus  !!!');
	    	redirect('video');
        }
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama_video', 'Nama File', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}



}
