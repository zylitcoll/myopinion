<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Sistem Informasi Kuisioner Survey</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #c4d4e2);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5rem 0;
        }

        .card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 0.75rem;
            padding: 0.75rem 1.25rem;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            border-radius: 0.75rem;
            font-weight: 600;
            padding: 0.75rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #3b5cb8;
            border-color: #3b5cb8;
            transform: translateY(-2px);
        }

        .login-title {
            color: #333;
            font-weight: 600;
        }
        
        .footer-section {
            background-color: #333;
            color: #eee;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url(); ?>/">MyOpinion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#partners">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-light ms-lg-3" href="<?= base_url(); ?>login">Login Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="main-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card p-4 p-md-5">
                        <div class="text-center mb-4">
                            <a href="<?php echo base_url('home'); ?>" class="text-decoration-none">
                                <h2 class="login-title mb-1">MyOpinion</h2>
                            </a>
                            <p class="text-muted">Admin Login</p>
                        </div>

                        <?php if ($this->session->flashdata('error')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $this->session->flashdata('error'); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                            <div class="mb-3">
                                <label for="nama_user" class="form-label">Username</label>
                                <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Masukkan Username" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer id="contact" class="footer-section py-4">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <h5>m2803y.</h5>
                    <p class="text-white-50">Belajar adalah kunci untuk mengasah kemampuan kita dan menjelma menjadi developer yang lebih baik setiap harinya."</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <h5>About</h5>
                    <p class="text-white-50">MyOpinion adalah sebuah platform web survey yang memungkinkan pengguna untuk mengumpulkan opini dan pendapat dari responden melalui kuesioner online.</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <h5>Contact</h5>
                    <ul class="list-unstyled text-white-50">
                        <li><i class="fas fa-map-marker-alt me-2"></i>JL Takengon - Angkup</li>
                        <li><i class="fas fa-inbox me-2"></i>Kode Pos: 57365</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                    <h5>Social</h5>
                    <ul class="list-unstyled text-white-50">
                        <li><i class="fab fa-instagram me-2"></i>@m28.03y</li>
                        <li><i class="fab fa-youtube me-2"></i>Tady Tv</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center text-white-50 pt-3 border-top border-secondary mt-3">
            <p class="mb-0">&copy; 2021. <b>Muhtady.</b> All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>