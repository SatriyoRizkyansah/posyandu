@section('head')
  {{-- <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
@endsection

@extends('partials.app')
@section('content')

<div class="content-wrapper" style="background-color: #CDE6B4;">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat datang, {{ Auth::guard('orangtua')->user()->nama_ibu }}</h3>
                </div>
              </div>
            </div>
          </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold" >Data Anda</h6>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <div class="col-md-6">
                            <tr>
                                <td>Nik</td>
                                <td>:</td>
                                <td>{{ Auth::guard('orangtua')->user()->nik }}</td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>:</td>
                                <td>{{ Auth::guard('orangtua')->user()->nama_ibu }}</td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td>:</td>
                                <td>{{ Auth::guard('orangtua')->user()->no_telp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ Auth::guard('orangtua')->user()->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Anak</td>
                                <td>:</td>
                                <td>{{ Auth::guard('orangtua')->user()->anak->count() }}</td>
                            </tr>
                        </div>
                    </table>
                </div>
            </div>
</div>
@endsection

@section('script')


  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  {{-- <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script> --}}
  <!-- End custom js for this page-->
@endsection