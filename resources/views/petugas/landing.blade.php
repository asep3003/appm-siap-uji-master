@extends('layouts.master')
@section('content')
  <div class="col-md-12">
    <div class="mt-5 row d-flex justify-content-center">
      <div class="card col m-2 bg-danger text-white">
        <div class="card-body">
          <h5 class="card-title">Total Aduan</h5>
            <div class="d-flex justify-content-between">
              <img src="{{ asset('bootstrap-icons/chat-left.svg') }}" alt="" style="width: 30px">
              <strong class="fs-3">{{ $totalAduan }}</strong>
          </div>
        </div>
      </div>
      <div class="card col m-2 bg-warning">
        <div class="card-body">
          <h5 class="card-title">Aduan Proses</h5>
            <div class="d-flex justify-content-between">
              <img src="{{ asset('bootstrap-icons/arrow-clockwise.svg') }}" alt="" style="width: 30px">
              <strong class="fs-3">{{ $aduanProses }}</strong>
          </div>
        </div>
      </div>
      <div class="card col m-2 bg-success text-white">
        <div class="card-body">
          <h5 class="card-title">Aduan Selesai</h5>
          <div class="d-flex justify-content-between">
            <img src="{{ asset('bootstrap-icons/check-circle.svg') }}" alt="" style="width: 30px">
            <strong class="fs-3">{{ $aduanSelesai }}</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

