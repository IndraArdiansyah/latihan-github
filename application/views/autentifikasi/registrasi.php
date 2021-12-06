<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('assets/'); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous" />

  <!-- My Font -->
  <link href="<?= base_url('assets/'); ?>  https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
    rel="stylesheet" />

  <!-- font awesome -->
  <link rel="stylesheet" type="text/css"
    href="<?= base_url('assets/'); ?>fontawesome/fontawesome-free-5.15.3-web/css/fontawesome.css" />
  <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/daftar.css" />



  <title>daftar</title>
</head>
<style>
.panah {
  text-align: right;
  margin-right: 5px;
  font-size: 25px;
}

.navnav {
  margin-top: -50px;
}

.navnav h1 {
  font-size: 60px;
}

.masukan {
  margin-top: -20px;
}

.btn {
  width: 100%;
}

.masuk {
  font-size: 20px;
  color: rgb(252, 6, 6);
}

input {
  width: 80%;
  height: 30px;
  /* border-radius: 10px 0 10px 0; */
  border: 2px solid gray;
  /* background: transparent; */
  color: #fff;
}

.form {
  background-image: url(<?php echo base_url('assets/img/walpaper1.jpg')?>);
  /* background-color: #fff; */
}
</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form">
        <form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
          <div class="row justify-content-end">
            <div class="col-4">
              <div class="panah text-right">
                <a href="<?= base_url('autentifikasi')?>" class="kembali text-right"><i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="navnav">
            <h1><i class="fa fa-user-plus" aria-hidden="true"></i> SIGN UP</h1>
          </div>
          <div class="masukan">
            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Email address..."
              value="<?=set_value('email'); ?>">
            <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>

            <br />
            <p>Nama</p>
            <input type="text" name="nama" id="nama" placeholder="Nama lengkap..." value="<?=set_value('nama'); ?>">
            <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>

            <br />
            <p>No. Telp</p>
            <input type="text" name="telepon" id="telepon" placeholder="No.Telp..." value="<?=set_value('telepon'); ?>">
            <?= form_error('telepon','<small class="text-danger pl-3">', '</small>'); ?>

            <br />
            <p>Username*</p>
            <input type="text" name="username" id="username" placeholder="Username..."
              value="<?=set_value('username'); ?>">
            <?= form_error('username','<small class="text-danger pl-3">', '</small>'); ?>

            <br />
            <p>Password*</p>
            <input type="password" name="password" id="password" placeholder="Password..."
              value="<?=set_value('password'); ?>">
            <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <br />

          <button type="submit" class="btn text-center">
            DAFTAR
          </button>
          <h4>Apakah anda sudah punya akun ?</h4>
          <a href="<?= base_url('autentifikasi/login'); ?>" class="masuk">Masuk</a>
        </form>
      </div>
  </div>
  </div>
  </span>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/');
?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/');
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script>
  $('.alert-message').alert().delay(3000).slideUp('slow');
  </script>
</body>

</html>