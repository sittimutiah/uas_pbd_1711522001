@extends('layouts.app')
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Penduduk
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$penduduk->nama}}</li>
                    <li class="list-group-item"><b>NIK: </b>{{$penduduk->nik}}</li>
                    <li class="list-group-item"><b>Tempat Lahir: </b>{{$penduduk->tempat_lahir}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$penduduk->tanggal_lahir}}</li>
                    <li class="list-group-item"><b>Agama: </b>{{$penduduk->agama}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$penduduk->jenis_kelamin}}</li>
                    <li class="list-group-item"><b>Level Pendidikan ID: </b>{{$penduduk->level_pendidikan_id}}</li>
                    <li class="list-group-item"><b>Pekerjaan ID: </b>{{$penduduk->pekerjaan_id}}</li>
                    <li class="list-group-item"><b>Status Pernikahan: </b>{{$penduduk->status_pernikahan}}</li>
                    <li class="list-group-item"><b>Status Keluarga: </b>{{$penduduk->status_keluarga}}</li>
                    <li class="list-group-item"><b>Kewarganegaraan ID: </b>{{$penduduk->kewarganegaraan_id}}</li>
                    <li class="list-group-item"><b>Ayah: </b>{{$penduduk->ayah}}</li>
                    <li class="list-group-item"><b>Ibu: </b>{{$penduduk->ibu}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('penduduks.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection