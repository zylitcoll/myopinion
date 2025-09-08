<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin | MyOpinion</title>
    <link href="<?php echo base_url('assetsh/gambar/Bg3.png'); ?>" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }

        .sidebar {
            background-color: #2c3e50;
            color: white;
            min-height: 100vh;
            padding-top: 2rem;
        }

        .sidebar .nav-link {
            color: #bdc3c7;
            padding: 1rem 1.5rem;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: white;
            background-color: #34495e;
            border-left: 4px solid #4e73df;
        }

        .content {
            padding: 2rem;
        }

        .card-dashboard {
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-dashboard:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column p-3">
            <h4 class="text-center text-white mb-4">MyOpinion Admin</h4>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url('admin'); ?>" class="nav-link">
                        <i class="fas fa-home me-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('datatabel/datapertanyaan'); ?>" class="nav-link">
                        <i class="fas fa-question-circle me-2"></i> Kelola Pertanyaan
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('datatabel/dataresponden'); ?>" class="nav-link">
                        <i class="fas fa-users me-2"></i> Lihat Responden
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('hasil'); ?>" class="nav-link">
                        <i class="fas fa-chart-line me-2"></i> Lihat Hasil CSI
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('login/logout'); ?>" class="nav-link">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <div class="content flex-grow-1">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="fw-bold text-primary">Dashboard Admin</h1>
                <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-outline-danger">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </a>
            </div>
            
            <p class="lead">Selamat datang, <?php echo $this->session->userdata("nama"); ?>!</p>
            <p class="text-muted">Anda dapat mengelola data pertanyaan dan melihat data responden melalui menu di sebelah kiri.</p>
            <hr>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card card-dashboard text-center p-4">
                        <i class="fas fa-question-circle fa-3x text-primary mb-3"></i>
                        <h5>Total Pertanyaan</h5>
                        <h2 class="fw-bold"><?php echo $total_pertanyaan; ?></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-dashboard text-center p-4">
                        <i class="fas fa-users fa-3x text-success mb-3"></i>
                        <h5>Total Responden</h5>
                        <h2 class="fw-bold"><?php echo $total_responden; ?></h2>
                    </div>
                </div>
            </div>

            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>