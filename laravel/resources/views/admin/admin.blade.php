@extends('layout/layoutcrud')
@section('title','Data Mahasiswa')

@section('breadcrumbs','Selamat Datang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Anda Masuk Sebagai {{ Auth::user()->role }}</h6>
                    <p class="card-text">{{ Auth::user()->email }}</p>
                    <p class="card-text">{{ Auth::user()->tahun }}</p>
                    <p class="card-text">{{ Auth::user()->keterangan }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection