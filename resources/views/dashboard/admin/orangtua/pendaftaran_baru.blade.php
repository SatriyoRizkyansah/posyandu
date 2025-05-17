@section('head')
  <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endsection

@extends('partials.app')
@section('content')

<div class="content-wrapper" style="background-color: #CDE6B4">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="mb-5 text-center">
                    <h3 class="card-title">Form pendaftaran baru</h3>
                    <p class="card-description">
                        Form Pendaftaran baru digunakan untuk menginput data orang tua yang belum sama sekali didaftarkan 
                    </p>

                </div>
                <form class="form-sample" action="{{ route('pendaftaran.store') }}" method="POST">
                  @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nik</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nik" placeholder="Masukan NIK" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Ibu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Telp Ibu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_telp_ibu" placeholder="No Telp" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Anak</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_anak" placeholder="Nama Anak" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jenis_kelamin" required>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row"> 
                                <label class="col-sm-3 col-form-label">Tempat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir"/ required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="mm/dd/yyyy" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success mr-2">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    <!-- Plugin js for this page -->
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page-->
@endsection