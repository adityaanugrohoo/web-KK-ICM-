@extends('layout/layoutcrud')
@section('title','Tambah Data Mahasiswa')

@section('breadcrumbs','Tambah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
            <form method="post" action="{{ route('admin.store',Auth::user()) }}">
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukan Nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Masukan Keterangan" name="keterangan" value="{{ old('keterangan') }}">
                    @error('keterangan')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pdf">File PDF</label>
                    <input type="file" class="form-control @error('pdf') is-invalid @enderror" id="pdf" placeholder="Masukan PDF" name="pdf" value="{{ old('pdf') }}">
                    @error('pdf')
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