@extends('layouts.adminlayout')

@section('title', 'Update Persentase Diterima PTN')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Update Persentase</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminhome">Admin Home</a></li>
                    <li><a href="#">Update Persentase</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Update Persentase Diterima PTN</h2>
            </div>
            <div class="row justify-content-center">
                <form action="/updatepersentase/{{$persentase -> id}}" method="POST" class="col-8">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="year">Tahun</label>
                        <input type="text" name="year" class="form-control" id="year" value="{{$persentase -> year}}">
                    </div>
                    <div class="form-group">
                        <label for="percentage">Persentase</label>
                        <input type="text" name="percentage" class="form-control" id="percentage" value="{{$persentase -> percentage}}">
                    </div>
                    <hr>
                    <div>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- End F.A.Q Section -->

</main><!-- End #main -->
@endsection