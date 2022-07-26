@extends('layout')
@section('css')

@endsection

@section('content')


    @include ('navigasi')
    
    
    <div class="row">
        <div class="col-12 mt-4">
            <h4 align = "center">Daftar mahasiswa</h4><br>    
        </div>
       
        <div class="col-12">
            <a href="{{route('mahasiswa.create')}}" class="btn btn-primary float-end">tambah data</a>
        </div>
        
        <div class="col-12">
        @if(session('sukses'))
            <p>{{session('sukses')}}</p>
         @endif
         
         <table class="table table bordered table-striped">
             <thead>
                 <tr>
                     <td>No</td>
                     <td>Nim</td>
                     <td>Nama</td>
                    <td>Action</td>
                    <td>mata kuliah</td>
                </tr>
                <tbody>
                    @php
                        $no = (request()->get('page', 1) -1)*2;
                    @endphp
                    @forelse($mahasiswa as $row)
                    <tr>
                        <td>{{ ++$no;}}</td>
                        <td>{{ $row -> nim;}}</td>
                        <td>{{ $row -> nama;}}</td>
                        <td>{{ $row -> keterangan;}}</td>
                        <td>{{ $row -> matkul;}}</td>
                        <td>
                            <form action="{{route('mahasiswa.destroy', $row->id)}}" 
                            method="post" onsubmit="return confirm('apakah anda yakin?');">
                                
                                @csrf
                                @method('DELETE')
                                <a href="{{route('mahasiswa.edit', $row->id)}}" class="btn btn-info">edit</a>
                                <button class="btn btn-danger" type="submit">
                                    delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center">tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </thead>
        </table>
    </div>
        <div class="col-12">
            {{$mahasiswa -> links();}}
        </div>
    </div>


@section('js')

@endsection
@endsection