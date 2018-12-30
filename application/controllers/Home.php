<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Model_Artikel'=>'artikel'));

		if ($this->session->isLogin != TRUE) {
			redirect('AuthController/login');
		}

	}

	public function dashboard()
	{
		$data['artikel']= $this->artikel->getArtikel();
		$this->load->helper('url');
		$data['title']="Ragam Satwa";
		$data['page']= 'home/index';
		$this->load->view('shared/layout',$data);
	}

	public function about()
	{
		$this->load->helper('url');
		$data['title']="About-Ragam Satwa";
		$data['page']= 'home/about';
		$this->load->view('shared/layout',$data);
	}

    public function login()
    {
        $this->load->helper('url');
        $data['title']="Login-Ragam Satwa";
        $data['page']= 'home/login';
        $this->load->view('shared/layout',$data);
    }

    public function newPostLayout()
	{
		$this->load->helper('url');
		$data['title']="New Post-Ragam Satwa";
		$data['page']= 'kontent/newPost';
		$this->load->view('shared/layout',$data);
	}

	public function postArtikel(){
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
       $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar')){
			echo "<script>alert('File Harus Gambar');location='".site_url()."/home/newPostLayout'</script>";
		}else{
		$data = array(
			'title' => $this->input->post('title'),
			'status'=> 1,
			'category' => $this->input->post('category'),
			'content' => $this->input->post('content'), 
			'url' => $this->upload->data('file_name'),
		);
		if ($this->artikel->postArtikel($data)) {
			redirect('Home/dashboard');
		}
	}
}


	public function updateArtikel($no,$status){
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
       $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar')){
			echo "<script>alert('File Harus Gambar');location='".site_url()."/home/dashboard'</script>";
		}else{
		$data = array(
			'title' => $this->input->post('title'),
			'status'=> 1,
			'category' => $this->input->post('category'),
			'content' => $this->input->post('content'), 
			'url' => $this->upload->data('file_name'),
		);
		if ($this->artikel->updateArtikel($no,$data)== "TRUE") {
			redirect('home/dashboard');
		}
	}
}

	public function selectArtikelbyId($id){
		$data['selectArtikel'] = $this->artikel->selectArtikelbyId($id);
		$data['id'] = $id;
		$data['title']="Update Post-Ragam Satwa";
		$data['page']= 'kontent/update';
		$this->load->view('shared/layout',$data);
	}

	public function deleteArtikel($no){
		if ($this->artikel->deleteArtikel($no)) {
			redirect('home/dashboard');
		}
	}

	 public function updateStatus($no,$status){
	 	if($status ==1 ){
	 		$data ['status'] = 0;
	 	}else{
	 		$data ['status'] = 1; 
	 	}
	 	if ($this->artikel->updateArtikel($no,$data)== "TRUE") {
			redirect('home/dashboard');
		}
	}

	public function logout()
    {
        $this->session->sess_destroy();
         echo "<script>alert('bye.. Terimakasih admin');location='".site_url('AuthController/login')."'</script>";
    }

}