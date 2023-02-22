@extends('layouts.mainlayout')

@section('title', 'Home')

@section('style')
<link href="assets/css/style_index.css" rel="stylesheet">
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <video id="VideoPlayer" class="d-flex align-items-center" autoplay loop muted>
      <source src="assets/vid/smanda_res.mp4" type="video/mp4">
    </video>
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>SMA Negeri 2 Sidoarjo</h1>
      <h2>Tunjukkan Karyamu, Raih Prestasimu</h2>
      <a href="#about" class="btn-get-started scrollto">Lebih Lanjut..</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <a href="https://www.dbl.id/r/1360/dua-sosok-imut-fotografer-smanda-force" target="_blank" rel="noopener noreferrer"><img src="assets/img/greet.jpeg" class="img-fluid rounded border border-dark" alt="SMAN 2 SIDOARJO"></a>
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Menunggu Kedatanganmu!</h3>
            <p data-aos="fade-up">
              Kami sangat menanti kedatanganmu di SMA Negeri 2 Sidoarjo, tunggu apalagi? Ayo bergabung menjadi bagian dari SMANDA!
            </p>
            <div class="icon-box" data-aos="fade-up">
              <i class="bi bi-hourglass-split"></i>
              <h4>37 Tahun</h4>
              <p>SMA Negeri 2 Sidoarjo didirikan pada tahun 1986, tidak terasa sudah 37 tahun berlalu.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-person-bounding-box"></i>
              <h4>1289 Siswa Aktif</h4>
              <p>Terdiri dari 1289 siswa aktif yang tersebar dalam Kelas X-XI-XII.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-person-badge"></i>
              <h4>64 Tenaga Kependidikan</h4>
              <p>Pendidikan adalah hal yang terpenting, oleh karena itu kami mempunyai Tenaga Kependidikan yang luar biasa.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps">
      <div class="container">

        <div class="row no-gutters">

          <div class=" col-sm content-item" data-aos="fade-in">
            <span>01</span>
            <h4>Terakreditasi A</h4>
            <p>TBD</p>
          </div>

          <div class=" col-sm content-item" data-aos="fade-in" data-aos-delay="100">
            <span>02</span>
            <h4>Memfasilitasi</h4>
            <p>TBD</p>
          </div>

          <div class="w-100"></div>

          <div class=" col-sm content-item" data-aos="fade-in" data-aos-delay="200">
            <span>03</span>
            <h4>Mengayomi</h4>
            <p>TBD</p>
          </div>

          <div class=" col-sm content-item" data-aos="fade-in" data-aos-delay="300">
            <span>04</span>
            <h4>Adiwiyata</h4>
            <p>TBD</p>
          </div>

          

        </div>

      </div>
    </section>
    <!-- End Steps Section -->

    

    <!-- ======= Alumni Section ====== -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Diterima PTN</h2>
                <p>Persentase beberapa Tahun terakhir Peserta Didik yang diterima oleh
                    <span style="font-weight: bold;">Perguruan Tinggi Negeri (PTN)</span>
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-pink">
                        <div class="pie animate" style="--p:20;--c:#1677B4"> 20%</div>
                        <h4 class="title" style="font-family: Montserrat;"><a href="">2020</a></h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="pie animate" style="--p:40;--c:#1677B4"> 40%</div>
                        <h4 class="title" style="font-family: Montserrat;"><a href="">2021</a></h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="pie animate" style="--p:60;--c:#1677B4"> 60%</div>
                        <h4 class="title" style="font-family: Montserrat;"><a href="">2022</a></h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="icon-box icon-box-blue">
                        <div class="pie animate" style="--p:80;--c:#1677B4"> 80%</div>
                        <h4 class="title" style="font-family: Montserrat;"><a href="">2023</a></h4>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Alumni Section -->
    


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in">
          <h2>Kepala dan Wakil Kepala Sekolah</h2>
          <p>Tokoh-tokoh yang memimpin SMA Negeri 2 Sidoarjo pada saat ini.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-sm"></div>

          <div class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Drs. Digdo Santoso, M.Pd</h4>
                  <span>Kepala Sekolah</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>TBD</h4>
                  <span>Wakil Kepala Sekolah</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm"></div>

          

        </div>

        <div class="section-title" data-aos="fade-in" data-aos-delay="300">
          <a class="btn btn-primary btn-sm" href="#" role="button">Biografi Kepala Sekolah</a>
        </div>
        

      </div>
    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kunjungi Kami</h2>
          <p>Terletak di dekat Pusat Kota Sidoarjo dan Stasiun Kereta Api, SMA Negeri 2 Sidoarjo mudah untuk diakses.</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Lingkar Barat Gading Fajar 2, Sidoarjo</p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>smanda_sda@yahoo.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>(031) 8961119</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?width=500&amp;height=300&amp;hl=en&amp;q=SMA Negeri 2 Sidoarjo&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
          </div>

        </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection