@extends('layout/layoutcrud')
@section('title','Detail Data Mahasiswa')

@section('breadcrumbs','Detail Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Detail Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                    <p class="card-text">{{ $student->keterangan }}</p>

                    
                    <a href="/admin" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection