<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Memanggil file CSS dari Bootstrap -->

    <!-- Memanggil file CSS custom -->
    <link rel="stylesheet" href="<?= base_url(); ?>/set/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/set/js/script.js">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/set/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/set/css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body>

    <body>
        <header>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Nav Item - Charts -->
                        <div class="container">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="<?= base_url(); ?>/">MyOpinion</a>

                                <ul class="navbar-nav ">
                                    <li>
                                        <a class="nav-link list_nav" href="/login">Masuk</a>
                                    </li>
                                    <li>
                                        <a class="nav-link list_nav" href="#contact">About</a>
                                </ul>

                            </div>
                        </div>



                    </nav>
                    <!-- End of Topbar -->

        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="wrapper">
                            <section id="home">

                                <h2 class="card-header">login</h2>



                                <form class="my-5 col-6" action="<?php echo base_url(); ?>Admin/login_validation" method="POST">
                                    <h2><?php
                                        echo '<label class="text-danger">' . $this->session->flashdata("error") . '</label>';
                                        ?></h2>

                                    <div class="mb-3">
                                        <label for="text">Your username</label>
                                        <input type="text" class="form-control " name="nama_user" required="required">
                                        <span class="text-danger"><?php echo form_error("nama_user"); ?></span>
                                        <small id="emailHelp" class="form-text text-muted"></small>

                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <span class="text-danger"><?php echo form_error("password"); ?></span>
                                        <input type="password" name="password" class="form-control " required="required">
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </form>

                                <div class="wrapper">
                                    <!-- untuk home -->
                                    <section id="courses">
                                        <div class="kolom">
                                            <p class="deskripsi">You Will Need This</p>
                                            <h2>Saran dan Masukan</h2>
                                            <p>Saya dapat dihubungi jika Anda membutuhkan bantuan atau saran.</p>
                                            <p>Tidak ada gunanya menunggu keadaan menjadi sempurna. Mulailah dari mana Anda berada, gunakan apa yang Anda miliki, dan bergerak maju dengan semangat. Kesuksesan dimulai dengan tekad untuk mencoba.</p>
                                            <p><a href="mailto:muhtady.ti@gmail.com" class="tbl-biru">Kirim Pesan</a></p>
                                        </div>
                                    </section>

                                </div>
                        </div>
                    </div>
                </div>
        </main>
        <footer>
            <div id="contact">
                <div class="wrapper">
                    <div class="footer">
                        <div class="footer-section">
                            <h3>zynle.</h3>
                            <p>Belajar adalah kunci untuk mengasah kemampuan kita dan menjelma menjadi developer yang lebih baik setiap harinya."
                                "Sikap yang rendah hati dan terus lapar akan pengetahuan adalah fondasi penting dalam perjalanan belajar sebagai seorang developer</p>
                        </div>
                        <div class="footer-section">
                            <h3>About</h3>
                            <p>MyOpinion adalah sebuah platform web survey yang memungkinkan pengguna untuk mengumpulkan opini dan pendapat dari responden melalui kuesioner online. Dengan fitur-fitur dan layanan yang tersedia, pengguna dapat mengumpulkan data dengan mudah dan menganalisis hasil survei untuk mendapatkan wawasan yang berharga.</p>
                        </div>
                        <div class="footer-section">
                            <h3>Contact</h3>
                            <p>JL Takengon - Angkup </p>
                            <p>Kode Pos: 57365</p>
                        </div>
                        <div class="footer-section">
                            <h3>Social</h3>
                            <p><b>Instagram: </b>@m28.03y</p>
                            <p><b>YouTube: </b>Tady Tv</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="copyright">
                <div class="wrapper">
                    &copy; 2021. <b>Muhtady.</b> All Rights Reserved.
                </div>
            </div>
        </footer>

        <!-- Memanggil file JavaScript bundle dari Bootstrap -->
        <script src="<?= base_url(); ?>/set/js/bootstrap.min.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

</html>