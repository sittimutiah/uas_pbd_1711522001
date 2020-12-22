@extends('layouts.app')
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Penduduk
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
            <form method="post" action="{{ route('penduduks.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan Nama">            
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>                    <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik" placeholder="Masukkan NIK">                
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" aria-describedby="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>                    <input type="text" name="agama" class="form-control" id="agama" aria-describedby="agama" placeholder="Masukkan Agama">                
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>                    <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" aria-describedby="jenis_kelamin" placeholder="Masukkan Jenis Kelamin">                
                </div>
                <div class="form-group">
                    <label for="level_pendidikan_id">Level Pendidikan ID</label>                    <input type="text" name="level_pendidikan_id" class="form-control" id="level_pendidikan_id" aria-describedby="level_pendidikan_id" placeholder="Masukkan Level Pendidikan ID">                
                </div>
                <div class="form-group">
                    <label for="pekerjaan_id">Pekerjaan ID</label>                    <input type="text" name="pekerjaan_id" class="form-control" id="pekerjaan_id" aria-describedby="pekerjaan_id" placeholder="Masukkan Pekerjaan ID">                
                </div>
                <div class="form-group">
                    <label for="status_pernikahan">Status Pernikahan</label>                    <input type="text" name="status_pernikahan" class="form-control" id="status_pernikahan" aria-describedby="status_pernikahan" placeholder="Masukkan Status Pernikahan">                
                </div>
                <div class="form-group">
                    <label for="status_keluarga">Status Keluarga</label>                    <input type="text" name="status_keluarga" class="form-control" id="status_keluarga" aria-describedby="status_keluarga" placeholder="Masukkan Status Keluarga">                
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan_id">Kewarganegaraan ID</label>                    <input type="text" name="kewarganegaraan_id" class="form-control" id="kewarganegaraan_id" aria-describedby="kewarganegaraan_id" placeholder="Masukkan Kewarganegaraan ID">                
                </div>
                <div class="form-group">
                    <label for="ayah">Ayah</label>                    <input type="text" name="ayah" class="form-control" id="ayah" aria-describedby="ayah" placeholder="Masukkan Ayah">                
                </div>
                <div class="form-group">
                    <label for="ibu">Ibu</label>                    <input type="text" name="ibu" class="form-control" id="ibu" aria-describedby="ibu" placeholder="Masukkan Ibu">                
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection