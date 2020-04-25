<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('UserModel');
	}
	public function home(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('home'); // load view home.php
	}
	public function profil() {

        $data_user = $this -> UserModel -> Getuser();
        $this -> render_backend('profil', ['data' => $data_user]);
    }
    public function editprofil() {

        $id_user = $this -> input -> post('id');
        $nama = $this -> input -> post('nama');
        $alamat = $this -> input -> post('alamat');
        $nohp = $this -> input -> post('nohp');
        $password = $this -> input -> post('password');
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'nohp' => $nohp,
            'password' => $password
        );
        $this -> Model -> edit_profil($id_user, $data);
         $this -> session -> set_flashdata('message', 'Profil sudah terupdate silahkan login ulang!');
        redirect('Page/profil');

    }
	public function payment(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->session->set_flashdata('message', 'Pembayaran Sukses Tunggu Validasi');
		redirect('page/indexobat'); // load view home.php
	}
	public function kontak(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('kontak'); // load view kontak.php
	}
	public function aboutus(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('aboutus'); // load view kontak.php
	}
	public function dokter()
	{
		if($this->session->userdata('role') != 'Admin') // Jika user yg login bukan admin
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
	public function obat()
	{
		if($this->session->userdata('role') != 'Admin') // Jika user yg login bukan admin
	    show_404(); // Redirect ke halaman 404 Not found

		$dataproduk = $this->UserModel->get_produk_all();
		$datakategori = $this->UserModel->get_kategori_all();
			
		$this->render_backend('admin/obat',['data'=>$dataproduk,'dataJ'=>$datakategori]);
	}
	public function reservasi($nid)
	{
		if($this->session->userdata('role') != 'Dokter') // Jika user yg login bukan admin
	    show_404(); // Redirect ke halaman 404 Not found

		$data_reservasi = $this->UserModel->Getreservasi($nid);
		$this->render_backend('reservasi',['data'=>$data_reservasi]);
	}
	public function hapusreservasi($nid, $noreservasi) {
        $this -> UserModel -> hapus_reservasi($noreservasi);
        $data_reservasi = $this -> UserModel -> Getreservasi($nid);
        $this -> session -> set_flashdata('message', 'Reservasi telah dihapus');
        $this -> render_backend('reservasi', ['data' => $data_reservasi]);
    }
	public function indexobat()
	{
		$dataproduk = $this->UserModel->get_produk_all();
		$datakategori = $this->UserModel->get_kategori_all();
			
		$this->render_backend('obat',['data'=>$dataproduk,'dataJ'=>$datakategori]);
	}
	public function tampil_cart()
	{
		$data_kategori = $this->UserModel->get_kategori_all();
		$this->render_backend('tampil_cart',['data'=>$data_kategori]);
	}
	function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('page/tampil_cart');
	}
    public function hapusdokter($id)
	{
		$this->UserModel->hapus_dokter($id);
		redirect('Page/dokter');
	}
	public function reservasii($nid,$noreservasi)
	{
		$this->UserModel->hapus_reservasi($noreservasi);
		$data_reservasi = $this->UserModel->Getreservasi($nid);
		$this->render_backend('reservasi',['data'=>$data_reservasi]);
	}

	public function hapusobat($nio)
	{
		$this->UserModel->hapus_obat($nio);
		redirect('Page/obat');
	}

	public function tambahdokter()
	{
		$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/Foto/',
				"allowed_types" => "gif|jpg|jpeg|png|bmp",
				"remove_spaces" => TRUE
				
				
			));
		$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$data['error_message'] = $this->upload->display_errors();
				echo 'anda gagal upload';
			} else {
				$data = $this->upload->data();
				$gambar = $data['file_name'];
			$input_data = [
			'nid' => $this->input->post('nid', true),
			'nama' => $this->input->post('nama', true),
			'alamat' => $this->input->post('alamat', true),
			'id_spesialis' => $this->input->post('id_spesialis', true),
			'foto' => $gambar
		];
		$this->UserModel->tambah_dokter($input_data);
		redirect('Page/dokter');

	}
}
	public function tambahobat()
	{
		$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/images/',
				"allowed_types" => "gif|jpg|jpeg|png|bmp",
				"remove_spaces" => TRUE
				
				
			));
		$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$data['error_message'] = $this->upload->display_errors();
				echo 'anda gagal upload';
			} else {
				$data = $this->upload->data();
				$gambar = $data['file_name'];
		$input_data = [
			'nama_produk' => $this->input->post('namaobat', true),
			'harga' => $this->input->post('harga', true),
			'deskripsi' => $this->input->post('deskripsi', true),
			'kategori' => $this->input->post('id_jenis', true),
			'gambar' => $gambar
		];
		$this->UserModel->tambah_obat($input_data);
		redirect('Page/obat');

	}
}
	public function tambahreservasi()
	{
	
		$input_data = [
			'nid' => $this->input->post('nid', true),
			'nama' => $this->input->post('nama', true),
			'subjek' => $this->input->post('subjek', true),
			'pesan' => $this->input->post('pesan', true),
			'pengirim' => $this->input->post('pengirim', true),
			'tanggal' => $this->input->post('tanggal', true),
			'jam' => $this->input->post('jam', true)
		];
		$this->UserModel->tambah_reservasi($input_data);
		$this->session->set_flashdata('message', 'pesan anda telah terkirim silahkan menunggu');
		redirect('Page/indexdokter');

	}

	public function editdokter()
	{
		$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/Foto/',
				"allowed_types" => "gif|jpg|jpeg|png|bmp",
				"remove_spaces" => TRUE
				
				
			));
		$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$data['error_message'] = $this->upload->display_errors();
				echo 'anda gagal upload';
			} else {
				$data = $this->upload->data();
				$gambar = $data['file_name'];

				$nid = $this->input->post('nid');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$id_spesialis = $this->input->post('id_spesialis');
				$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'id_spesialis' => $id_spesialis,
			'foto' =>$gambar
		);
		$this->UserModel->edit_dokter($nid,$data);

		redirect('page/dokter');	
	}
}
	public function editobat()
	{

		$id_obat = $this->input->post('id_obat');
		$namaobat = $this->input->post('namaobat');
		$harga    = $this->input->post('harga');
		$deskripsi    = $this->input->post('deskripsi');
		$id_jenis = $this->input->post('id_jenis');
		$data = array(
			'nama_produk' => $namaobat,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			'kategori' => $id_jenis,
		);
		$this->UserModel->edit_obat($id_obat,$data);

		redirect('Page/obat');	


	}
	public function tambah()
	{
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							  'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
		redirect('page/indexobat');

}
	public	function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'price' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('page/tampil_cart');
	}
	public function check_out()
	{
		$data_kategori = $this->UserModel->get_kategori_all();
		$this->render_backend('check_out',['data'=>$data_kategori]);
	}
	public function proses_order()
	{
		//-------------------------Input data pelanggan--------------------------
		$data_pelanggan = array('nama' => $this->input->post('nama'),
							'email' => $this->input->post('email'),
							'alamat' => $this->input->post('alamat'),
							'telp' => $this->input->post('telp'));
		$id_pelanggan = $this->UserModel->tambah_pelanggan($data_pelanggan);
		//-------------------------Input data order------------------------------
		$data_order = array('tanggal' => date('Y-m-d'),
					   		'pelanggan' => $id_pelanggan);
		$id_order = $this->UserModel->tambah_order($data_order);
		//-------------------------Input data detail order-----------------------		
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
						$data_detail = array('order_id' =>$id_order,
										'produk' => $item['id'],
										'qty' => $item['qty'],
										'harga' => $item['price']);			
						$proses = $this->UserModel->tambah_detail_order($data_detail);
					}
			}
		//-------------------------Hapus shopping cart--------------------------		
		$this->cart->destroy();
		$data_kategori = $this->UserModel->get_kategori_all();
		$this->render_backend('sukses',['data'=>$data_kategori]);
	}
    
    public function kirimpesan($nid) {

        $input_data = [
            'idpengirim' => $this -> input -> post('idpengirim', true),
            'untuk' => $this -> input -> post('nama', true),
            'subjek' => $this -> input -> post('subjek', true),
            'pesan' => $this -> input -> post('pesan', true),
            'nama' => $this -> input -> post('pengirim', true),
            'tanggal' => $this -> input -> post('tanggal', true),
            'jam' => $this -> input -> post('jam', true)
        ];
        $this -> UserModel -> kirimpesan($input_data);
        $this -> session -> set_flashdata('message', 'Pesan telah terkirim');
        redirect('Page/reservasi/'.$nid);

    }
    public function pesan($nid) {

      
        $this -> render_backend('pesan');
    }
    public function datapesan($nid){
        $data2=$this-> UserModel ->Getpesan($nid);
        echo json_encode($data2);
    }
    public function hapuspesan(){
        $kobar=$this->input->post('kode');
        $data=$this-> UserModel ->hapus_pesan($kobar);
        echo json_encode($data);
    }
}

