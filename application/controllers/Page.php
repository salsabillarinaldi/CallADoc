<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
    public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}
	public function home(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('home'); // load view home.php
	}

	public function kontak(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('kontak'); // load view kontak.php
	}
	
	public function indexobat()
	{
		$data_obat = $this->UserModel->Getobat_nib();
		$data_jenis = $this->UserModel->Getjenis_nib();
		$this->render_backend('obat',['data'=>$data_obat,'dataJ'=>$data_jenis]);
	}
	public function dokter()
	{
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
	    show_404(); // Redirect ke halaman 404 Not found

		$data_dokter = $this->UserModel->Getdokter_nid();
		$data_spesialis = $this->UserModel->Getspesialis_nid();
		$this->render_backend('admin/dokter',['data'=>$data_dokter,'dataJ'=>$data_spesialis]);
	}
	public function indexdokter()
	{
	
		$data_dokter = $this->UserModel->Getdokter_nid();
		$data_spesialis = $this->UserModel->Getspesialis_nid();
		$this->render_backend('dokter',['data'=>$data_dokter,'dataJ'=>$data_spesialis]);
	}

}


