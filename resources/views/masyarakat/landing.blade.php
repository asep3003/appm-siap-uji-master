@extends('layouts.master')
@section('content')
  <div class="d-flex align-items-center" style="height: 90vh">
    <div class="col-md-6">
      <img src="{{ asset('assets/vectors/masyarakat-vector.svg') }}" alt="">
    </div>
    <div class="col-md-6 text-center">
      <h1>Halo, Selamat Datang <br> <strong>{{ Auth::guard('masyarakat')->user()->nama }}</strong></h1>
      <p>Aduan Anda : {{ $totalAduan }}</p>
    </div>
  </div>
@endsection