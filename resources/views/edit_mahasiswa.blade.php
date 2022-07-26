@extends('layout')
@section('content')
@include('navigasi')
<h4>edit data</h4>
<form action="{{route('mahasiswa.update', $mahasiswa->id)}}" 
    method="post">
@csrf
@method('PUT')
<div class="mb-3">
    <label for="nim">NIM</label>
    <input type="text" name="nim" value="{{old('nim', 
    $mahasiswa->nim)}}" class="form-control" required>
    @error('nim')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        
    @enderror
</div>
<div class="mb-3">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="{{old('nama', 
    $mahasiswa->nama)}}" class="form-control" required>
    @error('nama')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        
    @enderror
</div>
<div class="mb-3">
    <label for="matkul">Mata Kuliah</label>
    <input type="text" name="matkul" value="{{old('matkul', 
    $mahasiswa->matkul)}}" class="form-control" required>
    @error('nama')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        
    @enderror
</div>
<button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection