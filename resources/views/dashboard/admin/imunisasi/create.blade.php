@extends('partials.app')
@section('content')
<div class="content-wrapper" style="background-color: #CDE6B4">
  <div class="col-md-6 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Tambah Data Perkembangan Anak</h4>
        {{-- <p class="card-description">Basic form layout</p> --}}
        <form class="forms-sample" action="{{ route('imunisasi.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputUsername1">ID Anak</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ID Anak" name="id_anak" />
          </div>
          <div class="form-group">
            <label for="tanggal_posyandu">Tanggal Imunisasi</label>
            <input type="date" class="form-control" id="tanggal_posyandu" placeholder="dd/mm/yyyy" name="tanggal_imunisasi"/>
          </div>

          <div class="form-group">
            <label for="exampleInputConfirmPassword1">Imunisasi</label>
            <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Jenis Imunisasi" name="imunisasi"/>
          </div>

          <div class="form-group">
            <label for="ketTb">Vitamin</label>
            <input type="text" class="form-control" id="ketTb" placeholder="Jenis Vitamin" name="vitamin"/>
          </div>
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
    </div>
  </div>
</div>
@endsection