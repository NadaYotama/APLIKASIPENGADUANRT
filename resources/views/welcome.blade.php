<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>APLIKASi PENGADUAN RT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LogoRT.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  @include('includes.landing.stylesheet')


  <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    @include('includes.landing.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Layanan Laporan Masyarakat Berbasis Online</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat , aman dan nyaman.</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('login')}}" class="btn-get-started scrollto">Laporkan!</a>
           
            <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/fotort.JPG" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              <h3>APLIKASI PENGADUAN RT</h3> adalah sistem laporan pengaduan Masyarakat yang dibuat untuk memudahkan Masyrakat untuk memberikan laporan atau informasi kepada pihak petugas RT Kami
            </p>
            <ul>
              <h3>Tujuan APLIKASI PENGADUAN RT</h3>
              <li><i class="ri-check-double-line"></i>Memberikan Informasi atau laporan yang jelas kepada pihak RT supaya bisa ditindak lebih lanjut</li>
              <li><i class="ri-check-double-line"></i>Mempermudah Masyrakat untuk berkomunikasi dengan pihak RT</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              <h4>APLIKASI PENGADUAN RT</h4>merupakan komitmen  kami untuk melayani Masyarakat. Dengan hadirnya sistem pelaporan pengaduan online ini, diharapkan setiap suara Masyrakarat bisa didengar dan ditindaklanjuti oleh pihak RT.
            </p>
            <a href="#services" class="btn-learn-more">Tata cara atau alur pengaduan</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Antrian Online</h2>
        </div>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Aplikasi Pengaduan RT menyediakan layanan antrian online untuk memudahkan masyarakat dalam mengakses layanan RT. Dengan fitur ini, masyarakat dapat mendaftar antrian secara online tanpa harus datang ke kantor RT.
            </p>
            <ul>
              <h3>Manfaat Antrian Online</h3>
              <li><i class="ri-check-double-line"></i>Mengurangi waktu tunggu di kantor RT</li>
              <li><i class="ri-check-double-line"></i>Mempermudah masyarakat dalam mengakses layanan RT</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Dengan adanya layanan antrian online, diharapkan masyarakat dapat lebih mudah dan cepat mendapatkan layanan dari RT. Aplikasi Pengaduan RT berkomitmen untuk terus meningkatkan kualitas layanan kepada masyarakat.
            </p>
            <a href="{{ route('antrian.buat') }}" class="btn-learn-more">Mendaftar Antrian</a>
          </div>

          <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pengajuan Surat</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Aplikasi Pengaduan RT juga menyediakan layanan pengajuan surat untuk memudahkan masyarakat dalam mengurus administrasi. Masyarakat dapat mengajukan surat secara online melalui aplikasi ini.
            </p>
            <ul>
              <h3>Manfaat Pengajuan Surat</h3>
              <li><i class="ri-check-double-line"></i>Mengurangi waktu dan biaya dalam mengurus administrasi</li>
              <li><i class="ri-check-double-line"></i>Mempermudah masyarakat dalam mengakses layanan administrasi RT</li>
            </ul>
             <a href="{{ route('pengajuan-surat.buat') }}" class="btn-learn-more">Pengajuan</a>
          </div>
  <main id="main">
    </section><!-- End About Us Section -->


    <div class="section-title" data-aos="fade-up">
  <h2>Visi dan Misi</h2>
</div>

<div class="row content">
  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
    <p>
      <h3>Visi</h3>
      Meningkatkan kualitas pelayanan masyarakat dengan membangun sistem pengaduan yang efektif, efisien, dan transparan.
    </p>
  </div>
  <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
    <p>
      <h3>Misi</h3>
      <ul>
        <li><i class="ri-check-double-line"></i>Membangun sistem pengaduan yang mudah diakses dan digunakan oleh masyarakat.</li>
        <li><i class="ri-check-double-line"></i>Meningkatkan kualitas pelayanan masyarakat dengan memproses pengaduan secara cepat dan efektif.</li>
        <li><i class="ri-check-double-line"></i>Membangun kerja sama yang efektif dengan pihak-pihak terkait untuk meningkatkan kualitas pelayanan masyarakat.</li>
      </ul>
    </p>
  </div>
</div>


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/fotomasyarakat.jpeg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengguna</strong><br>DAFTAR pengguna APLIKASI PENGADUAN RT</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengaduan</strong> <br> Jumlah pengaduan yg sudah dilaporkan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tuntas</strong> <br> Jumlah laporan yg sudah ditangani</p>
                  </div>
                </div>


              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>TATA CARA</h2>
          <p>Nah ini dia alur pelaporan yang ada website APLIKASI PENGADUAN RT</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class='bx bxs-edit-alt'></i></div>
              <h4 class="title"><a href="">Kirim Laporan</a></h4>
              <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-shuffle"></i></div>
              <h4 class="title"><a href="">Proses Verifikasi</a></h4>
              <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tindak Lanjut</a></h4>
              <p class="description">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class='bx bx-check-shield'></i></div>
              <h4 class="title"><a href="">Selesai</a></h4>
              <p class="description">Laporan pengaduan telah selesai ditindak.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    @include('includes.landing.footer')







  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.landing.javascript')

</body>

</html>
