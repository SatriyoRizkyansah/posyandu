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
                  <h3 class="font-weight-bold">Selamat datang, {{ Auth::user()->username }}</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="row">
                <div class="col-md-3 mb-4 transparent">
                  <a href="{{ route('perkembangan.index') }}" class="text-decoration-none">
                    <div class="card card-tale card-strech">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-4">
                            <img src="{{ asset('images/icon/perkembangan.png') }}" alt="" class="img-fluid w-100">
                          </div>
                          <div class="col-8">
                            <h6>Perkembangan Anak</h6>
                            <span class="-mt-3">{{ $dataCount['perkembanganAnakCount'] }}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-3 mb-4 transparent stretch-card">
                  <div class="card card-dark-blue">
                    <a href="{{ route('imunisasi.index') }}" class="text-decoration-none text-white">
                      <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <img src="{{ asset('images/icon/imunisasi.png') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-8">
                          <h6>Imunisasi</h6>
                          <span class="-mt-3">{{ $dataCount['imunisasiCount'] }}</span>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-3 mb-4 transparent stretch-card">
                  <div class="card card-light-blue">
                    <a href="{{ route('orangtua.index') }}" class="text-decoration-none text-white">
                      <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <img src="{{ asset('images/icon/orangtua.png') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-8">
                          <h6>Data Orang Tua</h6>
                          <span class="-mt-3">{{ $dataCount['orangTuaCount'] }}</span>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>

                <div class="col-md-3 mb-4 transparent stretch-card">
                  <div class="card card-light-danger">
                    <a href="{{ route('anak.index') }}" class="text-decoration-none text-white">
                      <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <img src="{{ asset('images/icon/anak.png') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-8">
                          <h6>Data Anak</h6>
                          <span class="-mt-3">{{ $dataCount['anakCount'] }}</span>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Sales Report</p>
                  <a href="#" class="text-info">View all</a>
                 </div>
                  <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
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
  {{-- <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script> --}}
  {{-- <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/dataTables.select.min.js') }}"></script> --}}

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
@endsection