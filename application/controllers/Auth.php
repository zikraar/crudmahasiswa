<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model', 'userrole');
  }

  public function index()
  {
    $this->load->view("layout/auth_header");
    $this->load->view("auth/login");
    $this->load->view("layout/auth_footer");
  }

  public function registrasi()
  {
    $this->load->view("layout/auth_header");
    $this->load->view("auth/registrasi");
    $this->load->view("layout/auth_footer");
  }
  public function cek_regis()
  {
    $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'gambar' => 'default.jpg',
        'role' => "user",
        'date_created' => time()
    ];
    $this->userrole->insert($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Selamat Akun anda telah berhasil terdaftar, Silahkan Login!</div>');
    redirect('Auth');
  }
}