@extends('layouts.app')
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Kartu Keluarga
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No: </b>{{$kk->no}}</li>
                    <li class="list-group-item"><b>Jorong ID: </b>{{$kk->jorong_id}}</li>
                    <li class="list-group-item"><b>Tanggal Pencatatan: </b>{{$kk->tanggal_pencatatan}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('kks.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection