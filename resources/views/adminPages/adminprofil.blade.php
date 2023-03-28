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
                <p><i class="bi bi-airplane"></i> Maju Bersama, Hebat Semua.</p>
                <p><i class="bi bi-airplane"></i> Tunjukkan Karyamu, Raih Prestasimu.</p>
              </div>
            </div>

            <div class="content-item">
              <div class="section-title">
                <h3>Visi</h3>
              </div>
              
              <div class="paragraph">
                <p><i class="bi bi-search"></i> Unggul dalam mutu, mulia dalam perilaku serta berbudaya lingkungan terpadu</p>
              </div>
            </div>
          </div>

          <div class="col-sm" data-aos="fade-left">
            <div class="section-title">
              <h3>Misi</h3>
            </div>

            <ul id="mission" class="list-unstyled">
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Meningkatkan keimanan dan ketaqwaan kepada Tuhan yang Maha Esa sehingga terbentuk warga sekolah yang berakhlakul karimah melalui do’a sebelum kegiatan belajar mengajar, kegiatan istighosah setiap hari jumat, peringatan hari besar agama dan bersoa setelah kegiatan belajar mengajar
              </li>
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Membiasakan perilaku jujur melalui kegiatan pembelajaran, melaporkan semua barang temuan ke TU
              </li>
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Membiasakan perilaku disiplin melalui finger print, berpakaian seragam lengkap bagi semua warga sekolah sesuai dengan tata tertib yang berlaku
              </li>
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Membiasakan kepedulian pada sesama melalui sumbangan sukarela untuk siswa kurang mampu, infaq
              </li>
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Membudayakan kepedulian sosial pada warga sekolah yang mengalami musibah melalui sumbangan insidental
              </li>
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Membudayakan terhadap kepedulian lingkungan hidup yang ada disekitarnya
              </li>
              <li class="d-flex py-1">
                <i class="bi bi-bullseye pe-2 align-selft-start"></i>
                Membiasakan memilah dan membuang sampah pada tempatnya, program penghijauan dan lomba kebersihan kelas 3 bulan sekali
              </li>
            </ul>
          </div>

        </div>

        <div class="edit-button d-flex justify-content-center">
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
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
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
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
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
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
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
        </div>

      </div>
    </section><!-- End Team Section -->
    
    <!-- ======= F.A.Q Section ======= -->
    <section id="organisasi-sekolah" class="faq section-bg">
      <div class="container">

          <div class="section-title">
              <h2 style="font-weight: bolder;">STRUKTUR ORGANISASI SEKOLAH</h2>
              <p>Struktur Organisasi Sekolah Tahun Pelajaran <span style="font-weight: bolder;">2020</span>
                  <span style="font-weight: bolder;">-</span>
                  <span style="font-weight: bolder;">2021</span></p>
          </div>
          <figure>
              <img style="max-width: 100%; 
              display:block; 
              height: auto;" class="img-struktur"
                  src="/assets/img/STRUKTUR-ORGANISASI-SEKOLAH-2020-2021-1536x1004.jpg" alt="">
              <figcaption>Struktur Organisasi Sekolah 2020-2021</figcaption>
          </figure>

          <div class="edit-button d-flex justify-content-center">
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
          </div>

      </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="komite-sekolah" class="faq section-bg">
    <div class="container">

        <div class="section-title">
            <h2 style="font-weight: bolder;">KOMITE SEKOLAH</h2>
            <p>Daftar Pengurus Komite Sekolah Periode <span style="font-weight: bolder;">20xx</span>
                <span style="font-weight: bolder;">-</span>
                <span style="font-weight: bolder;">20xx</span></p>
        </div>
        <div class="tablesiswa">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Ketika Kesulitan Selesai, Kesulitan Lainnya akan datang</td>
                        <td>Ketua</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="edit-button d-flex justify-content-center">
            <div class="btn btn-primary btn-lg" data-aos="fade-up"data-aos-delay="300">EDIT</div>
        </div>
    </div>
    </section><!-- End F.A.Q Section -->

</main><!-- End #main -->
@endsection