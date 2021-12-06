<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['ModelUser']);
    // cek_login();
  }
  public function index()
  {
    $data['judul'] = 'profil saya';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('user/profile', $data);

  }
  
  public function ubahProfil()
  {
  $data['judul'] = 'Ubah Profil';
  $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

  $this->form_validation->set_rules('nama', 'Nama Lengkap','required|trim', [
    'required' => 'Nama tidak Boleh Kosong'
  ]);

  if ($this->form_validation->run() == false) {
    $this->load->view('user/ubah_profile', $data);
  } else {
    
    // $nama = $this->input->post('nama', true);
    // $telepon = $this->input->post('telepon', true);
    // $info = $this->input->post('info', true);
    // $email = $this->input->post('email', true);

    //jika ada gambar yang akan diupload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $config['upload_path'] = './assets/img/profile/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '3000';
      $config['max_width'] = '1024';
      $config['max_height'] = '1000';
      $config['file_name'] = 'pro' . time();

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $gambar_lama = $data['user']['image'];
        if ($gambar_lama != 'default.jpg') {
          unlink(FCPATH . 'assets/img/profile/' .$gambar_lama);
        }

      $gambar_baru = $this->upload->data('file_name');
      $this->db->set('image', $gambar_baru);
      } else { }
    }
    $data = [
      'nama' => $this->input->post('nama', true),
      'telepon' => $this->input->post('telepon', true),
      'info' => $this->input->post('info', true)
    ];

    

    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
    $this->ModelUser->updateData($data);
    redirect('user');
    }
  }

  public function ubahFoto ()
  {
    $data['judul'] = 'Ubah Foto';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

    if ($this->form_validation->run() == false) {
      $this->load->view('user/ubah-foto', $data);
    } else {
        //jika ada gambar yang akan diupload
    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $config['upload_path'] = './assets/img/profile/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '3000';
      $config['max_width'] = '1024';
      $config['max_height'] = '1000';
      $config['file_name'] = 'pro' . time();

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $new_image = $this->upload->data('file_name');
        $this->db->set('image', $new_image);

        // $gambar_lama = $data['user']['image'];
        // if ($gambar_lama != 'default.jpg') {
        //   unlink(FCPATH . 'assets/img/profile/' .$gambar_lama);
        // }

      // $gambar_baru = $this->upload->data('file_name');
      // $this->db->set('image', $gambar_baru);
      } else {
        echo $this->upload->display_errors();
      }
    }
    $data = [
      'image' => $this->input->post('image', true)
    ];

    $this->ModelUser->updateData($data);
    redirect('user');
    }
  }
}