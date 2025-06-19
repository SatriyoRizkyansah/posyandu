@extends('partials.app')
@section('content')
<div class="content-wrapper" style="background-color: #CDE6B4">
  <div class="col-md-6 grid-margin stretch-card mx-auto">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Tambah Data Perkembangan Anak</h4>
        {{-- <p class="card-description">Basic form layout</p> --}}
        <form class="forms-sample" action="{{ route('perkembangan.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="id_anak">ID Anak</label>
            <input type="text" class="form-control" id="id_anak" placeholder="ID Anak" name="id_anak" value="{{ $anak ? $anak->id : '' }}" {{ $anak ? 'readonly' : '' }} />
            @if($anak)
            <small class="form-text text-success">ID Anak: {{ $anak->nama }}</small>
            @endif
          </div>
          <div class="form-group">
            <label for="tanggal_posyandu">Tanggal Posyandu</label>
            <input type="date" class="form-control" id="tanggal_posyandu" placeholder="dd/mm/yyyy" name="tanggal_posyandu"/>
          </div>

          <div class="form-group">
              <label>Berat Badan</label>
              {{-- <input type="text" name="berat_badan" class="file-upload-default" /> --}}
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" name="berat_badan" placeholder="Berat Badan" />
                <span class="input-group-append">
                  <button class="btn btn-success" type="button">KG</button>
                </span>
              </div>
          </div>

          <div class="form-group">
            <label for="exampleInputConfirmPassword1">Ket BB</label>
            <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Keterangan Berat Badan" name="ket_bb"/>
          </div>

           <div class="form-group">
              <label>Tinggi Badan</label>
              {{-- <input type="text" name="berat_badan" class="file-upload-default" /> --}}
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" name="tinggi_badan" placeholder="Tinggi Badan" />
                <span class="input-group-append">
                  <button class="btn btn-success" type="button">CM</button>
                </span>
              </div>
          </div>

          <div class="form-group">
            <label for="ketTb">Ket TB</label>
            <input type="text" class="form-control" id="ketTb" placeholder="Keterangan Berat Badan" name="ket_tb"/>
          </div>
          <button type="submit" class="btn btn-success mr-2">Submit</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
    </div>
  </div>
</div>
@endsection