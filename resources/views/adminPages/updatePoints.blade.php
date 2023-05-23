@extends('layouts.adminlayout')

@section('title', 'Update Points')

@section('style')
<link href="{{ asset('/assets/css/style_addkomite.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Update Points</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/adminHome">Admin Home</a></li>
                    <li><a href="#">Update Points</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Update Points</h2>
            </div>
            <div class="row justify-content-center">
                <form action="/adminHome/updatePoints/{{$points -> id}}" method="POST" class="col-8">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$points -> title}}">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <input type="text" name="desc" class="form-control" id="desc" value="{{$points -> desc}}">
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