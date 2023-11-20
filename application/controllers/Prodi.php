<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = " Program Study Page";
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer");

  }

  public function tambah()
  {
    $data['judul2'] = "Program Study Add Page";
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_tambah_prodi", $data);
    $this->load->view("layout/footer");
  }

  function upload()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'nama_kaprodi' => $this->input->post('nama_kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'lulusan' => $this->input->post('lulusan'),
    ];
    $this->Prodi_model->insert($data);
    redirect('Prodi');

  }
  public function edit($id)
  {
    $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_ubah_prodi", $data);
    $this->load->view("layout/footer");
  }
  public function update()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'nama_kaprodi' => $this->input->post('nama_kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'lulusan' => $this->input->post('lulusan'),
    ];
    $id = $this->input->post('id');
    $this->Prodi_model->update(['id' => $id], $data);
    redirect('prodi');
  }

  public function hapus($id)
  {
    $this->Prodi_model->delete($id);
    redirect('Prodi');
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */