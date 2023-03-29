@extends('layouts.adminlayout')

@section('title', 'Admin Alumni')

@section('style')
<link href="assets/css/style_adminalumni.css" rel="stylesheet">
@endsection

@section('content')
<main>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Alumni</h2>
          <ol>
            <li><a href="/siswa">SNMPTN</a></li>
            <li><a href="/siswa">SBMPTN</a></li>
            <li><a href="/siswa">Mandiri</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="alumni" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2 style="font-weight: bolder;">ALUMNI</h2>
                <p>Daftar alumni yang diterima PTN per tanggal <span style="font-weight: bolder;">23-03-2018</span>
                    <span style="font-weight: bolder;">-</span>
                    <span style="font-weight: bolder;">23-03-2023</span></p>
            </div>
            <div class= "row justify-content-center">
                <div class="col-7">
                    <a href="/addalumni"><button type="button" class="btn btn-success">Tambah +</button></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Universitas</th>
                                <th scope="col">SNMPTN</th>
                                <th scope="col">SBMPTN</th>
                                <th scope="col">MANDIRI</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listAlumni as $alumni)
                            <tr>
                                <td>{{$alumni->class}}</td>
                                <td>{{$alumni->snmptn}}</td>
                                <td>{{$alumni->sbmptn}}</td>
                                <td>{{$alumni->mandiri}}</td>
                                <td>
                                    <a href="/updatealumni/{{$alumni->id}}"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/deletealumni/{{$alumni->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>TOTAL</th>
                                <td>{{$totalSnm}}</td>
                                <td>{{$totalSbm}}</td>
                                <td>{{$totalMandiri}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </section><!-- End F.A.Q Section -->

    </main><!-- End #main -->
@endsection