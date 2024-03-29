@extends('layout/main')

@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-10 mt-3">
            <h1>Daftar Mahasiswa</h1>

            <table class="table">
                <thead class="thead-dark">             
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($mahasiswa as $mhs)
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->NIM}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection