@extends('layout/layoutcrud')
@section('title','Data Mahasiswa')

@section('breadcrumbs','Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $std)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $std->nama }}</td>
                    <td>{{ $std->nim }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $student->links() }}
        </div>
    </div>
</div>
@endsection