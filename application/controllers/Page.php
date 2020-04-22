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


}


