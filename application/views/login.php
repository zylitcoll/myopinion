<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Sistem Informasi Kuisioner Survey</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/set/css/style.css">
    <link href="<?= base_url(); ?>/set/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url(); ?>/set/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /* CSS tambahan untuk memastikan footer menempel di bawah */
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto; /* Membuat konten utama mengisi ruang yang tersedia */
        }
        footer {
            flex-shrink: 0; /* Mencegah footer menyusut */
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url('home') ?>">MyOpinion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('input') ?>">Isi Kuisioner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('hasil') ?>">Lihat Hasil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="py-5" style="margin-top: 70px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="card o-hidden border-0 shadow-lg">
                            <div class="card-body p-0">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                                    </div>

                                    <?php if ($this->session->flashdata('error')) : ?>
                                        <div class="alert alert-danger">
                                            <?php echo $this->session->flashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <form class="user" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="nama_user" placeholder="Masukkan Username..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">MyOpinion Survey</h5>
                    <p>
                        Platform untuk mengumpulkan dan menganalisis opini dengan mudah dan efisien.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="<?php echo base_url('home') ?>" class="text-dark">Home</a></li>
                        <li><a href="<?php echo base_url('input') ?>" class="text-dark">Isi Kuisioner</a></li>
                        <li><a href="<?php echo base_url('login') ?>" class="text-dark">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 MyOpinion. All Rights Reserved.
        </div>
    </footer>

    <script src="<?= base_url(); ?>/set/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/set/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/set/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/set/js/sb-admin-2.min.js"></script>

</body>

</html>