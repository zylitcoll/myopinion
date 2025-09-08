<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kuesioner dan CSI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }

        .container {
            max-width: 900px;
        }
        
        .card {
            border-radius: 1rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .csi-box {
            background: linear-gradient(45deg, #4e73df, #2e59d9);
            color: white;
            padding: 3rem;
            border-radius: 1rem;
            text-align: center;
        }

        .csi-box h3 {
            font-size: 3rem;
            font-weight: 700;
        }

        .progress-bar-csi {
            height: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5 fw-bold text-primary">Hasil Analisis Kuesioner</h1>
        
        <div class="card mb-5">
            <div class="card-body csi-box">
                <p class="lead text-white-50 mb-1">Customer Satisfaction Index (CSI)</p>
                <h3 class="mb-3"><?php echo number_format($csi, 2); ?>%</h3>
                <div class="progress mb-2" style="height: 25px;">
                    <div class="progress-bar progress-bar-csi bg-white" role="progressbar" style="width: <?php echo number_format($csi, 2); ?>%;" aria-valuenow="<?php echo number_format($csi, 2); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <?php
                $category = '';
                $badge_class = '';
                if ($csi >= 81) {
                    $category = 'Sangat Puas';
                    $badge_class = 'bg-success';
                } elseif ($csi >= 66) {
                    $category = 'Puas';
                    $badge_class = 'bg-primary';
                } elseif ($csi >= 51) {
                    $category = 'Cukup Puas';
                    $badge_class = 'bg-info';
                } elseif ($csi >= 35) {
                    $category = 'Kurang Puas';
                    $badge_class = 'bg-warning';
                } else {
                    $category = 'Tidak Puas';
                    $badge_class = 'bg-danger';
                }
                ?>
                <span class="badge rounded-pill <?php echo $badge_class; ?> fs-6 mt-3"><?php echo $category; ?></span>
            </div>
        </div>

        <div class="card p-4">
            <h2 class="card-title text-center mb-4">Rata-Rata Skor Kepuasan per Pertanyaan (MSS)</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Skor Rata-rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pertanyaan as $p) : ?>
                            <tr>
                                <td><?php echo $p['id']; ?></td>
                                <td><?php echo $p['pertanyaan']; ?></td>
                                <td class="fw-bold">
                                    <?php echo isset($mss[$p['id']]) ? number_format($mss[$p['id']], 2) : 'N/A'; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo base_url('admin'); ?>" class="btn btn-secondary rounded-pill">Kembali ke Dashboard Admin</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>