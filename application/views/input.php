<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mulai Survey Anda</title>
    <link href="<?= base_url(); ?>assetsh/gambar/Bg3.png" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f4f8;
            min-height: 100vh;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .card-question {
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
        }

        .form-check-label {
            cursor: pointer;
            padding: 1rem;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            margin-bottom: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .form-check-input:checked + .form-check-label {
            background-color: #e2f2ff;
            border-color: #4e73df;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
    </style>
</head>

<body>
    <div class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a href="<?= base_url(); ?>" class="navbar-brand">Formulir Kuesioner</a>
        </div>
    </div>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Formulir Kuesioner Survey</h1>
            <p class="text-muted">Isi formulir ini dengan jujur untuk membantu kami meningkatkan layanan.</p>
        </div>

        <form action="<?= base_url(); ?>input/form_validation" method="post" class="needs-validation" novalidate>
            <div class="card p-4 mb-4">
                <div class="mb-3">
                    <label for="responden" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control" name="responden" id="responden" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>

            <?php foreach ($fetch_data2->result() as $row) : ?>
                <div class="card card-question p-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><?php echo $row->pertanyaan; ?></h5>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p<?= $row->id; ?>" id="p<?= $row->id; ?>_isi1" value="<?= $row->isi1; ?>" required>
                                <label class="form-check-label d-block" for="p<?= $row->id; ?>_isi1">
                                    <?= $row->isi1; ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p<?= $row->id; ?>" id="p<?= $row->id; ?>_isi2" value="<?= $row->isi2; ?>" required>
                                <label class="form-check-label d-block" for="p<?= $row->id; ?>_isi2">
                                    <?= $row->isi2; ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p<?= $row->id; ?>" id="p<?= $row->id; ?>_isi3" value="<?= $row->isi3; ?>" required>
                                <label class="form-check-label d-block" for="p<?= $row->id; ?>_isi3">
                                    <?= $row->isi3; ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="p<?= $row->id; ?>" id="p<?= $row->id; ?>_isi4" value="<?= $row->isi4; ?>" required>
                                <label class="form-check-label d-block" for="p<?= $row->id; ?>_isi4">
                                    <?= $row->isi4; ?>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg rounded-pill mt-3">Simpan Jawaban</button>
            </div>
            
            <a href="<?= base_url(); ?>" class="btn btn-outline-secondary w-100 mt-3 rounded-pill">Kembali ke Beranda</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validasi form Bootstrap
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>