<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Kuisioner Survey</title>
    <link href="<?php echo base_url('assetsh/gambar/Bg3.png'); ?>" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assetsh/theme/bootstrap.css'); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('/assetsh/theme/usebootstrap.css'); ?>">

    <?php foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
  </head>
  <body style="background-image: url('<?php echo base_url('assetsh/gambar/Bg3a.jpg'); ?>')">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url('admin'); ?>" class="navbar-brand">Sistem Informasi Kuisioner Survey</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
           <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="page-header" id="banner"> 
      <div class="row col-lg-3">
        <div class="panel panel-info" >
          <div class="panel-heading"><h3 class="panel-title">Menu Navigasi</h3></div>
          <div class="panel-body">
            <a href="<?php echo base_url('admin'); ?>" class="list-group-item"> Dashboard</a>
            <a href="<?php echo base_url('datatabel/datapertanyaan'); ?>" class="list-group-item"> Kelola Pertanyaan</a>
            <a href="<?php echo base_url('datatabel/dataresponden'); ?>" class="list-group-item"> Lihat Data Responden</a>
			<a href="<?php echo base_url('hasil'); ?>" class="list-group-item">Lihat Hasil CSI</a>
            <a href="<?php echo base_url('login/logout'); ?>" class="list-group-item"> Logout</a>
          </div>
        </div>
      </div>
   
      <div class="container col-lg-9">
          <?php echo $output; ?>
      </div>
    </div>

    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <script src="<?php echo base_url('/assetsh/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assetsh/bootstrap/usebootstrap.js'); ?>"></script>
  </body>
</html>