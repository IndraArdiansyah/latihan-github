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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- My Font -->
  <link href="<?= base_url('assets/'); ?>  https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
    rel="stylesheet" />

  <!-- font awesome -->
  <link rel="stylesheet" type="text/css"
    href="<?= base_url('assets/'); ?>fontawesome/fontawesome-free-5.15.3-web/css/fontawesome.css" />
  <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/room.css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> -->



  <title>room chat</title>
</head>
<style>
nav {
  display: flex;
  justify-content: space-between;
  margin-left: 120px;
  margin-top: -20px;
}

nav ul {
  display: flex;
  list-style: none;
  justify-content: space-between;
}

.navbar ul {
  display: flex;
  justify-content: space-between;
  list-style: none;
  margin-right: 10px;
  margin-left: -30px;
  font-size: 20px;
  margin-top: 25px;
}

i {
  color: black;
}

.avatar {
  /* Rounded border */
  border-radius: 50%;
  /* height: 64px;
  width: 64px; */
  /* display: flex; */
  /* justify-content: center; */
}

.avatar__image {
  /* Rounded border */
  border-radius: 50%;
  /* Take full size */
  height: 60%;
  width: 60%;
}

.avatar-img {
  /* Rounded border */
  border-radius: 50%;
  /* Take full size */
  height: 20%;
  width: 20%;
  /* display: flex;
  justify-content: flex-start; */
  margin-bottom: 5px;
}

table {
  display: block;
  position: relative;
  left: -6rem;

}

.text {
  display: flex;
  justify-content: start;
}

.foto {
  /* display: flex;
  justify-content: space-around; */
  margin-top: 5px;
  margin-left: 40px;
}

/* body {
  background-color: rgba(43, 37, 32, 0.719);
} */
</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form">
        <form class="user" method="post" action="">
          <id class="topbar">
            <nav class="navbar ">
              <div class="container-fluid">
                <h2><?= $judul;?></h2>
              </div>

              <a class="foto" href="<?= base_url('user');?>" id="userDropdown" role="button" ariahaspopup="true"
                aria-expanded="false">
                <div class="avatar justify-content-center align-items-center">
                  <img class="avatar__image" src="<?= base_url('assets/img/profile/') . $user['image'];?>" />
                </div>
              </a>

            </nav>
            <div class="navbar">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-commenting" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </id>

          <div class="container bootstrap snippets bootdey">
            <div class="row">
              <div class="chat col-md-4 bg-white ">

                <!-- =============================================================== -->
                <!-- member list -->
                <ul class="friend-list">
                  <?php
                  $a = 1;
                  foreach ($chat as $b) { ?>
                  <li class="active bounceInDown">
                    <input type="button" value="send" href="<?= base_url('pesan');?>" class="clearfix"
                      onclick="store();">
                    <img src="<?= base_url('assets/img/profile/') . $b['image'];?>" alt="" class="img-circle">
                    <div class="friend-name">
                      <strong><?= $b['username'];?></strong>
                    </div>
                    <div class="last-message text-muted">Hello, Are you there?</div>
                    <small class="time text-muted">Just now</small>
                    <small class="chat-alert label label-danger">1</small>
                    </input>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <a href="<?= base_url('autentifikasi/logout')?>" class="kembali text-right"><i class="fa fa-arrow-right"
              aria-hidden="true"></i></a>
        </form>
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

  function store() {
    var value = {
      // name: $('$b["username"]').val(),
      images: $('.friend-list').val()
    }

    $.ajax({
      url: '<?php echo base_url();?>/pesan/store',
      type: 'POST',
      data: 'value',
      datatype: 'json'
    });
  }
  </script>
</body>

</html>