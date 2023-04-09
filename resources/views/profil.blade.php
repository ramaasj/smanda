@extends('layouts.mainlayout')

@section('title', 'Profil')

@section('style')
<link href="assets/css/style_profil.css" rel="stylesheet">
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

    <section id="sejarah" class="features">
      <div class="container">

        <div class="row">
          <div class="section-title" data-aos="fade-in">
            <h2>Sejarah Singkat</h2>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>1986 - 1987</h4>
                  <p>Awal Mula</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>1987 - 1996</h4>
                  <p>Peningkatan Drastis</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>1996 - 2002</h4>
                  <p>Penambahan Fasilitas</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>2003 - 2019</h4>
                  <p>Perpindahan Lokasi</p>
                </a>
              </li>
            </ul>
          </div>
          <div id="tab-wrapper" class="col-lg-7 ml-auto rounded border border-light" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <p>SMA Negeri 2 Sidoarjo didirikan berdasarkan keputusan Menteri Pendidikan dan Kebudayaan Nomer 0887/O/1986. Dimulai pada tahun ajaran 1986 – 1987 bertempat di SMA Negeri 1 Sidoarjo, SMA Negeri 2 mulai menerima murid baru sebanyak 120 siswa yang terbagi dalam  3 kelas belajar. Sebagai pelaksana Kepala sekolahnya adalah Kepala SMA Negeri 1 Sidoarjo, yaitu Bapak Moch. Agil BA.</p>
                  <p>Selama satu tahun ajaran berlangsung, kegiatan belajar mengajar masih dibimbing oleh sebagaian besar guru guru SMA Negeri 1 Sidoarjo. Guru SMA Negeri 2 Sidoarjo saat itu baru berjumlah 5 orang.</p>
                  <p>Dengan telah selesainya pembangunan gedung SMA Negeri 2 di desa Sidokare, maka pada tanggal 16 Juli 1987 SMA Negeri 2 pindah menempati gedung baru. Tanggal 16 Juli kini diperingati sebagai tanggal berdirinya SMA Negeri 2 Sidoarjo.</p>
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <p>Pada tahun pelajaran 1987 – 1988  Kepala Sekolah diserahterimakan dari Bapak Moch Agil BA kepada Bapak Achmad Soemardjo BA. Beliau sebelumnya adalah Kepala SMA Negeri Krian. Jumlah rombongan belajar bertambah menjadi 6 yang terdiri atas 3 kelas I dan 3 kelas II. Mengingat masih terbatasnya ruang belajar maka dengan terpaksa kelas I masuk sore hari. Guru guru pengajar pun mulai bertambah. Tambahan itu berasal dari mutasi dan pengangkatan baru  Jumlah tenaga administrasi baru ada 2 orang dan itupun belum pegawai negeri.</p>
                  <p>Pada tahun 1992 – 1993 penerimaan murid baru ditingkatkan jumlah menjadi 200 siswa yang terbagi menjadi 5 kelas. Hal ini diiringi dengan pengembangan sarana berupa tambahan ruang kelas, ruang laboratorium IPA, ruang BP dan musholla. Jumlah rombongan belajar sampai dengan saat ini masih tetap 15 yang terbagi menjadi 3 kelas I, 3 kelas II dan 3 kelas III.</p>
                  <p>Pada tangal 1 Juli 1996 Bapak Achmad Soemardjo pensiun. Untuk mengisi kekosongan Kepala Sekolah maka ditunjuk Kepala SMA Negeri 4, Ibu Anik Kadarwati, sebagai pelaksana tugas Kepala SMA Negeri 2. Dan pada tanggal 10 Oktober 1996 serah terima Kepala SMA Negeri 2 dilaksanakan antara Bapak Achmad Soemardjo dengan penggantinya Bapak Sutomo Mulyo BA.</p>
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <p>Selama kepemimpinan Bapak Sutomo pengembangan sarana prasarana sekolah terus dilakukan antara lain penambahan ruang kelas,pembangunan lapangan basket dan tenis, parkir sepeda siswa.</p>
                  <p>Pada bulan Mei 2002 Bapak Sutomo pensiun sebagai Kepala SMA Negeri 2 dan sebagai pengantinya ditunjuk Drs Subagyo  Kepala SMA Negeri 4  sebagai Pelaksana tugas. Baru pada tanggal 1 Juli 2002 Kepala SMA 2 definitif ditunjuk. Beliau adalah Drs Tito Tanggul Maruto yang sebelumnya sebagai Kepala SMA Negeri Taman.</p>
                  <p>Pada masa kepemimpinan Bapak Tito, SMA Negeri 2 Sidoarjo mendapatkan bantuan berupa blok grant imbal swadaya dan blok  grant  BOMM. Blok grant BIS digunakan untuk membangun 1 ruang kelas sedangkan bantuan BOMM diarahkan untuk peningkatan kualitas guru dalam melaksanakan KBM. Beberapa sarana prasarana juga ditambah antara lain adanya ruang laboratorium komputer, ruang multimedia dan penambahan laboratorium biologi.</p>
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <p>Ketika bulan Agustus 2003 Bapak Tito T Maruto purna tugas ditunjuk sebagai pelaksana tugas Kepala SMA Negeri 2 adalah Ibu Endang Oentari, Kepala SMA Negeri 3 Sidoarjo. Tanggal 1 Maret 2004 Kepala SMA Negeri 2 yang ke empat melakukan serah terima dengan PLT Kepala sekolah yang lama. Beliau adalah Ibu Dra Titik Sunarni MPd  yang sebelumnya Kepala SMA Negeri  Taman.</p>
                  <p>Karena lokasi sering terjadi banjir dan sangat mengganggu kegiatan belajar mengajar maka tanggal 2 Januari 2011 SMAN 2 Sidoarjo pindah  lokasi di Jalan Lingkar Barat Gading Fajar 2 Sidoarjo sampai sekarang.</p>
                  <p>Perkembangan sarana prasarana makin meningkat, prestasi belajar siswa  juga semakin meningkat. Pada tgl 14 Januari 2019 SMAN 2 Sidorjo dipimpin oleh kepala sekolah baru yaitu  Drs.H.F.A. Nurseno,M.Pd dari SMA Negeri 10 Surabaya.</p>
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

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

      </div>
    </section><!-- End Steps Section -->

    <section id="kepala-sekolah" class="features">
      <div class="container">

        <div class="row">
          <div class="section-title" data-aos="fade-in">
            <h2>Biografi Kepala Sekolah</h2>
          </div>

          <div class="d-flex justify-content-center">
            <img class="img-kepsek" src="/assets/img/pak-digdo.jpg" alt="Bapak Digdo Santoso">
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
        
        <div class="row">

          <div class="section-title" data-aos="fade-in">
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
    </div>
    </section><!-- End F.A.Q Section -->

</main><!-- End #main -->
@endsection