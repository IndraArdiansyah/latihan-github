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


  <title>masuk</title>
</head>
<style>
.navnav {
  text-align: center;
  font-size: 70px;
  color: rgb(77, 41, 1);
  border: 1px solid #D0D0D0;
  border-style: initial;
  border-radius: 100px;
}

h1 {
  font-size: 40px;
  margin-top: -10px;
}

.panah {
  text-align: right;
  margin-right: 5px;
  font-size: 25px;
}

button {
  width: 100%;
}

.form {
  background-image: url(<?php echo base_url('assets/img/walpaper1.jpg')?>);
  ?>);
  /* background-color: #fff; */
}

.small {
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
</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form ">
        <div class="row justify-content-end">
          <div class="col-4">
            <div class="panah text-right">
              <a href="<?= base_url('autentifikasi')?>" class="kembali text-right"><i class="fa fa-arrow-right"
                  aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="navnav">
          <i class="fa fa-lock" aria-hidden="true"></i>
        </div>
        <h1>SIGN IN</h1>
        <?= $this->session->flashdata('pesan');?>
        <br>
        <form class="user" action="<?= base_url('autentifikasi');?>" method="post">

          <p>Username*</p>
          <input type="text" value="<?=set_value('email');?>" name="email" id="email" placeholder="Masukkan Email...">
          <?= form_error('email','<small class="text-danger pl-3">', '</small>');?>

          <p>Password*</p>
          <input type="password" value="<?=set_value('password');?>" name="password" id="password"
            placeholder="Masukkan Password...">
          <?= form_error('password','<small class="text-danger pl-3">', '</small>');?>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <button type="submit" class="btn text-center">
            Masuk
          </button>
          <br>
          <div class="text text-danger">
            <a class="small" href="<?=base_url('autentifikasi/lupaPassword'); ?>">Lupa Password ?</a>
          </div>
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