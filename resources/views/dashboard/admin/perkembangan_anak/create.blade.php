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
            <label for="exampleInputUsername1">ID Anak</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ID Anak" name="id_anak" />
          </div>
          <div class="form-group">
            <label for="tanggal_posyandu">Tanggal Posyandu</label>
            <input type="date" class="form-control" id="tanggal_posyandu" placeholder="dd/mm/yyyy" name="tanggal_posyandu"/>
          </div>
          <div class="form-group">
            <label for="beratbadan">Berat Badan</label>
            <input type="text" name="berat_badan" class="form-control" id="beratbadan" placeholder="Berat Badan" />
          </div>
          <div class="form-group">
            <label for="exampleInputConfirmPassword1">Ket BB</label>
            <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Keterangan Berat Badan" name="ket_bb"/>
          </div>
          <div class="form-group">
            <label for="tinggiBadan">Tinggi Badan</label>
            <input type="text" name="tinggi_badan" class="form-control" id="tinggiBadan" placeholder="Tinggi Badan" />
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