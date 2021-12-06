<?php 

class Autentifikasi extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        $this->load->model(['ModelUser']);
        // $this->load->helper('url');

    }

    public function index()
    {
      if($this->session->userdata('email')){
        redirect('dashboard');
      }
      $this->form_validation->set_rules('email', 'Alamat Email','required|trim|valid_email',[
        'required' => 'Email Harus diisi...!!',
        'valid_email'	=> 'Email Tidak Benar...!!'
      ]);
      $this->form_validation->set_rules('password', 'Password','required|trim',[
        'required' => 'Password Harus Diisi...!!'
      ]);
      if ($this->form_validation->run() == false){
      $data['judul'] = 'Home';
      $this->load->view('templates/header',$data);
      $this->load->view('autentifikasi/home3');
      $this->load->view('templates/footer');
      } else {
        $this->_login();
      }
    }
  
    public function login()
    {
      if($this->session->userdata('email')){
        redirect('dashboard');
      }
      $this->form_validation->set_rules('email', 'Alamat Email','required|trim|valid_email',[
        'required' => 'Email Harus diisi...!!',
        'valid_email'	=> 'Email Tidak Benar...!!'
      ]);
      $this->form_validation->set_rules('password', 'Password','required|trim',[
        'required' => 'Password Harus Diisi...!!'
      ]);
      if ($this->form_validation->run() == false){
        $data['judul'] = 'Login';
        // $this->load->view('templates/header',$data);
        $this->load->view('autentifikasi/login4',$data);
        // $this->load->view('templates/footer');
      } else {
        $this->_login();
      }
    }
  private function _login()
  {
    $email = htmlspecialchars($this->input->post('email',true));
    $password = $this->input->post('password', true);
    $user = $this->ModelUser->cekData(['email' => $email])->row_array();

    if ($user) {
      if ($user['is_active'] == 1){
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);

          if ($user['role_id'] == 1) {
            redirect('dashboard');
          } else {
            if ($user['image'] == 'default.jpg') {
              $this->session->set_flashdata('pesan','<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk mengubah Photo Profil</div>');
            }
            redirect('dashboard');
          }
        } else {
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Password salah...!!</div>');
          redirect('autentifikasi/login');
        }
      } else {
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">User belum diaktivasi...!!</div>');
        redirect('autentifikasi/login');
      }
    } else {
      $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-message" role="alert">Username salah...!!</div>');
      redirect('autentifikasi/login');
    }
  }


  public function registrasi()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }
    $this->form_validation->set_rules('email','Alamat Email','required|trim|valid_email|is_unique[user.email]',[
      'valid_email' => 'Email tidak benar..!!',
      'required' => 'Email belum diisi..!!',
      'is_unique' => 'Email sudah terdaftar..!!!'
    ]);
    $this->form_validation->set_rules('nama','Nama Lengkap','required',[
      'required' => 'Nama Harus Diisi...!!'
    ]);
    $this->form_validation->set_rules('telepon','No Telepon','required',[
      'required' => 'No Telepon Harus Diisi...!!'
    ]);
    $this->form_validation->set_rules('username','Username','required',[
      'required' => 'username Harus Diisi...!!'
      // 'valid_user' => 'Username Tidak Benar...!!'
    ]);
    $this->form_validation->set_rules('password','Password','required|trim|min_length[3]',[
      'required' => 'password Harus Diisi...!!',
      'min_length' => 'Password terlalu pendek...!!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data['judul'] = 'Regirtasi User';
      $this->load->view('autentifikasi/registrasi',$data);
    } else {
      // echo 'data berhasil di tambah';
      $email = $this->input->post('email', true);
      $data = [
        'nama' =>htmlspecialchars($this->input->post('nama',true)),
        'email' => htmlspecialchars($email),
        'image' => 'default.jpg',
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role_id' => 1,
        'is_active' => 1,
        'telepon' => htmlspecialchars($this->input->post('telepon', true)),
        'info' => 'active',
        
      ];

      $this->ModelUser->simpanData($data);
      // $this->load->model('ModelUser');
      // $this->ModelUser->simpanData();

      $this->session->set_flashdata('pesan','<div class="alert alert-success alert-message role-alert">Selamat akun user telah dibuat</div>');
      redirect('autentifikasi');
    }
    
  }

  public function logout()
    {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');
      // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telahlogout!!</div>');
      redirect('autentifikasi');
    }
}

 