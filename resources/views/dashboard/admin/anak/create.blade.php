@extends('partials.app')
@section('content')
<div class="content-wrapper" style="background-color: #CDE6B4">
  <div class="col-md-6 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Tambah Data Anak</h4>
        {{-- <p class="card-description">Basic form layout</p> --}}
        <form class="forms-sample" action="{{ route('anak.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">Nik Ibu</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="nik Ibu" name="nik_ibu" value="{{ $orangtua_data->nik }}" readonly/>
          </div>

          <div class="form-group">
            <label for="nama_anak">Nama Anak</label>
            <input type="text" class="form-control" id="nama_anak" placeholder="Nama Anak" name="nama"/>
          </div>

          <div class="form-group">
            <label for="exampleInputConfirmPassword1">Tempat Lahir</label>
            <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Tempat Lahir" name="tempat_lahir"/>
          </div>

          <div class="form-group">
            <label for="ketTb">Tanggal Lahir</label>
            <input type="date" class="form-control" id="ketTb" placeholder="Jenis Vitamin" name="tanggal_lahir"/>
          </div>

          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin" required>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            
          </div>
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
    </div>
  </div>
</div>
@endsection