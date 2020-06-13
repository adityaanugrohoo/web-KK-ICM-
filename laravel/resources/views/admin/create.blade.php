@extends('layout/layoutcrud')
@section('title','Tambah Data Mahasiswa')

@section('breadcrumbs','Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">form tambah data Mahasiswa</h1>
            <form method="post" action="/admin">
                @csrf
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="masukan nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="masukan keterangan" name="keterangan" value="{{ old('keterangan') }}">
                    @error('keterangan')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

@endsection