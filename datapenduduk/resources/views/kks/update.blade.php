@extends('layouts.app')
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Kartu Keluarga
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('kks.update',$kk->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="no">No</label>                    <input type="text" name="no" class="form-control" id="no" value="{{ $kk->no }}" aria-describedby="no" placeholder="Masukkan No">
                </div>
                <div class="form-group">
                    <label for="jorong_id">Jorong ID</label>                    <input type="text" name="jorong_id" class="form-control" id="jorong_id" value="{{ $kk->jorong_id }}" aria-describedby="jorong_id" placeholder="Masukkan Jorong ID">
                </div>
                <div class="form-group">
                    <label for="tanggal_pencatatan">Tanggal Pencatatan</label>                    <input type="date" name="tanggal_pencatatan" class="form-control" id="tanggal_pencatatan" value="{{ $kk->tanggal_pencatatan }}" aria-describedby="tanggal_pencatatan" placeholder="Masukkan Tanggal Pencatatan">
                </div>
                
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection