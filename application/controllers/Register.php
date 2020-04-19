<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	 public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}
	public function registerindex(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('page/home'); // Redirect ke page home

		// function render_login tersebut dari file core/hw_Modifyobject(connection, object_to_change, remove, add)Y_Controller.php
			$this->render_register('register'); 
		//$this->render_login('login'); // Load view login.php
	}
	
	
	public function register(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$nama = $this->input->post('nama');
		if ($pass != $repass){
			$this->session->set_flashdata('message', 'Password tidak cocok'); // Buat session flashdata
			redirect('Register');
		}else if($this->UserModel->check_username($username)){
			$this->session->set_flashdata('message', 'Username sudah ada'); // Buat session flashdata
			redirect('Register');
		}else{
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama
				);
				$result = $this->UserModel->insert_new_profle($data);
				if($result){
					$this->session->set_flashdata('message', 'Register Berhasil'); // Buat session flashdata
					redirect('Register');
				} else {
					$this->session->set_flashdata('message', 'Register Gagal'); // Buat session flashdata
					redirect('Register');
				}
			}
		}
	}

?>