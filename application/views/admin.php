<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-g">
    <title>Sistem Informasi Kuisioner Survey</title>
    <link href="<?php echo base_url('assetsh/gambar/Bg3.png'); ?>" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('/assetsh/theme/bootstrap.css'); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('/assetsh/theme/usebootstrap.css'); ?>">
  </head>
  <body style="background-image: url('<?php echo base_url('assetsh/gambar/Bg3a.jpg'); ?>')">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url('admin'); ?>" class="navbar-brand">Sistem Informasi Kuisioner Survey</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
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
          <div class="panel-heading">
            <h3 class="panel-title">Menu Navigasi</h3>
          </div>
          <div class="panel-body">
            <a href="<?php echo base_url('admin'); ?>" class="list-group-item"> Dashboard
            </a>
            <a href="<?php echo base_url('datatabel/datapertanyaan'); ?>" class="list-group-item"> Kelola Pertanyaan
            </a>
            <a href="<?php echo base_url('datatabel/dataresponden'); ?>" class="list-group-item"> Lihat Data Responden
            </a>
			<a href="<?php echo base_url('hasil'); ?>" class="list-group-item">Lihat Hasil CSI
			</a>
            <a href="<?php echo base_url('login/logout'); ?>" class="list-group-item"> Logout
            </a>
          </div>
        </div>
      </div>
    
      <div class="container col-lg-9">
          <div class="page-header">
              <h1 id="navbar">Dashboard Admin</h1>
          </div>
          <h4>Selamat datang, <?php echo $this->session->userdata("nama"); ?>!</h4>
          <p>Anda dapat mengelola data pertanyaan dan melihat data responden melalui menu di sebelah kiri.</p>
          <hr>
          <img class="img-responsive" src="<?php echo base_url('assetsh/gambar/Bg2.jpg'); ?>" >
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url('/assetsh/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assetsh/bootstrap/usebootstrap.js'); ?>"></script>
  </body>
</html>