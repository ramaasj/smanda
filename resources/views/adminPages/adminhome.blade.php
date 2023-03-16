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
            <img src="assets/img/greet.jpeg" class="img-fluid rounded border border-dark" alt="SMAN 2 SIDOARJO">
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

</main><!-- End #main -->
@endsection