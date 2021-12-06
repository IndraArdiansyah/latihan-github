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
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/profile.css" />
  <!-- <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> -->



  <title>profile</title>
</head>
<style>
.avatar {
  /* Rounded border */
  border-radius: 50%;
}

.avatar__image {
  /* Rounded border */
  border-radius: 50%;

  /* Take full size */
  height: 70%;
  width: 70%;
}

.nav-item .nam {
  justify-content: flex-end;
}
</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form">
        <nav id="navbar">
          <div class="container-fluid ">
            <ul class="navan justify-content-center">
              <li class="nav-item">
                <h3><a href="<?= base_url('dashboard')?>" class="kembali text-right"><i class="fa fa-arrow-left"
                      aria-hidden="true"></i></a>&emsp;</h3>
              </li>
              <li class="nav-item">
                <p><strong>Profil</strong></p>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container mb-4 p-3 d-flex justify-content-center">
          <div class="card p-4">
            <div class="avatar justify-content-center align-items-center">
              <img class="avatar__image" src="<?= base_url('assets/img/profile/') . $user['image'];?>" />
              <h2><a href="<?= base_url('user/ubahProfil');?>" class="ubah"><i class="fa fa-camera"
                    aria-hidden="true"></i></a></h2>
            </div>
          </div>
        </div>
        <br>
        <div class="container-fluid ">
          <ul class="nav justify-content-center">
            <li class="nav-link">
              <h3><i class="fa fa-id-badge" aria-hidden="true"></i>&emsp;</h3>
            </li>
            <li class="nav-item">
              <p><strong>Nama</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
              <p class="nam"><?= $user['nama'];?></p>
            </li>
            <li class="nav-van">
              <h3><a href="<?= base_url('user/ubahProfil');?>" class="ubah"><i class="fa fa-edit"
                    aria-hidden="true"></i></a></h3>
            </li>
          </ul>
          <ul class="van justify-content-center">
            <li class="nav-link">
              <h3><i class="fa fa-phone"></i>&ensp;&nbsp;</h3>
            </li>
            <li class="nav-item">
              <p><strong>Telepon</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
              <p class="man"><?= $user['telepon'];?></p>
            </li>
          </ul>
          <ul class="avn justify-content-center">
            <li class="nav-link">
              <h3><i class="fa fa-info-circle" aria-hidden="true"></i>&emsp;</h3>
            </li>
            <li class="nav-item">
              <p><strong>Info</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
              <p class="amn"><?= $user['info'];?></p>
            </li>
            <li class="nav-van">
              <h3><a href="<?= base_url('user/ubahProfil');?>" class="ubah"><i class="fa fa-edit"
                    aria-hidden="true"></i></a></h3>
            </li>
          </ul>
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
  <script src="<?= base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script>
  <!-- <script src="<?= base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script> -->


  <script>
  $('.alert-message').alert().delay(3000).slideUp('slow');
  </script>
</body>

</html>