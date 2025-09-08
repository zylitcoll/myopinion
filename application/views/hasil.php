<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kuesioner dan CSI</title>
    <link rel="stylesheet" href="<?php echo base_url('set/css/sb-admin-2.min.css') ?>">
    <style>
        body { padding: 20px; }
        .csi-container {
            margin-top: 30px;
            padding: 20px;
            background-color: #f8f9fc;
            border-left: 5px solid #4e73df;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Analisis Kuesioner</h1>
        <hr>

        <h2>Rata-Rata Skor Kepuasan per Pertanyaan (MSS)</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Pertanyaan</th>
                        <th>Skor Rata-rata</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pertanyaan as $p): ?>
                    <tr>
                        <td><?php echo $p['id']; ?></td>
                        <td><?php echo $p['pertanyaan']; ?></td>
                        <td>
                            <?php
                                echo isset($mss[$p['id']]) ? number_format($mss[$p['id']], 2) : 'N/A';
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="csi-container">
            <h2>Customer Satisfaction Index (CSI)</h2>
            <h3 class="font-weight-bold text-primary"><?php echo number_format($csi, 2); ?>%</h3>
            <?php
            if ($csi >= 81) {
                echo "<p class=\"lead\"><strong>Kategori: Sangat Puas</strong></p>";
            } elseif ($csi >= 66) {
                echo "<p class=\"lead\"><strong>Kategori: Puas</strong></p>";
            } elseif ($csi >= 51) {
                echo "<p class=\"lead\"><strong>Kategori: Cukup Puas</strong></p>";
            } elseif ($csi >= 35) {
                echo "<p class=\"lead\"><strong>Kategori: Kurang Puas</strong></p>";
            } else {
                echo "<p class=\"lead\"><strong>Kategori: Tidak Puas</strong></p>";
            }
            ?>
        </div>
        <hr>
        <a href="<?php echo base_url('admin'); ?>" class="btn btn-secondary">Kembali ke Dashboard Admin</a>
    </div>
</body>
</html>