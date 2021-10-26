@extends('adminlte::page')

@section('title', 'Tambah Data Warga')

@section('content_header')

    <h1></h1>

@stop
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data Warga</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('storewarga') }}" method="post">
        @csrf
        <div class="card-body">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block mb-3">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">Nik</label>
                <input type="number" class="form-control" name="nik" id="exampleInputEmail1" placeholder="Masukan NIK" value="{{ old('nik') }}">
                @if ($errors->has('nik'))<small class="text-danger" role="alert">{{ $errors->first('nik') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap" value="{{ old('nama') }}">
                @if ($errors->has('nama'))<small class="text-danger" role="alert">{{ $errors->first('name') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir') }}">
                @if ($errors->has('tempat_lahir'))<small class="text-danger" role="alert">{{ $errors->first('tempat_lahir') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tanggal Lahir</label>
                <input type="date" class="form-control" name="dob" style="width:180px" id="exampleInputPassword1" placeholder="" value="{{ old('dob') }}">
                @if ($errors->has('dob'))<small class="text-danger" role="alert">{{ $errors->first('dob') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                <select class="custom-select form-control-border" name="jk" id="exampleSelectBorder">
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="PEREMPUAN">PEREMPUAN</option>
                </select>
                @if ($errors->has('jk'))<small class="text-danger" role="alert">{{ $errors->first('jk') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pendidikan</label>
                <input type="text" class="form-control" name="pendidikan" id="exampleInputPassword1" placeholder="Masukan Pendidikan Terakhir" value="{{ old('pendidikan') }}">
                @if ($errors->has('pendidikan'))<small class="text-danger" role="alert">{{ $errors->first('pendidikan') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Agama</label>
                <input type="text" class="form-control" name="agama" id="exampleInputPassword1" placeholder="Masukan Agama" value="{{ old('agama') }}">
                @if ($errors->has('agama'))<small class="text-danger" role="alert">{{ $errors->first('agama') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="exampleInputPassword1" placeholder="Masukan Pekerjaan" value="{{ old('pekerjaan') }}">
                @if ($errors->has('pekerjaan'))<small class="text-danger" role="alert">{{ $errors->first('pekerjaan') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ayah</label>
                <input type="text" class="form-control" name="ayah" id="exampleInputPassword1" placeholder="Masukan Nama Ayah" value="{{ old('ayah') }}">
                @if ($errors->has('ayah'))<small class="text-danger" role="alert">{{ $errors->first('ayah') }}</small>@endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ibu</label>
                <input type="text" class="form-control" name="ibu" id="exampleInputPassword1" placeholder="Masukan Nama Ibu" value="{{ old('ibu') }}">
                @if ($errors->has('ibu'))<small class="text-danger" role="alert">{{ $errors->first('ibu') }}</small>@endif
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@stop
