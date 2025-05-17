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
            {{-- udah jalan --}}
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Grafik Usia Anak</p>
                  {{-- <a href="#" class="text-info">View all</a> --}}
                 </div>
                  <p class="font-weight-500">Grafik usia anak pertriwulan</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>

            {{-- belum jalan --}}
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Grafik Usia Anak</p>
                 </div>
                  <p class="font-weight-500">Grafik usia anak pertahun (1-4 tahun)</p>
                  <div id="yearly-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="yearly-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection

@section('script')
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dataTriwulan = @json($dataTriwulan);

        const ctx = document.getElementById('sales-chart').getContext('2d');
        // Hapus chart lama jika sudah ada
        if (window.salesChartInstance) {
            window.salesChartInstance.destroy();
        }

        window.salesChartInstance = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['0-3 Bulan', '4-6 Bulan', '7-9 Bulan', '10-12 Bulan'],
                datasets: [{
                    label: 'Jumlah Anak',
                    data: [
                        dataTriwulan['0-3'],
                        dataTriwulan['4-6'],
                        dataTriwulan['7-9'],
                        dataTriwulan['10-12']
                    ],
                    backgroundColor: '#28a745',
                    borderColor: '#28a745',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      const dataTahunan = @json($dataTahunan);

      const ctxTahunan = document.getElementById('yearly-chart').getContext('2d');
      new Chart(ctxTahunan, {
          type: 'pie', // atau 'doughnut', 'bar', dll
          data: {
              labels: ['1 Tahun', '2 Tahun', '3 Tahun', '4 Tahun'],
              datasets: [{
                  label: 'Jumlah Anak',
                  data: [
                      dataTahunan['1'],
                      dataTahunan['2'],
                      dataTahunan['3'],
                      dataTahunan['4']
                  ],
                  backgroundColor: ['#007bff', '#8000ff', '#28a745', '#ff8000'],
              }]
          },
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      position: 'bottom',
                  }
              }
          }
      });
  });
</script>
  <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
@endsection