<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('page/home'); // Redirect ke page home

		// function render_login tersebut dari file core/MY_Controller.php
			$this->render_splash('splash'); 
		//$this->render_login('login'); // Load view login.php
	}
	public function registerindex(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('page/home'); // Redirect ke page home

		// function render_login tersebut dari file core/hw_Modifyobject(connection, object_to_change, remove, add)Y_Controller.php
			$this->render_register('register'); 
		//$this->render_login('login'); // Load view login.php
	}
	public function loginindex(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('page/home'); // Redirect ke page home

		// function render_login tersebut dari file core/MY_Controller.php
		//$this->render_splash('splash'); 
		$this->render_login('login'); // Load view login.php
	}

	public function login(){
		$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
		$password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

		$user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('auth/loginindex'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				$session = array(
					'authenticated'=>true, // Buat session authenticated dengan value true
					'username'=>$user->username,  // Buat session username
					'nama'=>$user->nama, // Buat session nama
					'role'=>$user->role // Buat session role
				);

				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('page/home'); // Redirect ke halaman home
			}else{
				$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
				redirect('auth/loginindex'); // Redirect ke halaman login
			}
		}
	}
	public function register(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$nama = $this->input->post('nama');
		if ($pass != $repass){
			$this->session->set_flashdata('message', 'Password tidak cocok'); // Buat session flashdata
			redirect('auth/registerindex');
		}else if($this->UserModel->check_username($username)){
			$this->session->set_flashdata('message', 'Username sudah ada'); // Buat session flashdata
			redirect('auth/registerindex');
		}else{
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama
				);
				$result = $this->UserModel->insert_new_profle($data);
				if($result){
					$this->session->set_flashdata('message', 'Register Berhasil'); // Buat session flashdata
					redirect('auth/registerindex');
				} else {
					$this->session->set_flashdata('message', 'Register Gagal'); // Buat session flashdata
					redirect('auth/registerindex');
				}
			}
		}

	public function logout(){
		$this->session->sess_destroy(); // Hapus semua session
		redirect('auth'); // Redirect ke halaman login
	}
}
