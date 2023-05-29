@extends('layouts.mainlayout')

@section('title', 'Alumni')

@section('style')
<link href="{{asset('assets/css/style_alumni.css')}}" rel="stylesheet">
@endsection

@section('content')
<main>
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
    </section>
    <section id="alumni" class="faq section-bg">
        <div class="container">
            <div class="section-title">
                <h2 style="font-weight: bolder;">ALUMNI</h2>
                <p>Daftar alumni yang diterima PTN per tanggal <span style="font-weight: bolder;">23-03-2018</span></p>
            </div>
            <div class="tablesiswa">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Universitas</th>
                            <th scope="col">SNMPTN</th>
                            <th scope="col">SBMPTN</th>
                            <th scope="col">MANDIRI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listAlumni as $alumni)
                        <tr>
                            <td>{{$alumni->class}}</td>
                            <td>{{$alumni->snmptn}}</td>
                            <td>{{$alumni->sbmptn}}</td>
                            <td>{{$alumni->mandiri}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th>TOTAL</th>
                            <td>{{$totalSnm}}</td>
                            <td>{{$totalSbm}}</td>
                            <td>{{$totalMandiri}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
@endsection