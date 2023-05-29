@extends('layouts.adminlayout')

@section('title', 'Home')

@section('style')
<link href="{{ asset('assets/css/style_adminhome.css') }}" rel="stylesheet">
@endsection



@section('content')
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

        <a href="/adminHome/updateGreet/{{$greet->id}}/edit">
          <div class="edit-button d-flex justify-content-center">
            <div class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">EDIT</div>
          </div>
        </a>
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
          <a href=" /adminHome/updatePoints/{{$points->id}}/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
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
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-pink">
            <div class="pie animate" style="--p:{{$persentase->percentage}};--c:#1677B4"> {{$persentase->percentage}}%</div>
            <h4 class="title" style="font-family: Montserrat;">{{$persentase->year}}</h4>
            <a href="/adminHome/updatepersentase/{{$persentase->id}}/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
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
                <div class="fungsi-pendidik">
                  <a href="/adminProfil/updatependidik/contoh/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                  <form action="/adminProfil/deletependidik/contoh" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="edit-button d-flex justify-content-center">
        <a href="/adminProfil/addpendidik" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">TAMBAH</a>
      </div>
      <div id="wakepsek_home" class="row">
        <div id="wakil" class="col-xl-3 col-sm" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="{{asset('assets/img/1.jpg') }}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>paman</h4>
                <span>Kepala Sekolah</span>
                <div class="fungsi-pendidik">
                  <a href="/adminProfil/updatependidik/contoh/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                  <form action="/adminProfil/deletependidik/contoh" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="edit-button d-flex justify-content-center">
          <a href="/adminProfil/addpendidik" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">TAMBAH</a>
        </div>





      </div>
  </section>

</main><!-- End #main -->
@endsection