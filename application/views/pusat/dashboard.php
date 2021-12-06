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
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/pesan.css" />
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div class="container app">
          <div class="row app-one">
            <div class="col-sm-8 conversation">
              <div class="row heading">
                <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
                  <div class="heading-avatar-icon">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                  </div>
                </div>
                <div class="col-sm-8 col-xs-7 heading-name">
                  <a class="heading-name-meta">John Doe
                  </a>
                  <span class="heading-online">Online</span>
                </div>
                <div class="col-sm-1 col-xs-1  heading-dot pull-right">
                  <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                </div>
              </div>

              <div class="row message" id="conversation">
                <div class="row message-previous">
                  <div class="col-sm-12 previous">
                    <a onclick="previous(this)" id="ankitjain28" name="20">
                      Show Previous Message!
                    </a>
                  </div>
                </div>

                <div class="row message-body">
                  <div class="col-sm-12 message-main-receiver">
                    <div class="receiver">
                      <div class="message-text">
                        Hi, what are you doing?!
                      </div>
                      <span class="message-time pull-right">
                        Sun
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row message-body">
                  <div class="col-sm-12 message-main-sender">
                    <div class="sender">
                      <div class="message-text">
                        I am doing nothing man!
                      </div>
                      <span class="message-time pull-right">
                        Sun
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row reply">
                <div class="col-sm-1 col-xs-1 reply-emojis">
                  <i class="fa fa-smile-o fa-2x"></i>
                </div>
                <div class="col-sm-9 col-xs-9 reply-main">
                  <textarea class="form-control" rows="1" id="comment"></textarea>
                </div>
                <div class="col-sm-1 col-xs-1 reply-recording">
                  <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                </div>
                <div class="col-sm-1 col-xs-1 reply-send">
                  <i class="fa fa-send fa-2x" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  // $('.alert-message').alert().delay(3000).slideUp('slow');
  $(function() {
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });
  })
  </script>
</body>

</html>