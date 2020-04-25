<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
    public function get_produk_all()
	{
		$query = $this->db->get('tbl_obat');
		return $query->result_array();
	}
	public function get_kategori_all()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}
    public function Getdokter_nid(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('spesialis','spesialis.id_spesialis=user.id_spesialis');
		$this->db->where('role','Dokter');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getspesialis_nid(){
		$this->db->select('*');
		$this->db->from('spesialis');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getreservasi($nid){
		$this->db->select('*');
		$this->db->from('reservasi');
		$this->db->where('nid',$nid);
		$query = $this->db->get();
		return $query->result();
	}
	public function Getobat_nib(){
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->join('jenisobat','jenisobat.id_jenis=obat.id_jenis');
		$query = $this->db->get();
		return $query->result_array();	
	}
	public function Getjenis_nib(){
		$this->db->select('*');
		$this->db->from('jenisobat');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function hapus_dokter($id)
	{
		return $this->db->delete('user', ['id' => $id]);
	}
	public function hapus_reservasi($noreservasi)
	{
		return $this->db->delete('reservasi', ['noreservasi' => $noreservasi]);
	}
	public function edit_dokter($nid,$data)
	{
		$this->db->where('id', $nid);
		$this->db->update('user', $data);
	    return;
	}
	public function tambah_dokter($data)
	{
		return $this->db->insert('dokter', $data);
	}
	public function hapus_obat($nio)
	{
		return $this->db->delete('tbl_obat', ['id_produk' => $nio]);
	}
	public function edit_obat($nio,$data)
	{
		$this->db->where('id_produk', $nio);	
		$this->db->update('tbl_obat', $data);
	    return;
	}
	public function tambah_obat($data)
	{
		return $this->db->insert('tbl_obat', $data);
	}
	public function tambah_reservasi($data)
	{
		return $this->db->insert('reservasi', $data);
	}
	public function check_username($username){
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function insert_new_profle($data){
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function tambah_pelanggan($data)
	{
		$this->db->insert('tbl_pelanggan', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_order($data)
	{
		$this->db->insert('tbl_order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_detail_order($data)
	{
		$this->db->insert('tbl_detail_order', $data);
	}
	public function edit_profil($nio,$data)
	{
		$this->db->where('id', $nio);	
		$this->db->update('user', $data);
	    return;
	}
	public function Getuser(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}
	public function kirimpesan($data){
		return $this->db->insert('pesan', $data);
	}
	public function Getpesan($nid){
		$hasil=$this->db->query("SELECT * FROM pesan where idpengirim='$nid'");
		return $hasil->result();
	}
	function hapus_pesan($kobar){
		$hasil=$this->db->query("DELETE FROM pesan WHERE nopesan='$kobar'");
		return $hasil;
	}
}

