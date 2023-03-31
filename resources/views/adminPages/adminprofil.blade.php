@extends('layouts.adminlayout')

@section('title', 'Profil')

@section('style')
<link href="assets/css/style_adminprofil.css" rel="stylesheet">
@endsection

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Profil Sekolah</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/profil">Profil</a></li>
        </ol>
      </div>

    </div>
  </section><!-- Breadcrumbs Section -->


  <!-- ======= Steps Section ======= -->
  <section id="visi-misi" class="steps section-bg">
    <div class="container">

      <div class="row">

        <div class="col-sm" data-aos="fade-right">
          <div class="content-item">
            <div class="section-title">
              <h3>Moto Kami</h3>
            </div>

            <div class="paragraph">
              @foreach ($listMoto as $moto)
              <p><i class="bi bi-airplane"></i> {{$moto->moto_points}}</p>
              @endforeach
            </div>

            <div class="edit-button d-flex justify-content-center">
                <div class="btn btn-success btn-l" data-aos="fade-up"data-aos-delay="300">ADD</div>
            </div>
          </div>

          <div class="content-item">
            <div class="section-title">
              <h3>Visi</h3>
            </div>

            <div class="paragraph">
              @foreach ($listVisi as $visi)
              <p><i class="bi bi-search"></i> {{$visi->visi_points}} </p>
              @endforeach
            </div>

            <div class="edit-button d-flex justify-content-center">
              <div class="btn btn-success btn-l" data-aos="fade-up"data-aos-delay="300">ADD</div>
            </div>
          </div>
        </div>

        <div class="col-sm" data-aos="fade-left">
          <div class="section-title">
            <h3>Misi</h3>
          </div>

          <ul id="mission" class="list-unstyled">
            @foreach ($listMisi as $misi)
            <li class="d-flex py-1">
              <i class="bi bi-bullseye pe-2 align-selft-start"></i>
              {{$misi->misi_points}}
            </li>
            @endforeach
          </ul>

          <div class="edit-button d-flex justify-content-center">
            <div class="btn btn-success btn-l" data-aos="fade-up"data-aos-delay="300">ADD</div>
          </div>
        </div>

      </div>



    </div>
  </section><!-- End Steps Section -->

  <section id="kepala-sekolah" class="features">
    <div class="container">

      <div class="row">
        <div class="section-title" data-aos="fade-in">
          <h2>Biografi Kepala Sekolah</h2>
        </div>

        <table class="table table-striped table-hover" data-aos="fade-up">
          <tbody>
            <tr>
              <td>Nama</td>
              <td>Drs. Digdo Santoso, M.Pd</td>
            </tr>
            <tr>
              <td>NIP</td>
              <td>19640109 1990003 1 005</td>
            </tr>
            <tr>
              <td>Pangkat / Gol. Ruang</td>
              <td>Pembina Utama Muda / IV C</td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td>S2 Teknologi Pembelajaran</td>
            </tr>
            <tr>
              <td>Masa Kerja</td>
              <td>32 Tahun</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="edit-button d-flex justify-content-center">
        <div class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">EDIT</div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Team Section ======= -->
  <section id="pendidik" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-in">
        <h2>Pendidik</h2>
      </div>

      <div class="row">

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Drs. Digdo Santoso, M.Pd</h4>
                <span>Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="edit-button d-flex justify-content-center">
        <div class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">EDIT</div>
      </div>

      <div class="row">

        <div id="title-tenkep" class="section-title" data-aos="fade-in">
          <h2>Tenaga Kependidikan</h2>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-4" data-aos="fade-in" data-aos-delay="100">
          <div class="member">
            <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>TBD</h4>
                <span>Wakil Kepala Sekolah</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="edit-button d-flex justify-content-center">
        <div class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">EDIT</div>
      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="organisasi-sekolah" class="faq section-bg">
    <div class="container">
      @foreach ($listStruktur as $struktur)
      <div class="section-title">
        <h2 style="font-weight: bolder;">STRUKTUR ORGANISASI SEKOLAH</h2>
        <p>Struktur Organisasi Sekolah Tahun Pelajaran <span style="font-weight: bolder;">{{$struktur->desc}}</span>
        </p>
      </div>
      <img style="max-width: 100%; 
              display:block; 
              height: auto;" class="img-struktur" src="{{asset($struktur->foto_org_sekolah) }}" alt="">
      <div class="edit-button d-flex justify-content-center">
        <a href="/updatestruktur/{{ $struktur->id }}/edit" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="300">EDIT</a>
      </div>
      @endforeach
    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="komite-sekolah" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2 style="font-weight: bolder;">KOMITE SEKOLAH</h2>
        <p>Daftar Pengurus Komite Sekolah Periode <span style="font-weight: bolder;">20xx</span>
          <span style="font-weight: bolder;">-</span>
          <span style="font-weight: bolder;">20xx</span>
        </p>
      </div>
      <div class="tablesiswa">
        <a href="/addkomite"><button type="button" class="btn btn-success">Tambah +</button></a>
        <table class="table ">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jabatan</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listKomite as $index => $komite)
            <tr>
              <th> {{$index + 1}} </th>
              <td> {{$komite->nama}} </td>
              <td> {{$komite->jabatan}} </td>
              <td>
                <div class="fungsi">
                  <a href="/updatekomite/{{$komite->id}}"><button type="submit" class="btn btn-primary">Edit</button></a>
                  <form action="/deletekomite/{{$komite->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section><!-- End F.A.Q Section -->

</main><!-- End #main -->
@endsection