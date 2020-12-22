@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
<div class="row" jus>

	<div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>Kelola Data Kartu Keluarga</h2>
            </div>
            <div class="text-left">
                <a class="btn btn-success" href="{{ route('kks.create') }}">Tambah Kartu Keluarga</a>
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
            <th>No</th>
            <th>Jorong ID</th>
            <th>Tanggal Pencatatan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kks as $key => $kk)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $kk->no }}</td>
            <td>{{ $kk->jorong_id }}</td>
            <td>{{ $kk->tanggal_pencatatan }}</td>
            <td>
                <form action="{{ route('kks.destroy',$kk->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kks.show',$kk->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kks.update',$kk->id) }}">Edit</a>
   
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