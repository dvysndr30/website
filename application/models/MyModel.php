<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class MyModel extends CI_Model {
    //home
    public function getKulinerNow() {
        $sql = "SELECT * FROM kuliner ORDER by gambar DESC limit 4";
        return $this->db->query($sql)->result_array();
    }
    //Kategori                   
    public function getKategori() {
        return $this->db->get('kategori')->result();
    }
    public function getKategorii() {
        return $this->db->get('kategori')->result_array();
    }
    public function getKategoriByID($id) {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
    }
    public function addKategori($data) {
        $this->db->insert('kategori', $data);
    }
   /* public function getDetailKuliner($id){
        return $this->db->get_where('kuliner', ['id_kuliner' => $id])->row_array();
    }*/

    public function tampil_resto_terkini()
    {
        $this->db->order_by("id_kuliner",'desc');

        return $this->db->get('kuliner')->row_array();
    }

    public function delKategori($id) {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }
    public function editKategori($id, $data) {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }
    
   /* //Jalan                 
    public function getJalan() {
        return $this->db->get('jalan')->result_array();
    }
    public function getJalanByID($id) {
        return $this->db->get_where('jalan', ['id_jalan' => $id])->row_array();
    }
    public function addJalan($data) {
        $this->db->insert('jalan', $data);
    }
    public function delJalan($id) {
        $this->db->where('id_jalan', $id);
        $this->db->delete('jalan');
    }
    public function editJalan($id, $data) {
        $this->db->where('id_jalan', $id);
        $this->db->update('jalan', $data);
    }

    public function updateJalan($id, $data) {
        $this->db->where('id_jalan', $id);
        $this->db->update('jalan', $data);
    }*/
    //Kuliner
    public function getKuliner() {
        return $this->db->get('kuliner')->result_array();
    }

    //tampil Kuliner acc
    // select * from kuliner where 'keterangan' = 'sudah_ambil'
    public function getKulineracc() {
        // $this->db->where("keterangan",'sudah_ambil');
        $tampilacc= $this->db->get_where('kuliner', array('keterangan' => 'sudah_ambil'))->result_array();
        return $tampilacc;
    
    }

    public function getKulinerora() {
        // $this->db->where("keterangan",'sudah_ambil');
        $tampilora = $this->db->get_where('kuliner', array('keterangan' => 'belum_ambil'))->result_array();
        return $tampilora;
    }

    public function getDetail($id_kuliner) {
        return $this->db->get_where('kuliner', ['id_kuliner'=> $id_kuliner])->row();
    }
    public function getKulinerByID($id) {
        return $this->db->get_where('kuliner', ['id_kuliner' => $id])->row_array();
    }
    
    public function getKulinerByKategori($id) {
        return $this->db->get_where('kuliner', ['id_kategori' => $id])->result_array();
    }
    public function addKuliner($data) {
        $this->db->insert('kuliner', $data);
    }

    public function editKuliner($id, $data) {
         
        $this->db->where('id_kuliner', $id);
        $this->db->update('kuliner', $data);
    }

    public function updateKuliner($data,$id_kul) {
       
        $this->db->where('id_kuliner', $id_kul);
        $this->db->update('kuliner',$data);
    }

    public function detail_kuliner($id)
    {
        $this->db->where("id_kuliner");
        $ambil = $this->db->get("kuliner");
        $datakul = $ambil->row_array();
        return $datakul;
    }

    public function delKuliner($id) {
        $this->db->where('id_kuliner', $id);
        $this->db->delete('kuliner');
    }   

    public function ambil($id) {
        $this->db->set('keterangan', 'sudah_ambil');
        $this->db->where('id_kuliner', $id);
        $this->db->update('kuliner');
    }
     //Rekomendasi
    public function getRekomendasi() {
        return $this->db->get('kuliner')->result_array();
    }
    public function addRekomendasi($data) {
        $this->db->insert('kuliner', $data);
    }
    public function delRekomendasi($id) {
        $this->db->where('id_kuliner', $id);
        $this->db->delete('kuliner');
    }
    
    //Ulasan
    public function getUlasan() {
        return $this->db->get('ulasan')->result_array();
    }
     public function addUlasan() {
        return $this->db->insert('ulasan')->result_array();
    }
    public function getUlasanByID($id) {
        return $this->db->get_where('ulasan', ['id_ulasan' => $id])->row_array();
    }
    public function getUlasanByKuliner($id) {
        $sql = "
            SELECT * FROM ulasan
            LEFT JOIN kuliner on ulasan.id_kuliner = kuliner.id_kuliner
            WHERE kuliner.id_kuliner = '$id'
        ";
        return $this->db->query($sql)->result_array();
    }
    public function getTanggalUlasan() {
        $sql = "SELECT DISTINCT tgl FROM ulasan";
        return $this->db->query($sql)->result_array();
    }
    public function getTanggalUlasanByKuliner($id) {
        $sql = "
            SELECT DISTINCT tgl FROM ulasan
            LEFT JOIN kuliner ON ulasan.id_kuliner = kaliner.id_kuliner
            WHERE kuliner.id_kuliner = '$id'
            ";
        return $this->db->query($sql)->result_array();
    }
    
    public function delUlasan($id) {
        $this->db->where('id_ulasan', $id);
        $this->db->delete('ulasan');
    }   
    public function editUlasan($id, $data) {
        $this->db->where('id_ulasan', $id);
        $this->db->update('ulasan', $data);
    } 
    //Print
    public function getPrint() {
        $sql = "
            SELECT * FROM ulasan
            LEFT JOIN kuliner on ulasan.id_kuliner = kuliner.id_kuliner
        ";
        return $this->db->query($sql)->result_array();
    }
    public function getPrintByKategori($id) {
        $sql = "
            SELECT * FROM ulasan
            LEFT JOIN kuliner on ulasan.id_kuliner = kuliner.id_kuliner
            WHERE kuliner.id_kategori = '$id'
        ";
        return $this->db->query($sql)->result_array();
    }
    public function getPrintByKeyByKategori($id, $tgl) {
        $sql = "
            SELECT * FROM ulasan
            LEFT JOIN kuliner ulasan.id_kuliner = kuliner.id_kuliner
            WHERE tgl = '$tgl' AND kuliner.id_kategori = '$id'
        ";
        return $this->db->query($sql)->result_array();
    }
    public function getPrintByKey($tgl) {
        $sql = "
            SELECT * FROM ulasan
            LEFT JOIN kuliner on ulasan.id_kuliner = kuliner.id_kuliner
            WHERE tgl = '$tgl'
        ";
        return $this->db->query($sql)->result_array();
    }
    //User
    public function getUser() {
        return $this->db->get('user')->result_array();
    }
    public function getUserByID($id) {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }
    public function getUserByKuliner($id) {
        $this->db->where('role_id', 2);
        $this->db->where('id_kuliner', $id);
        return $this->db->get('user')->result_array();
    }
    public function addUser($data) {
        $this->db->insert('user', $data);
    }
    public function delUser($id) {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }   
    public function editUser($id, $data) {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
    public function getRoleID() {
        return $this->db->get('role_id')->result_array();
    }
    //Owner-profile
    public function getOwner() {
        return $this->db->get('owner')->result_array();
    }
    public function getOwnerByID($id) {
        return $this->db->get_where('owner', ['id_owner' => $id])->row_array();
    }
    public function addOwner($data) {
        $this->db->insert('owner', $data);
    }
    public function delOwner($id) {
        $this->db->where('id_owner', $id);
        $this->db->delete('owner');
    }
    public function editOwner($id, $data) {
        $this->db->where('id_owner', $id);
        $this->db->update('owner', $data);
    }

    public function getDtListKategori($id_kategori)
    {
        $this->db->select('kategori.*,kuliner.id_kuliner,kuliner.nama_kuliner,kuliner.alamat,kuliner.embed');
        $this->db->from('kategori');
        $this->db->where('id_kategori',$id_kategori);
        $this->db->where('keterangan','sudah_ambil');
        $this->db->join('kuliner','kuliner.nama_kategori=kategori.id_kategori','left');
        $q = $this->db->get();
        return $q;
    }

    //hitung user
    public function hitungJumlahAsset()
    {
        $this->db->like('id_kategori', 'value');
        $this->db->from('kategori');
        $a = $this->db->count_all_results();
        return $a;
    }
    
    //hitung kuliner
    public function hitungJumlah()
    {
        $this->db->like('id_kuliner', 'value');
        $this->db->from('kuliner');
        $b = $this->db->count_all_results();
        return $b;
    }

    public function getRate($id_kuliner) {
        $this->db->select('AVG(rating) as rating');
        $this->db->from('ulasan');
        $this->db->where('id_kuliner', $id_kuliner);
        return $this->db->get()->row_array();
    }

    public function getComment($id_kuliner) {
        $sql = "SELECT *, Day(waktu) as hari, monthname(waktu) as bulan, year(waktu) as tahun, hour(waktu) as jam, minute(waktu) as menit FROM ulasan where id_kuliner = '$id_kuliner' order by waktu DESC";
        return $this->db->query($sql)->result_array();
    }
    public function jmlComment($id_kuliner) {
        $sql = "SELECT * FROM ulasan where id_kuliner = '$id_kuliner'";
        return $this->db->query($sql)->num_rows();
    }

   
}
    
                        
/* End of file MyModel.php */
    
                        