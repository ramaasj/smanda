@extends('layouts.mainlayout')

@section('title', 'Siswa Aktif')

@section('style')
<link href="{{asset('/assets/css/style_siswaaktif.css')}}" rel="stylesheet">
@endsection

@section('content')
<main id="main">
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Siswa</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li><a href="/siswa">Daftar Siswa Aktif</a></li>
          <li><a href="/ekstrakurikuler">Ekstrakurikuler</a></li>
        </ol>
      </div>
    </div>
  </section>
  <section id="siswa" class="faq section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Daftar Siswa</h2>
        <p>Daftar Siswa Tahun Ajaran 2023/2024</p>
      </div>
      <div class="tablesiswa">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Kelas</th>
              <th scope="col">L</th>
              <th scope="col">P</th>
              <th scope="col">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listSiswa as $siswa)
            <tr>
              <th> {{$siswa->class}} </th>
              <td> {{$siswa->laki}} </td>
              <td> {{$siswa->perempuan}} </td>
              <td> {{$siswa->jumlah}} </td>
            </tr>
            @endforeach
            <tr>
              <th>TOTAL</th>
              <td> {{$totalLaki}} </td>
              <td> {{$totalPerempuan}} </td>
              <td> {{$totalJumlah}} </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>
@endsection