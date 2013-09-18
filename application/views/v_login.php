<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $judul; ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png">
  <!---CSS Files-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/b=belajar/assets/css&amp;f=core.css,login.css,ui.css" />  
  
  <!---jQuery Files-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/inputs.js"></script>
</head>
<body>

  <div id="wrapper">

    <div id="header">
      <div id="logo"></div>
      <h1>LEARNING APPS - LOGIN</h1>
    </div>

    <div id="body">
      <div id="head">
        <span class="icon">K</span>
        <h2>Konfirmasi Akun Login</h2>
        <br class="clear">
      </div>
      <form id="alt-lg-form" method="post" action="auth">
        <div id="middle">
            <ul id="lg-input">
              <li id="usr-li">
                <input type="text" name="username"  class="required" placeholder="Input Username">
                <span class="icon">a</span>
              </li>
              <li id="psw-li">
                <input type="password" name="password" class="required" placeholder="Input Password">
                <span class="icon">/</span>
              </li>
			  <li id="lvl-li">
			  	<select name="level">
					<option value="0">Silahkan Pilih Level</option>
					<?php
						foreach($level as $l){
							?>
							<option value="<?php echo $l['level'] ?>"><?php echo $l['nama_lengkap'] ?></option>
							<?php
						}
					?>
				</select>
				<span class="arrow">&amp;</span>
              </li>
            </ul>
        </div>
        <div id="bottom">
          <button type="submit" id="lg-submit" class="button inset submit">LOGIN</button>
          <br class="clear">
        </div>
      </form>
    </div>
  </div>
  
  <span id="load">
    <img src="<?php echo base_url(); ?>assets/img/load.png"><img src="<?php echo base_url(); ?>assets/img/spinner.png" id="spinner">
  </span>

  <!---jQuery Code-->
  <script type='text/javascript'>
    $('#wrapper, .notification, #forgot-psw').hide();
    $('#load').fadeIn(400);
    $(window).load( function() {
      $('#load').fadeOut(400, function() {
        $('#wrapper').fadeIn(600, function() {
          $('#welcome.notification').delay(500).fadeIn(400).loginNotif();
          $('#psw').focus();
        });
      });
    });

    $('#rb-check').flcheck();

    $('#alt-lg-form').validateLogin();

  </script>
</body>
</html>