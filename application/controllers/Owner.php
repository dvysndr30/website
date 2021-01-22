<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Owner extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if( (!$this->session->userdata('id_owner'))) {
            redirect(base_url('owner/login'));
        }
        $this->load->model('MyModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['a'] = $this->db->from("kategori")->get()->num_rows();
        $data['b'] = $this->db->from("kuliner")->get()->num_rows();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view("owner/home", $data);
        $this->load->view('layout/footer');
    }
    //Kategori
    public function kategori() {
        $data['kategori'] = $this->MyModel->getKategorii();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/kategori', $data);   
        $this->load->view('layout/footer');
    }

    public function kategori_add() {
        
        $this->form_validation->set_rules('nama_kategori', 'Nama_Kategori', 'required|trim');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/kategori_add');   
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
            ];
            $this->MyModel->addKategori($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
            redirect('owner/kategori');
        }
    }

    public function kategori_del($id) {
        $this->MyModel->delKategori($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
        redirect('owner/kategori');
    }

    public function kategori_edit($id) {
        $data['kategori'] = $this->MyModel->getKategoriByID($id);
        $this->form_validation->set_rules('nama_kategori', 'Nama_Kategori', 'required|trim');
        
        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/kategori_edit', $data);   
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
            ];
            $this->MyModel->editKategori($id,$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
            redirect('owner/kategori');
        }
    }
    //Jalan
    public function jalan() {
        $data['jalan'] = $this->MyModel->getJalan();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/jalan', $data);   
        $this->load->view('layout/footer');
    }

    public function jalan_add() {
        
        $this->form_validation->set_rules('nama_jalan', 'Nama_Jalan', 'required|trim');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/jalan_add');   
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama_jalan' => $this->input->post('nama_jalan'),
            ];
            $this->MyModel->addJalan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
            redirect('owner/jalan');
        }
    }

    public function jalan_del($id) {
        $this->MyModel->delJalan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
        redirect('owner/jalan');
    }

    public function jalan_edit($id) {
        $data['jalan'] = $this->MyModel->getJalanByID($id);
        $this->form_validation->set_rules('id_jalan', 'id_Jalan', 'required|trim');
        
        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/jalan_edit', $data);   
            $this->load->view('layout/footer');
        } else {
            $data = [
                'id_jalan' => $this->input->post('id_jalan'),
            ];
            $this->MyModel->editJalan($id,$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
            redirect('owner/jalan');
        }
    }
    //Kuliner
    public function kuliner() {
        $data['kuliner'] = $this->MyModel->getKulineracc();
        $data['kategori'] = $this->MyModel->getKategori();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/kuliner', $data);   
        $this->load->view('layout/footer');
    }

    public function kuliner_add() {
        
        $data['status'] = ['pemilik','bukanpemilik'];
        $data['restoran'] = ['buka','akansegerabuka'];
        $data['keterangan'] = ['sudah_ambil','belum_ambil'];
        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('nama_kuliner', 'Nama Kuliner', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('embed', 'Embed', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Kepemilikan', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor Resto', 'required|trim');
        $this->form_validation->set_rules('restoran', 'Status Resto', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');    
    

        if($this->form_validation->run() == false) {
            $data['kategori'] = $this->MyModel->getKategori();
            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/kuliner_add',$data);   
            $this->load->view('layout/footer');
        } else {
            $config = [
                'file_name' => date('d-m-Y').'-restoran',
                'upload_path' => './assets/images/uploaded/kuliner/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'max_size' => 2048,
            ];

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')) {
                $file = $this->upload->data();
                $cg = [
                        'file_name' => date('d-m-Y').'-restoran',
                        'upload_path' => './assets/images/uploaded/kuliner',
                        'allowed_types' => 'gif|jpg|png|jpeg',
                        'max_size' => 2048,
                    ];
                    
                    $this->load->library('upload', $cg);
                    $this->upload->do_upload('menu_restoran');
                    $fl = $this->upload->data();
                $data = [
                    'nama_kategori' => $this->input->post('nama_kategori'),
                    'nama_kuliner' => $this->input->post('nama_kuliner'),
                    'alamat' => $this->input->post('alamat'),
                    'embed' => $this->input->post('embed'),
                    'status' => $this->input->post('status'),
                    'nomor' => $this->input->post('nomor'),
                    'restoran' => $this->input->post('restoran'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $file['file_name'],
                    'keterangan' => $this->input->post('keterangan'),
                    'menu_restoran' => $fl['file_name']
                  
                ];
                $this->MyModel->addKuliner($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Berhasil
                </div>');
                redirect('owner/kuliner');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Gagal Upload Gambar!
                </div>');
                redirect('owner/kuliner/add');
            }
        }

    }

    public function kuliner_update() {
        $id_kul = $this->input->post('id_kuliner');
        $nama_kategori = $this->input->post('nama_kategori');
        $nama_kuliner = $this->input->post('nama_kuliner');
        $alamat = $this->input->post('alamat');
        $embed = $this->input->post('embed');
        $status = $this->input->post('status');
        $nomor = $this->input->post('nomor');
        $restoran = $this->input->post('restoran');
        $deskripsi = $this->input->post('deskripsi');
        $keterangan = $this->input->post('keterangan');
        
             $data = array(
                        'nama_kategori' => $nama_kategori,
                        'nama_kuliner' => $nama_kuliner,
                        'alamat' => $alamat,
                        'embed' => $embed,
                        'status' => $status,
                        'nomor' => $nomor,
                        'restoran' => $restoran,
                        'deskripsi' => $deskripsi,
                        'keterangan' => $keterangan,
                    );

                $this->MyModel->updateKuliner($data,$id_kul);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil
                        </div>');
                redirect('owner/kuliner');
    }

    public function kuliner_del($id) {
        $this->_delImageKuliner($id);
        $this->__delImageKulinerMenu($id);
        $this->MyModel->delKuliner($id);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
        redirect('owner/kuliner');
    }

    public function kuliner_edit($id) {

        $data['kategori'] = $this->MyModel->getKategori();
        $data['status'] = ['pemilik','bukanpemilik'];
        $data['restoran'] = ['buka','akansegerabuka'];
        $data['keterangan'] = ['sudah_ambil','belum_ambil'];
        $data['kuliner'] = $this->MyModel->getKulinerByID($id); 
        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('nama_kuliner', 'Nama Kuliner', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('embed', 'Embed', 'required|trim');
        $this->form_validation->set_rules('nomor', 'Nomor Resto', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');        

        if($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/kuliner_edit', $data);   
            $this->load->view('layout/footer');
        } else {
            if(empty($_FILES['gambar']['name']) && empty($_FILES['menu_restoran']['name'])) {
                $data = [
                    'nama_kategori' => $this->input->post('nama_kategori'),
                    'nama_kuliner' => $this->input->post('nama_kuliner'),
                    'alamat' => $this->input->post('alamat'),
                    'embed' => $this->input->post('embed'),
                    'status' => $this->input->post('status'),
                    'restoran' => $this->input->post('restoran'),
                    'nomor' => $this->input->post('nomor'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'keterangan'=> $this->input->post('keterangan'),
                ];
                $this->MyModel->editKuliner($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Berhasil
                </div>');
                redirect('owner/kuliner');
            } else {
                if(empty($_FILES['gambar']['name'])) {
                    $config = [
                        'file_name' => date('d-m-Y').'-restoran',
                        'upload_path' => './assets/images/uploaded/kuliner',
                        'allowed_types' => 'gif|jpg|png|jpeg',
                        'max_size' => 2048,
                    ];
                    $this->load->library('upload', $config);
    
                    if($this->upload->do_upload('menu_restoran')) {
                        $file = $this->upload->data();
                        $data = [
                            'nama_kategori' => $this->input->post('nama_kategori'),
                            'nama_kuliner' => $this->input->post('nama_kuliner'),
                            'alamat' => $this->input->post('alamat'),
                            'embed' => $this->input->post('embed'),
                            'status' => $this->input->post('status'),
                            'restoran' => $this->input->post('restoran'),
                            'nomor' => $this->input->post('nomor'),
                            'deskripsi' => $this->input->post('deskripsi'),
                            'keterangan' => $this->input->post('keterangan'),
                            'menu_restoran' => $file['file_name'],
                        ];
                        $this->MyModel->updateKuliner($data, $id);
                        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil
                        </div>');
                        redirect('owner/kuliner');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Upload Gambar!
                        </div>');
                        redirect('owner/kuliner/edit/'.$id);
                        }    
                } else if(empty($_FILES['menu_restoran']['name'])) {
                    $config = [
                        'file_name' => date('d-m-Y').'-restoran',
                        'upload_path' => './assets/images/uploaded/kuliner',
                        'allowed_types' => 'gif|jpg|png|jpeg',
                        'max_size' => 2048,
                    ];
                    $this->load->library('upload', $config);
    
                    if($this->upload->do_upload('gambar')) {
                        $file = $this->upload->data();
                        $data = [
                            'nama_kategori' => $this->input->post('nama_kategori'),
                            'nama_kuliner' => $this->input->post('nama_kuliner'),
                            'alamat' => $this->input->post('alamat'),
                            'embed' => $this->input->post('embed'),
                            'status' => $this->input->post('status'),
                            'restoran' => $this->input->post('restoran'),
                            'nomor' => $this->input->post('nomor'),
                            'deskripsi' => $this->input->post('deskripsi'),
                            'gambar' => $file['file_name'],
                            'keterangan' => $this->input->post('keterangan'),
                        ];
                        $this->MyModel->updateKuliner($data, $id);
                        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil
                        </div>');
                        redirect('owner/kuliner');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Upload Gambar!
                        </div>');
                        redirect('owner/kuliner/edit/'.$id);
                        }
                } else {
                    $config = [
                        'file_name' => date('d-m-Y').'-restoran',
                        'upload_path' => './assets/images/uploaded/kuliner/',
                        'allowed_types' => 'gif|jpg|png|jpeg',
                        'max_size' => 2048,
                    ];
        
                    $this->load->library('upload', $config);
        
                    if($this->upload->do_upload('gambar')) {
                        $file = $this->upload->data();
                        $cg = [
                                'file_name' => date('d-m-Y').'-restoran',
                                'upload_path' => './assets/images/uploaded/kuliner',
                                'allowed_types' => 'gif|jpg|png|jpeg',
                                'max_size' => 2048,
                            ];
                            
                            $this->load->library('upload', $cg);
                            $this->upload->do_upload('menu_restoran');
                            $fl = $this->upload->data();
                        $data = [
                            'nama_kategori' => $this->input->post('nama_kategori'),
                            'nama_kuliner' => $this->input->post('nama_kuliner'),
                            'alamat' => $this->input->post('alamat'),
                            'embed' => $this->input->post('embed'),
                            'status' => $this->input->post('status'),
                            'restoran' => $this->input->post('restoran'),
                            'nomor' => $this->input->post('nomor'),
                            'deskripsi' => $this->input->post('deskripsi'),
                            'gambar' => $file['file_name'],
                            'keterangan' => $this->input->post('keterangan'),
                            'menu_restoran' => $fl['file_name']
                          
                        ];
                        $this->MyModel->updateKuliner($data, $id);
                        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil
                        </div>');
                        redirect('owner/kuliner');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Upload Gambar!
                        </div>');
                        redirect('owner/kuliner/add');
                    }
                }
                
            }
        }
    }

    public function rekomendasi() {
        $data['kuliner'] = $this->MyModel->getKulinerora();
        $data['kategori'] = $this->MyModel->getKategori();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/rekomendasi', $data);   
        $this->load->view('layout/footer');
    }

    public function rekomendasi_del($id) {
        $this->MyModel->delRekomendasi($id);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
        redirect('owner/rekomendasi');
    }

    public function ulasan() {
        $data['ulasan'] = $this->MyModel->getUlasan();
        $data['kuliner'] = $this->MyModel->getKuliner();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/ulasan', $data);   
        $this->load->view('layout/footer');
    }

    public function ulasan_del($id) {
        $this->MyModel->delUlasan($id);  
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
        redirect('owner/ulasan');
    }

    public function ulasan_edit($id) {
        $data['ulasan'] = $this->MyModel->getUlasanByID($id);
        $data['kuliner'] = $this->MyModel->getKuliner();
        
        $this->form_validation->set_rules('id_kuliner', 'ID Kuliner', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'required');
        $this->form_validation->set_rules('ulasan', 'Ulasan', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/ulasan_edit', $data);   
            $this->load->view('layout/footer');
        }     
       } 
    
    public function ulasan_print() {
        $data['ulasan'] = $this->MyModel->getPrint();
        if($this->input->post('tgl')) {
            $data['ulasan'] = $this->MyModel->getPrintByKategori($this->input->post('tgl'));
        }
        $this->load->view('owner/ulasan_print', $data);
    }
    

    public function user() {
        $data['user'] = $this->MyModel->getUser();
        $data['kategori'] = $this->MyModel->getKategori();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/user', $data);   
        $this->load->view('layout/footer');
    }

    public function user_add() {
        $data['gender'] = ['l','p'];
        $data['kategori'] = $this->MyModel->getKategori();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');
        
        if($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/user_add', $data);   
            $this->load->view('layout/footer');
        } else {
            $config = [
                'file_name' => date('d-m-Y').'-user',
                'upload_path' => './assets/images/uploaded/user/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'max_size' => 2048,
            ];

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')) {
                $file = $this->upload->data();
                $data = [
                    'nama' => $this->input->post('nama'),
                    'gender' => $this->input->post('gender'),
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'gambar' => $file['file_name'],
                ];
                $this->MyModel->addUser($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Berhasil
                </div>');
                redirect('owner/user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Gagal Upload Gambar!
                </div>');
                redirect('owner/user/add');
            }   
        }

    }

    public function user_del($id) {
        $this->_delImageUser($id);
        $this->MyModel->delUser($id);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
        </div>');
        redirect('owner/user');
    }

    public function user_edit($id) {
        $data['user'] = $this->MyModel->getUserByID($id);
        $data['gender'] = ['l','p'];
        $data['kategori'] = $this->MyModel->getKategori();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/user_edit', $data);   
            $this->load->view('layout/footer');
        } else {
            if(empty($_FILES['gambar']['name'])) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'gender' => $this->input->post('gender'),
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'username' => $this->input->post('username'),
                ];
                $this->MyModel->editUser($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Berhasil
                </div>');
                redirect('owner/user');
            } else {
                $this->_delImageUser($id);
                $config = [
                    'file_name' => date('d-m-Y').'-user',
                    'upload_path' => './assets/images/uploaded/user/',
                    'allowed_types' => 'gif|jpg|png|jpeg',
                    'max_size' => 2048,
                ];
    
                $this->load->library('upload', $config);
    
                if($this->upload->do_upload('gambar')) {
                    $file = $this->upload->data();
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'gender' => $this->input->post('gender'),
                        'email' => $this->input->post('email'),
                        'alamat' => $this->input->post('alamat'),
                        'username' => $this->input->post('username'),
                        'gambar' => $file['file_name'],
                    ];
                    $this->MyModel->editUser($id, $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Berhasil
                    </div>');
                    redirect('owner/user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Gagal Upload Gambar!
                    </div>');
                    redirect('owner/user/edit/'.$id);
                }   
            }
        }

    }

    public function user_changepassword($id) {
        $data['username'] = $this->MyModel->getUser();
        $data['user'] = $this->MyModel->getUserByID($id);

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/user_changepassword');   
            $this->load->view('layout/footer');
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password1');
            if(!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password Lama Salah!
                    </div>');
                redirect('owner/user/changepassword/'.$id);
            } else {
                if($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password baru tidak boleh sama dengan Password Lama!
                    </div>');
                   
                redirect('owner/user/changepassword/'.$id);
                } else {
                    $pass = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $pass);
                    $this->db->where('id_user', $id);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Berhasil
                    </div>');
                    redirect('owner/user');
                }
            }
        }

    }
  
    public function profile() {
        $data['owner'] = $this->MyModel->getOwner();
        $this->load->view('layout/header');
        $this->load->view('layout/owner_navigation');
        $this->load->view('owner/profile', $data);   
        $this->load->view('layout/footer');
    }

    public function profile_add() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {
            
            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/profile_add');   
            $this->load->view('layout/footer');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
            $this->MyModel->addOwner($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
            </div>');
            redirect('owner/profile');
        }

    }

    public function profile_del($id) {
        $this->MyModel->delOwner($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Berhasil
        </div>');
        redirect('owner/profile');
    }

    public function profile_edit($id) {
        $data['owner'] = $this->MyModel->getOwnerByID($id);
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if($this->form_validation->run() == false) {
            
            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/profile_edit', $data);   
            $this->load->view('layout/footer');
        } else {
            $data = [
                'username' => $this->input->post('username')
            ];
            $this->MyModel->editOwner($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
            </div>');
            redirect('owner/profile');
        }
    }

    public function profile_changepassword($id) {
        $data['username'] = $this->MyModel->getOwner();
        $data['user'] = $this->MyModel->getOwnerByID($id);

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation');
            $this->load->view('owner/user_changepassword');   
            $this->load->view('layout/footer');
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password1');
            if(!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password Lama Salah!
                    </div>');
                redirect('owner/profile/changepassword/'.$id);
            } else {
                if($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password baru tidak boleh sama dengan Password Lama!
                    </div>');
                   
                redirect('owner/profile/changepassword/'.$id);
                } else {
                    $pass = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $pass);
                    $this->db->where('id_owner', $id);
                    $this->db->update('owner');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Berhasil
                    </div>');
                    redirect('owner/profile');
                }
            }
        }
    }

    public function ambil($id) {
        $data = $this->db->get_where('kuliner', ['id_kuliner' => $id])->row_array();
        $this->db->set('keterangan', 'sudah_ambil');
        $this->db->where('id_kuliner', $id);
        $this->db->update('kuliner');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Berhasil
            </div>');
        redirect('owner/rekomendasi/'.$data['id_kuliner']);
    }


    //Delete Image Kuliner
    private function _delImageKuliner($id) {
        $img = $this->MyModel->getKulinerByID($id);
        $filename = explode('.', $img['gambar'])[0];
        return array_map('unlink', glob(FCPATH."./assets/images/uploaded/kuliner/$filename.*"));
    }
    private function _delImageKulinerMenu($id) {
        $img = $this->MyModel->getKulinerByID($id);
        $filename = explode('.', $img['menu_restoran'])[0];
        return array_map('unlink', glob(FCPATH."./assets/images/uploaded/kuliner/$filename.*"));
    }
    //Delete Image User
    private function _delImageUser($id) {
        $img = $this->MyModel->getUserByID($id);
        $filename = explode('.', $img['gambar'])[0];
        return array_map('unlink', glob(FCPATH."./assets/images/uploaded/user/$filename.*"));
    } 
    //Delete Image Owner
    private function _delImageOwner($id) {
        $img = $this->MyModel->getOwnerByID($id);
        $filename = explode('.', $img['gambar'])[0];
        return array_map('unlink', glob(FCPATH."./assets/images/uploaded/user/$filename.*"));
    } 
           
}
        
    /* End of file  owner.php */
        
                            