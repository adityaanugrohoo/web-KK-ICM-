@extends('layout/layoutcrud')
@section('title','Edit Data Mahasiswa')

@section('breadcrumbs','Edit Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="/admin/{{ $std->id }}">
                @method('patch')
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ $std->nama }}">
                    @error('nama')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="masukan nim" name="nim" value="{{ $std->nim }}">
                    @error('nim')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan" value="{{ $std->keterangan }}">
                    @error('keterangan')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>

@endsection