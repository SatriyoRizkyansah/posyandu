@extends('partials.app')
@section('content')

<div class="content-wrapper" style="background-color: #CDE6B4">
  <div class="col-md-6 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Edit Data Imunisasi Anak</h4>
        {{-- <p class="card-description">Basic form layout</p> --}}
        <form class="forms-sample" action="{{ route('orangtua.edit', $orangtua_data->id) }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Nik Ibu</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="nik_ibu" name="nik" value="{{ $orangtua_data->nik }}" />
          </div>
          <div class="form-group">
            <label for="tanggal_posyandu">Nama Ibu</label>
            <input type="text" class="form-control" id="tanggal_imunisasi" placeholder="dd/mm/yyyy" name="nama_ibu" value="{{ $orangtua_data->nama_ibu }}"/>
          </div>
          <div class="form-group">
            <label for="exampleInputConfirmPassword1">No Telp</label>
            <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="No Telp" name="no_telp" value="{{ $orangtua_data->no_telp }}"/>
          </div>
          <div class="form-group">
            <label for="ketTb">Alamat</label>
            <input type="text" class="form-control" id="ketTb" placeholder="Alamat" name="alamat" value="{{ $orangtua_data->alamat }}"/>
          </div>
          <button type="submit" class="btn btn-success mr-2">Update</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
    </div>
  </div>
</div>
@endsection