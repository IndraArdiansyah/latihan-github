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

</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form">
        <nav id="navbar">
          <div class="container-fluid ">
            <?= form_open_multipart('user/ubahProfil'); ?>
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
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
          <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <img
                src="<?= base_url('assets/img/profile/') . $user['image'];?>" height="120" width="120"
                class="img-thumbnail" />
            </div>
            <div class="input-group mb-3">
              <input type="file" class="form-control" placeholder="" aria-label="Example text with button addon"
                aria-describedby="button-addon1" id="image" name="image" for="image">
            </div>

          </div>
        </div>
        <br>
        <div class="container-fluid ">
          <?= form_open_multipart('user/ubahProfil');?>
          <ul class="nav justify-content-center">
            <li class="nav-link">
              <h3><i class="fa fa-id-badge" aria-hidden="true"></i>&emsp;</h3>
            </li>
            <li class="nav-item">
              <p><strong>Nama</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </li>
          </ul>
          <ul class="van justify-content-center">
            <li class="nav-link">
              <h3><i class="fa fa-phone"></i>&ensp;&nbsp;</h3>
            </li>
            <li class="nav-item">
              <p><strong>Telepon</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
              <input type="text" class="form-control" id="telepon" name="telepon"
                value="<?php echo $user['telepon']; ?>" readonly>
            </li>
          </ul>
          <ul class="avn justify-content-center">
            <li class="nav-link">
              <h3><i class="fa fa-info-circle" aria-hidden="true"></i>&emsp;</h3>
            </li>
            <li class="nav-item">
              <p><strong>Info</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p>
              <input type="text" class="form-control" id="info" name="info" value="<?php echo $user['info']; ?>">
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </li>
          </ul>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <button class="btn btn-danger" onclick="window.history.go(-1)">Kembali</button>
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