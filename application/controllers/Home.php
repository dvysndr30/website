<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['kuliner'] = $this->MyModel->getKulinerNow();
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function more() {
        $this->load->view('templates/header');
        $this->load->view('more');
        $this->load->view('templates/footer');
    }

    public function detailrestro() {
        $data['resto'] = $this->MyModel->tampil_resto_terkini();
        $this->load->view('templates/header');
        $this->load->view('detailrestro', $data);
        $this->load->view('templates/footer');
        }

    public function rekomendasi() {

        $data['kuliner'] = $this->MyModel->getKuliner();
        $this->form_validation->set_rules('nama_kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('nama_kuliner', 'Nama Kuliner', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('embed', 'Embed', 'required|trim');
        $this->form_validation->set_rules('status', 'Status Kepemilikan', 'required|trim');
        $this->form_validation->set_rules('nomor', 'Nomor Resto', 'required|trim');
        $this->form_validation->set_rules('restoran', 'Status Resto', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        // $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if($this->form_validation->run() == false) {
            $data['kategori'] = $this->MyModel->getKategori();
            $this->load->view('templates/header');
            $this->load->view('rekomendasi', $data);
            $this->load->view('templates/footer');
            } else {
                $config = [
                    'file_name' => date('d-m-Y').'-restoran',
                    'upload_path' => './assets/images/uploaded/kuliner',
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
                            'keterangan' => 'belum_ambil',
                            'menu_restoran' => $fl['file_name']
                    ];
                        $this->MyModel->addRekomendasi($data);
                        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil
                        </div>');
                        redirect('detailrestro');
                   
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Gagal Upload Gambar!
                    </div>');
                    redirect('rekomendasi/add');
            }
        }
    }

     public function kategori() {
        $data['kuliners']=$this->MyModel->getKuliner();
        $data['kategori']=$this->MyModel->getKategori();
        $this->load->view('templates/header');
        $this->load->view('kategori',$data);
        $this->load->view('templates/footer');
    }

    public function kategori_detail() {
        $id_kuliner = $this->uri->segment(3);
        $data['datakul'] = $this->MyModel->getDetail($id_kuliner);
        $data['comment'] = $this->MyModel->getComment($id_kuliner);
        $data['jmlCom'] = $this->MyModel->jmlComment($id_kuliner);
        $data['rate'] = $this->MyModel->getRate($id_kuliner);
        $this->load->view('templates/header');
        $this->load->view('kategori_detail', $data);
        $this->load->view('templates/footer');
    }

    public function getListKategori($id_kategori)
    {
        $q = $this->MyModel->getDtListKategori($id_kategori)->result();
        echo json_encode($q);
    }

    public function about() {
        $this->load->view('templates/header');
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    public function addRate() {
        $data = [
            'rating' => $this->input->post('rating'),
            'id_kuliner' => $this->input->post('id_kuliner')
        ];
        $this->db->insert('rating', $data);
        echo json_encode("Berhasil");
    }

    public function addComment() {
        $now = date('Y-m-d H:i:s');
        $data = [
            'id_kuliner' => $this->input->post('id_kuliner'),
            'nama' => $this->input->post('nama'),
            'ulasan' => $this->input->post('ulasan'),
            'rating' => $this->input->post('rating'),
            'waktu' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('ulasan', $data);
        
        redirect(base_url('home/kategori_detail/').$this->input->post('id_kuliner'),'refresh');
        
    }

    

   /* public function register() 
    {
        $data['gender'] = ['l','p'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');
        
        if($this->form_validation->run() == false) {
            $this->load->view('register', $data);   
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
                redirect('login');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Gagal Upload Gambar!
                </div>');
                redirect('register');
            }   
        }

    }

     public function profile() {
        $data['admin'] = $this->MyModel->getUserByID($this->session->userdata('id_user'));
        $data['user'] = $this->MyModel->getUserByID($this->session->userdata('id_user'));
        $this->load->view('layout/header');
        $this->load->view('profile', $data);   
        $this->load->view('layout/footer');
        }

    public function profile_edit($id) {
        $data['admin'] = $this->MyModel->getUserByID($this->session->userdata('id_user'));
        $data['user'] = $this->MyModel->getUserByID($id);
        $data['gender'] = ['l','p'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('ktp', 'KTP', 'required|trim');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/admin_navigation', $data);
            $this->load->view('profile_edit', $data);   
            $this->load->view('layout/footer');
        } else {
            if(empty($_FILES['gambar']['name'])) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'ktp' => $this->input->post('ktp'),
                    'gender' => $this->input->post('gender'),
                    'alamat' => $this->input->post('alamat'),
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                ];
                $this->MyModel->editUser($id, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Berhasil
                </div>');
                redirect('profile');
            } else {
                $this->_delImageUser($id);
                $config = [
                    'file_name' => date('d-m-Y').'-user',
                    'upload_path' => './assets/img/uploaded/user/',
                    'allowed_types' => 'gif|jpg|png|jpeg',
                    'max_size' => 2048,
                ];
    
                $this->load->library('upload', $config);
    
                if($this->upload->do_upload('gambar')) {
                    $file = $this->upload->data();
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'ktp' => $this->input->post('ktp'),
                        'gender' => $this->input->post('gender'),
                        'alamat' => $this->input->post('alamat'),
                        'email' => $this->input->post('email'),
                        'username' => $this->input->post('username'),
                        'gambar' => $file['file_name'],
                    ];
                    $this->MyModel->editUser($id, $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Berhasil
                    </div>');
                    redirect('profile');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Gagal Upload Gambar!
                    </div>');
                    redirect('profile/edit/'.$id);
                }   
            }
        }

    }

    public function changepassword($id) {
        $data['admin'] = $this->MyModel->getUserByID($this->session->userdata('id_user'));
        $data['username'] = $this->MyModel->getUser();
        $data['user'] = $this->MyModel->getUserByID($id);

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false) {

            $this->load->view('layout/header');
            $this->load->view('layout/owner_navigation', $data);
            $this->load->view('owner/profile_changepassword');   
            $this->load->view('layout/footer');
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password1');
            if(!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password Lama Salah!
                    </div>');
                redirect('profile/changepassword/'.$id);
            } else {
                if($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password baru tidak boleh sama dengan Password Lama!
                    </div>');
                   
                redirect('profile/changepassword/'.$id);
                } else {
                    $pass = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $pass);
                    $this->db->where('id_user', $id);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Berhasil
                    </div>');
                    redirect('profile');
                }
            }
        }
    }

    private function _delImageUser($id) {
        $img = $this->MyModel->getUserByID($id);
        $filename = explode('.', $img['gambar'])[0];
        return array_map('unlink', glob(FCPATH."./assets/img/uploaded/user/$filename.*"));
    }*/

    

}
        
    /* End of file  home.php */
        
                            

