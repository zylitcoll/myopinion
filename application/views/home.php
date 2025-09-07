<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Beranda</title>

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
                    <a class="nav-link list_nav" href="<?= base_url(); ?>admin">Masuk</a>
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
              <!-- untuk home -->
              <section id="home">
                <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" />
                <div class="kolom">
                  <p class="deskripsi">Dengan memberikan masukan anda, kita bisa mendapatkan pandangan yang lebih luas dan memahami persepsi orang-orang terhadap suatu masalah,
                    masukan anda berperan penting dalam perencanaan dan pengembangan, membantu untuk menghasilkan inovasi yang lebih baik dan memenuhi kebutuhan masyarakat.</p>
                  </p>
                  <p>ayo berikan masukan mu #dirumahaja</p>
                  <h2>Tetap Sehat, Tetap Semangat</h2>
                  <p>Dengan meberikan masukan agar kami menjadi lebih baik lagi.</p>
                  <p><a href="<?= base_url(); ?>/input" class="tbl-pink">Mulai Disini</a></p>
                </div>
              </section>
              <section id="partners">
                <div class="tengah">
                  <div class="kolom">
                    <p class="deskripsi">Info</p>
                    <div class="losg">
                      <h2><img src="<?= base_url(); ?>set/img/bps.webp" />BPS</h2>
                    </div>
                    <p>Badan Pusat Statistik adalah Lembaga Pemerintah Non Kementerian yang bertanggung jawab langsung kepada Presiden. Sebelumnya,
                      BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat Statistik.</p>
                  </div>

                  <div class="partner-list">
                    <div class="kartu-partner lmas">
                      <img src="<?= base_url(); ?>set/img/univ.png" />
                    </div>
                    <div class="kartu-partner lmas">
                      <img src="<?= base_url(); ?>set/img/fak.jpeg" />
                    </div>
                    <div class="kartu-partner lmas">
                      <img src="<?= base_url(); ?>set/img/bps.webp" />
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
    </main>
    <footer>
      <div id="contact">
        <div class="wrapper">
          <div class="footer">
            <div class="footer-section">
              <h3>m2803y.</h3>
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