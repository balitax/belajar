<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $judul; ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
  <link rel="shortcut icon" href="favicon.png">
  <!---CSS Files-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/b=belajar/assets/css&amp;f=core.css,login.css,ui.css" />  
  
  <!---jQuery Files-->
  <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/inputs.js"></script>
</head>
<body>
  <div id="wrapper">
    <div id="body">
      <div id="head">
        <h2>Kesalahan</h2>
        <br class="clear">
      </div>
        <div id="middle">
            <ul id="lg-input">
              <li id="usr-li">
                <input type="text" name="username" disabled="disabled"  
				value="Halaman Tidak Ada atau Terjadi Kesalahan Form Login">
              </li>
            </ul>
        </div>
		<div id="bottom">
			<a href="<?php echo base_url(); ?>" class="button inset submit" id="lg-submit">BACK</a>
          <br class="clear">
        </div>
    </div>
  </div>
  <span id="load">
    <img src="<?php echo base_url(); ?>assets/img/load.png"><img src="<?php echo base_url(); ?>assets/img/spinner.png" id="spinner">
  </span>
  <script type='text/javascript'>
    $('#load').fadeIn(400);
    $(window).load( function() {
      $('#load').fadeOut(400, function() {
        $('#wrapper').fadeIn(600);
      });
    });
  </script>
</body>
</html>