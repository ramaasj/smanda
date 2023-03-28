@extends('layouts.adminlayout')

@section('title', 'Dashboard')

@section('style')
<link href="assets/css/style_adminhome.css" rel="stylesheet">
@endsection


@section('content')
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

          
          <div class="edit-button d-flex justify-content-center">
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
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

        <div class="edit-button d-flex justify-content-center">
          <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
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

            <div class="edit-button d-flex justify-content-center">
              <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
            </div>

        </div>
    </section>
    <!-- End Alumni Section -->

</main><!-- End #main -->
@endsection