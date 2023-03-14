<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Aplikasi Pelaporan Pengaduan Masyarakat</title>
</head>
<body>
    <nav class="navbar bg-danger navbar-expand-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('assets/icons/icon-kabupaten.png') }}" alt="" width="30px">
                <span>APPM Kabupatan Bogor</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <a href="/login"><button type="button" class="btn text-white">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a href="/register"><button type="button" class="btn btn-outline-light">Register</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex align-items-center" style="height: 60vh">
            <div class="col-md-6">
                <h1>Aplikasi Pelaporan Pengaduan Masyarakat <u class="text-danger">Kabupaten Bogor</u></h1>
                <p>Layanan Pelaporan Pengaduan Masyarakat Kabupaten Bogor. Sampaikan laporan Anda langsung kepada Kami.</p>
                <div class="card py-2 text-white text-center col-md-6 bg-danger">
                    <h5 class="mb-0">Total Pengaduan : {{ $totalAduan }}</h5>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/vectors/landing-vector.svg') }}" alt="">
            </div>
        </div>
        <div class="mt-4" style="height: 40vh">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-white bg-danger">
                            <img src="{{ asset('bootstrap-icons/pencil-square.svg') }}">
                            Tulis Laporan
                        </div>
                        <div class="card-body text-danger-emphasis">
                            <p>Laporkan keluhan Anda dengan jelas dan lengkap</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <img src="{{ asset('bootstrap-icons/chat-dots.svg') }}">
                            Proses Tindak Lanjut dan Tanggapan
                        </div>
                        <div class="card-body text-warning-emphasis">
                            <p>Pihak instansi akan menindaklanjuti dan menanggapi laporan Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-white bg-success">
                            <img src="{{ asset('bootstrap-icons/check-lg.svg') }}">
                            Selesai
                        </div>
                        <div class="card-body text-success-emphasis">
                            <p>Laporan Anda akan terus ditindaklanjuti hingga selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5">
                    <div class="card-header">
                        Pengaduan
                    </div>
                    <div class="card-body">
                        @forelse ($pengaduans as $pengaduan)
                            <div class="card mt-2">
                                <div class="card-body row">
                                    <div class="col-md-3">
                                        <img class="w-100" src="{{ asset($pengaduan->foto) }}" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h5 class="card-title">{{ $pengaduan->masyarakat->nama }} <span class="badge bg-success">{{ $pengaduan->status }}</span></h5>
                                        <p class="card-text">{{ Str::limit($pengaduan->isi_laporan, 150, '...') }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="d-flex justify-content-center">
                                <p>Tidak ada data</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar bg-dark text-secondary">
        <div class="container justify-content-center">
            <span class="">&copy; Copyright 2023 Kabupaten Bogor Allright Reserved.</span>
        </div>
    </nav>

    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
