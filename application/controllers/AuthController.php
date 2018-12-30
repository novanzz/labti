<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'model_artikel' => 'artikel',
            'model_user'	=> 'user'
        ));
    }

    public function index()
    {
        $data['artikel']= $this->artikel->getArtikel();
        $this->load->helper('url');
        $data['title']="Ragam Satwa";
        $data['page']= 'home/home';
        $this->load->view('shared/layout',$data);
    }
    
    public function about()
    {
        $this->load->helper('url');
        $data['title']="About-Ragam Satwa";
        $data['page']= 'home/about';
        $this->load->view('shared/layout',$data);
    }
    public function register()
    {
    	$config = array(
    		array(
    			'field'	=> 'username',
    			'label'	=> 'Pengguna',
    			'rules'	=> 'trim|required|is_unique[user.username]',
    			'errors' => array(
    				'required'		=> '%s harus diisi',
    				'min_length[5]'	=> 'Panjang %s harus lebih dari 5'
    			)
    		),
    		array(
    			'field'	=> 'email',
    			'label'	=> 'E-mail',
    			'rules'	=> 'required|valid_email|is_unique[user.email]'
    		),
    		array(
    			'field'	=> 'password',
    			'label'	=> 'Password',
    			'rules'	=> 'required',
                'errors' => array(
                    'required'      => '%s harus diisi',
                    'min_length[5]' => 'Panjang %s harus lebih dari 5'
                )
    		),
    		array(
    			'field'	=> 'repassword',
    			'label'	=> 'Re-Password',
    			'rules'	=> 'required|matches[password]'
    		),

    	);
    	$this->form_validation->set_rules($config);

    	if($this->form_validation->run() == false){
    		 $this->load->helper('url');
            $data['title']="Registerasi";
            $data['page']= 'home/register';
            $this->load->view('shared/layout',$data);
    	}else{
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');
            $email      = $this->input->post('email');
    		$data = array(
    			'username' 	=> $username,
    			'password' 	=> md5($password),
    			'email' 	=> $email,
    		);
    		$user_id = $this->user->addUser($data);
    		if($user_id > 0){
    			$sessionData = array(
    				'username' 	=> $this->input->post('username'),
    				'id'		=> $user_id,
    				'isLogin'	=> true
    			);
    			$this->session->set_userdata($sessionData);
                 echo "<script>alert('Registerasi berhasil.. Selamat Datang $username');location='".site_url('Home/dashboard')."'</script>";
    		}
    	}
        
    }

    public function login()
    {
    	$this->form_validation->set_rules('username', 'Username', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
    	if($this->form_validation->run() == false){

    		$data['title']="Login";
            $data['page']= 'home/login';
            $this->load->view('shared/layout',$data);

    	}else{
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$data = array(
	    		'username'	=> $username,
	    		'password'	=> md5($password)
	    	);
			$user = $this->user->getUser($data);
			echo '<script>console.log('.json_encode($user).')</script>';
	    	if(count($user) == 1){
	    		$sessionData = array(
	    				'username' 	=> $username,
	    				'id'		=> $user->id,
	    				'isLogin'	=> true
	    			);
	    		$this->session->set_userdata($sessionData);
                echo "<script>alert('selamat datang $username');location='".site_url('Home/dashboard')."'</script>";
	    	}else{
	    		$this->session->set_flashdata('failLogin', 'Username atau Password salah');
	    		redirect('AuthController/login');
	    	}
    	}
    }

    public function Artikel($id)
    {
        $data['artikel'] = $this->artikel->selectArtikelbyId($id);
            $data['title']="Artikel";
            $data['page']= 'kontent/artikel';
            $this->load->view('shared/layout',$data);
    }

}
