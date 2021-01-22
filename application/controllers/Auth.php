<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('MyModel');
        $this->load->library('form_validation');
    }
    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('auth/auth_user');
         
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['username' => $username])->row_array();

            if($user) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'username' => $user['username'],  
                        'role_id' => $user['role_id'],    
                    ];

                    $this->session->set_userdata($data);


                    if($user['role_id'] == 1) {
                        redirect('admin');
                    } else if($user['role_id'] == 2) {
                        redirect('home');
                    }

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password Salah!
                    </div>');
               
                    redirect(base_url('login'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Username Tidak Terdaftar!
                </div>');
                redirect(base_url('login'));
            }
        }          
    }

    public function owner() {
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('auth/auth_owner');
         
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('owner', ['username' => $username])->row_array();

            if($user) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'id_owner' => $user['id_owner'],
                        'username' => $user['username'],         
                    ];

                    $this->session->set_userdata($data);
                    redirect(base_url('owner'));

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Password Salah!
                    </div>');
               
                    redirect(base_url('owner/login'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Username Tidak Terdaftar!
                </div>');
                redirect(base_url('owner/login'));
            }
        }
    }

    public function owner_logout() {
        
        $this->session->sess_destroy();
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda telah Logout<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect(base_url('owner/login'));
    }
    
    public function logout() {
        
        $this->session->sess_destroy();
        
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Anda telah Logout<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect(base_url('login'));
    }
}
        
    /* End of file  Auth.php */
        
                            