@extends('layout/layoutcrud')
@section('title','Data Mahasiswa')

@section('breadcrumbs','Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <a href="/admin/create" class="btn btn-dark mt-2">Tambah Data Mahasiswa</a>

            @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
            @endif

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $std)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $std->nama }}</td>
                    <td>{{ $std->nim }}</td>
                    <td>
                        <form action="{{ route('admin.destroy',[$std->id]) }}" method="post">
                        <a href="{{ route('admin.edit',[$std->id]) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="/admin/{{ $std->id }}" class="btn btn-sm btn-info">Detail</a>
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $student->links() }}
        </div>
    </div>
</div>
@endsection