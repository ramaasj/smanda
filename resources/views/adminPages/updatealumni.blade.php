@extends('layouts.adminlayout')

@section('title', 'Update Alumni')

@section('style')
<link href="{{ asset('/assets/css/style_updatealumni.css') }}" rel="stylesheet">
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Update Alumni</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li><a href="/adminalumni">Daftar Alumni</a></li>
            <li><a href="#">Update</a></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="siswa" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Update Data Alumni</h2>
        </div>
        <div class="row justify-content-center">
          <form action="/updatealumni/{{$alumni -> id}}/store" method="POST" class="col-8">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="class">Universitas</label>
                <input type="text" class="form-control" name="class" id="class" value="{{$alumni->class}}">
            </div>
            <div class="form-group">
                <label for="snmptn">SNMPTN</label>
                <input type="text" class="form-control" name="snmptn" id="snmptn" value="{{$alumni->snmptn}}">
            </div>
            <div class="form-group">
                <label for="sbmptn">SBMPTN</label>
                <input type="text" class="form-control" name="sbmptn" id="sbmptn" value="{{$alumni->sbmptn}}">
            </div>
            <div>
                <label for="mandiri">Mandiri</label>
                <input type="text" name="mandiri" class="form-control" id="mandiri" value="{{$alumni->mandiri}}">
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