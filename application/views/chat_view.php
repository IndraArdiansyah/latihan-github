<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Chat Application in Codeigniter</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
  <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet" />
  <style type="text/css">
  #chat_message_area {
    width: 100%;
    height: auto;
    min-height: 80px;
    overflow: auto;
    padding: 6px 24px 6px 12px;
    border: 1px solid #CCC;
    border-radius: 3px;
  }

  .notification_circle {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #FF0000;
    text-align: center;
    color: #fff;
    padding: 3px 6px;
  }

  .online {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #5cb85c;
    text-align: center;
    color: #fff;
    padding: 3px 6px;
  }

  .offline {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: #ccc;
    text-align: center;
    color: #fff;
    padding: 3px 6px;
  }
  </style>
</head>

<body>
  <div clas="container-fluid">
    <br />
    <h2 align="center">Chat Application in Codeigniter</h2>
    <br />
    <div class="col-md-12" align="right">
      <a href="<?php echo base_url(); ?>google_login/logout">Logout</a>
    </div>
    <div class="col-md-3" style="padding-right:0;">
      <div class="panel panel-default" style="height: 700px; overflow-y: scroll;">
        <div class="panel-heading">Chat with User</div>
        <div class="panel-body">

        </div>
      </div>
    </div>
    <div class="col-md-6" style="padding-left:0; padding-right: 0;">
      <div class="panel panel-default" style="">
        <div class="panel-heading">Chat Area</div>
        <div class="panel-body">
          <div id="chat_header">
            <h2 align="center" style="margin:0; padding-bottom:16px;"><span id="dynamic_title">Welcome
                <?php echo $this->session->userdata('username'); ?></span></h2>
          </div>
          <div id="chat_body" style="height:406px; overflow-y: scroll;"></div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3" style="padding-left:0;">
    <div class="panel panel-default" style="height: 300px; overflow-y: scroll;">
      <div class="panel-heading">Search User</div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-8">
            <input type="text" name="search_user" id="search_user" class="form-control input-sm"
              placeholder="Search User" />
          </div>
          <div class="col-md-4">
            <button type="button" name="search_button" id="search_button" class="btn btn-primary btn-sm">Search</button>
          </div>
        </div>

        <div id="search_user_area"></div>

      </div>
    </div>
    <div class="panel panel-default" style="height: 380px; overflow-y: scroll;">
      <div class="panel-heading">Nofication</div>
      <div class="panel-body">

      </div>
    </div>
  </div>
  </div>
</body>

</html>

<script>
$(document).ready(function() {

  function loading() {
    var output = '<div align="center"><br /><br /><br />';
    output += '<img src="<?php echo base_url(); ?>asset/loading.gif" /> Please wait...</div>';
    return output;
  }

  $(document).on('click', '#search_button', function() {
    var search_query = $.trim($('#search_user').val());
    $('#search_user_area').html('');
    if (search_query != '') {
      $.ajax({
        url: "<?php echo base_url(); ?>chat/search_user",
        method: "POST",
        data: {
          search_query: search_query
        },
        dataType: "json",
        beforeSend: function() {
          $('#search_user_area').html(loading());
          $('#search_button').attr('disabled', 'disabled');
        },
        success: function(data) {
          $('#search_button').attr('disabled', false);
          var output = '<hr />';
          var send_userid = "<?php echo $this->session->userdata('user_id'); ?>";
          if (data.length > 0) {
            for (var count = 0; count < data.length; count++) {
              output += '<div class="row">';
              output += '<div class="col-md-7"><img src="' + data[count].profile_picture +
                '" class="img-thumbnail img-rounded" width="35" /> ' + data[count].first_name + ' ' +
                data[count].last_name + '</div>';
              if (data[count].is_request_send == 'yes') {
                output +=
                  '<div class="col-md-5"><button type="button" name="request_button" class="btn btn-warning btn-xs">Request Sended</button></div>';
              } else {
                output +=
                  '<div class="col-md-5"><button type="button" name="request_button" class="btn btn-success btn-xs request_button" id="request_button' +
                  data[count].user_id + '" data-receiver_userid="' + data[count].user_id +
                  '" data-send_userid="' + send_userid + '">Send Request</button></div>';
              }
              output += '</div><hr />';
            }
          } else {
            output += '<div align="center"><b>No Data Found</b></div>';
          }
          output += '</div>';
          $('#search_user_area').html(output);
        }
      })
    }
  });
});
</script>