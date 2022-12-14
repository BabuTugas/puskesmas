@extends('layout.navbar')

@section('content')
    <br>
    <br>
    <br>
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <h2 class="h2 text-black d-inline-block mb-0">Edit Data Pasien</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <form action="/loket/registrasi/edit/{{ $data->no_pasien }}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">No Antrian</label>
            <input name="noantrian" type="number" value="{{ old('noantrian', $data->no_antrian) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="No antrian">
            @error('noantrian')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Nama Pasien</label>
            <input name="nama" type="name" value="{{ old('nama', $data->nama_pasien) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Nama Pasien">
            @error('nama')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">NIK</label>
            <input name="nik" type="number" value="{{ old('nik', $data->nik) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="NIK">
            @error('nik')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Tanggal Lahir</label>
            <input name="tgllhr" type="date" value="{{ old('tgllhr', $data->tgl_lahir) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Tanggal Lahir">
            @error('tgllhr')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Tempat Lahir</label>
            <input name="tmplhr" type="text" value="{{ old('tmplhr', $data->tmpt_lahir) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Tempat Lahir">
            @error('tmplhr')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">Alamat</label>
            <input name="alamat" type="text" value="{{ old('alamat', $data->alamat) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="Alamat">
            @error('alamat')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlInput1">No Telpon</label>
            <input name="nohp" type="number" value="{{ old('nohp', $data->telpon) }}" class="form-control"
                id="exampleFormControlInput1" placeholder="No Telpon">
            @error('nohp')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-control-label" for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jk" class="form-control" id="exampleFormControlSelect1">
                <option disabled selected>Jenis Kelamin</option>
                <option {{ $data->jk == 'laki-laki' ? 'selected' : '' }} value="{{ $data->jk }}">Laki-Laki</option>
                <option {{ $data->jk == 'perempuan' ? 'selected' : '' }} value="{{ $data->jk }}">Perempuan</option>
            </select>
            @error('jk')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-lg-6 col-5 text-right">
            <button type="submit" class="btn btn-sm btn-neutral btn-secondary">Simpan</button>
        </div>
        <br>
    </form>
@endsection
