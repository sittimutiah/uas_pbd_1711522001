@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
<div class="row" jus>

	<div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>Kelola Data Penduduk</h2>
            </div>
            <div class="text-left">
                <a class="btn btn-success" href="{{ route('penduduks.create') }}">Tambah Penduduk</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($penduduks as $key => $penduduk)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $penduduk->nama }}</td>
            <td>{{ $penduduk->nik }}</td>
            <td>{{ $penduduk->tempat_lahir }}</td>
            <td>{{ $penduduk->tanggal_lahir }}</td>
            <td>{{ $penduduk->agama }}</td>
            <td>{{ $penduduk->jenis_kelamin }}</td>
            <td>
                <form action="{{ route('penduduks.destroy',$penduduk->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('penduduks.show',$penduduk->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('penduduks.update',$penduduk->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
</div>
    
@endsection