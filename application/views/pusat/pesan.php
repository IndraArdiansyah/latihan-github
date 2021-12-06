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
  height: 10%;
  width: 10%;
}

.nav-item .nam {
  justify-content: flex-end;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.chat ul {
  list-style: none;
  display: flex;
}
</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form">
        <div class="chat col-md-4 bg-white ">

          <!-- =============================================================== -->
          <!-- member list -->
          <ul class="friend-list">
            <li class="active bounceInDown">
              <a href="<?= base_url('dashboard');?>" class="clearfix">
                <img src="<?= base_url('assets/img/profile/') . $user['image'];?>" alt="" class="avatar__image">
                <div class="friend-name">
                  <strong><?= $user['nama'];?></strong>
                </div>
                <div class="last-message text-muted">Hello, Are you there?</div>
                <small class="time text-muted">Just now</small>
                <small class="chat-alert label label-danger">1</small>
              </a>
            </li>

          </ul>
        </div>
        <div class="page-content page-container" id="page-content">
          <div class="padding">
            <div class="row container d-flex justify-content-center">
              <div class="col-md-6">
                <div class="card card-bordered">
                  <div class="card-header">
                    <h4 class="card-title"><strong>Chat</strong></h4> <a class="btn btn-xs btn-secondary" href="#"
                      data-abc="true">Let's Chat App</a>
                  </div>
                  <div class="ps-container ps-theme-default ps-active-y" id="chat-content"
                    style="overflow-y: scroll !important; height:400px !important;">
                    <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                      <div class="media-body">
                        <p>Hi</p>
                        <p>How are you ...???</p>
                        <p>What are you doing tomorrow?<br> Can we come up a bar?</p>
                        <p class="meta"><time datetime="2018">23:58</time></p>
                      </div>
                    </div>
                    <div class="media media-meta-day">Today</div>
                    <div class="media media-chat media-chat-reverse">
                      <div class="media-body">
                        <p>Hiii, I'm good.</p>
                        <p>How are you doing?</p>
                        <p>Long time no see! Tomorrow office. will be free on sunday.</p>
                        <p class="meta"><time datetime="2018">00:06</time></p>
                      </div>
                    </div>
                    <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                      <div class="media-body">
                        <p>Okay</p>
                        <p>We will go on sunday? </p>
                        <p class="meta"><time datetime="2018">00:07</time></p>
                      </div>
                    </div>
                    <div class="media media-chat media-chat-reverse">
                      <div class="media-body">
                        <p>That's awesome!</p>
                        <p>I will meet you Sandon Square sharp at 10 AM</p>
                        <p>Is that okay?</p>
                        <p class="meta"><time datetime="2018">00:09</time></p>
                      </div>
                    </div>
                    <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                      <div class="media-body">
                        <p>Okay i will meet you on Sandon Square </p>
                        <p class="meta"><time datetime="2018">00:10</time></p>
                      </div>
                    </div>
                    <div class="media media-chat media-chat-reverse">
                      <div class="media-body">
                        <p>Do you have pictures of Matley Marriage?</p>
                        <p class="meta"><time datetime="2018">00:10</time></p>
                      </div>
                    </div>
                    <div class="media media-chat"> <img class="avatar"
                        src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                      <div class="media-body">
                        <p>Sorry I don't have. i changed my phone.</p>
                        <p class="meta"><time datetime="2018">00:12</time></p>
                      </div>
                    </div>
                    <div class="media media-chat media-chat-reverse">
                      <div class="media-body">
                        <p>Okay then see you on sunday!!</p>
                        <p class="meta"><time datetime="2018">00:12</time></p>
                      </div>
                    </div>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                      <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                      <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                    </div>
                  </div>
                  <div class="publisher bt-1 border-light"> <img class="avatar avatar-xs"
                      src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="..."> <input
                      class="publisher-input" type="text" placeholder="Write something"> <span
                      class="publisher-btn file-group"> <i class="fa fa-paperclip file-browser"></i> <input type="file">
                    </span> <a class="publisher-btn" href="#" data-abc="true"><i class="fa fa-smile"></i></a> <a
                      class="publisher-btn text-info" href="#" data-abc="true"><i class="fa fa-paper-plane"></i></a>
                  </div>
                </div>
              </div>
            </div>
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
  <script src="<?= base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script>
  <!-- <script src="<?= base_url('assets/'); ?>vendor/sweetalert/sweetalert2.all.min.js"></script> -->


  <script>
  $('.alert-message').alert().delay(3000).slideUp('slow');
  </script>
</body>

</html>