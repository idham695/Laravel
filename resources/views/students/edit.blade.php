@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-3">
                <h1>Form Ubah Data Mahasiswa</h1>
                 <form method="POST" action="/students/{{ $student->id }}">
                    @method('patch')
                    @csrf
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">
                          @error('nama')
                             <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="NIM">NIM</label>
                          <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM" placeholder="Masukan NIM" name="NIM" value="{{$student->NIM}}">
                          @error('NIM')
                             <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="email">email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan email" name="email" value="{{$student->email}}">
                          @error('email')
                             <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan jurusan" name="jurusan" value="{{$student->jurusan}}">
                          @error('jurusan')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah data</button>
                 </form>
        </div>
    </div>
</div>
@endsection