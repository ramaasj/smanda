@extends('layouts.mainlayout')

@section('title', 'Home')

@section('style')
<link href="{{asset('assets/css/style_index.css')}}" rel="stylesheet">
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
      @foreach ($listGreet as $greet)
      <div class="row">
        <div class="col-xl-6 col-lg-7" data-aos="fade-right">
          <img src="{{asset($greet->gambar_greet) }}" class="img-fluid rounded border border-dark" alt="SMAN 2 SIDOARJO">
        </div>
        <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
          <h3 data-aos="fade-up">Menunggu Kedatanganmu!</h3>
          <p data-aos="fade-up">
            Kami sangat menanti kedatanganmu di SMA Negeri 2 Sidoarjo, tunggu apalagi? Ayo bergabung menjadi bagian dari SMANDA!
          </p>
          <div class="icon-box" data-aos="fade-up">
            <i class="bi bi-hourglass-split"></i>
            <h4>{{$greet->tahun_greet}}</h4>
            <p>{{$greet->desc_tahun}}</p>
          </div>
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-person-bounding-box"></i>
            <h4>{{$greet->siswa_greet}}</h4>
            <p>{{$greet->desc_siswa}}</p>
          </div>
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-person-badge"></i>
            <h4>{{$greet->pendidik_greet}}</h4>
            <p>{{$greet->desc_pendidik}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section><!-- End About Section -->
  <!-- ======= Steps Section ======= -->
  <section id="steps" class="steps">
    <div class="container">
      <div class="row no-gutters">
        @foreach ($listPoints as $key => $points)
        <div class=" col-sm content-item" data-aos="fade-in">
          <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
          <h4>{{$points->title}}</h4>
          <p>{{$points->desc}}</p>
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="https://lh3.googleusercontent.com/drive-viewer/AFGJ81rB8HWkCLCCQ59i_XDj3juq3aYSiZkdXGXAEs-1BpDCf4g8h1GXVW0zNdL_YkLekBs_DR0d56vAuS64slzi-Q5EDt-o=s1600" class="img-fluid rounded border border-dark" alt="SMAN 2 SIDOARJO">
          </div>
        </div>
        @if (($key + 1) % 2 == 0 && $key + 1 != count($listPoints))
        <div class="w-100"></div>
        @endif
        @endforeach
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
        @foreach ($listPersentase as $persentase)
        <div id=kotak class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-pink">
            <div class="pie animate" style="--p:{{$persentase->percentage}};--c:#1677B4"> {{$persentase->percentage}}%</div>
            <h4 class="title" style="font-family: Montserrat;">{{$persentase->year}}</h4>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Alumni Section -->
  <section id="team" class="team">
    <div class="container">
      <div class="section-title" data-aos="fade-in">
        <h2>Kepala dan Wakil Kepala Sekolah</h2>
        <p>Tokoh-tokoh yang memimpin SMA Negeri 2 Sidoarjo pada saat ini.</p>
      </div>

      <div id="kepsek_home" class="row">
        <div id="kepsek" class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
          <div class="member" style="background:white">
            <img src="{{asset('assets/img/1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>paman</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="wakepsek_home" class="row">
        <div id="wakil" class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="{{asset('assets/img/1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>paman</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="{{asset('assets/img/1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>paman</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="{{asset('assets/img/1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>paman</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="{{asset('assets/img/1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>sdasda</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-title" data-aos="fade-in" data-aos-delay="300">
        <a class="btn btn-primary btn-sm" href="/profil#kepala-sekolah" role="button">Biografi Kepala Sekolah</a>
      </div>
    </div>
  </section>
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