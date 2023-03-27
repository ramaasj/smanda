@extends('layouts.adminlayout')

@section('title', 'Admin Siswa Aktif')

@section('style')
    <link href="assets/css/style_adminsiswaaktif.css" rel="stylesheet">
@endsection


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Siswa</h2>
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/siswa">Daftar Siswa Aktif</a></li>
                        <li><a href="/ekstra">Ekstrakurikuler</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="siswa" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Daftar Siswa</h2>
                    <p>Daftar siswa tahun ajaran 2022/2023</p>
                </div>
                <div class="tablesiswa">
                  
                    <a href="/addsiswa"><button type="button" class="btn btn-success">Tambah +</button></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kelas</th>
                                <th scope="col">L</th>
                                <th scope="col">P</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listSiswa as $siswa)
                            <tr>
                                <th> {{$siswa->class}} </th>
                                <td> {{$siswa->laki}} </td>
                                <td> {{$siswa->perempuan}} </td>
                                <td> {{$siswa->jumlah}} </td>
                                <td>
                                    <a href="/updatesiswa/{{$siswa->id}}"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/deletesiswa/{{$siswa->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>TOTAL</th>
                                <td>39</td>
                                <td>65</td>
                                <td>104</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </section><!-- End F.A.Q Section -->

    </main><!-- End #main -->
@endsection
