<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Berhasil | MyOpinion</title>
    <link href="<?= base_url(); ?>assetsh/gambar/Bg3.png" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .jumbotron {
            background-color: white;
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .btn-info {
            background-color: #4e73df;
            border-color: #4e73df;
            transition: all 0.3s ease;
        }

        .btn-info:hover {
            background-color: #3b5cb8;
            border-color: #3b5cb8;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="jumbotron">
                    <h1 class="display-4 fw-bold text-success"><i class="fas fa-check-circle me-2"></i>Terima Kasih!</h1>
                    <p class="lead">Jawaban Anda berhasil terkirim. Partisipasi Anda sangat berarti bagi kami.</p>
                    <hr class="my-4">
                    <a href="<?= base_url(); ?>" class="btn btn-info btn-lg rounded-pill">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>
</html>