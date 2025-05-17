@php
    use Carbon\Carbon;
@endphp
@extends('partials.app')
@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">

    <style>
      /* Saat hover (tombol aktif & biasa) */
      .pagination .page-link:hover {
        background-color: #28a745 !important; /* green */
        border-color: #28a745 !important;
        color: #fff !important;
      }

      /* Warna default semua link pagination */
      .pagination .page-link {
        color: #28a745 !important;
        border-color: #28a745 !important;
      }

      /* Tombol aktif (yang sedang dipilih) */
      .pagination .page-item.active .page-link {
        background-color: #28a745 !important;
        border-color: #28a745 !important;
        color: white !important;
      }

      /* Tombol disabled (previous/next) */
      .pagination .page-item.disabled .page-link {
        color: #999 !important;
        background-color: #f1f1f1 !important;
        border-color: #ddd !important;
      }

    </style>
@endsection
@section('content')


<div class="content-wrapper" style="background-color: #CDE6B4">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Anak</h4>
                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th>ID Terdaftar</th>
                            <th>Nama Ibu</th>
                            <th>Nama Anak</th>
                            <th>Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $anak_data->id }}</td>
                                <td>{{ $anak_data->orangtua->nama_ibu }}</td>
                                <td>{{ $anak_data->nama }}</td>
                                <td>{{ \Carbon\Carbon::parse($anak_data->tanggal_lahir)->translatedFormat('d F, Y') }}</td>

                                @php
                                    $tanggalLahir = Carbon::parse($anak_data->tanggal_lahir);
                                    $sekarang = Carbon::now();
                                    $umurTahun = $tanggalLahir->diff($sekarang)->y;
                                    $umurBulan = $tanggalLahir->diff($sekarang)->m;
                                @endphp

                                <td>{{ $umurTahun }} thn, {{ $umurBulan }} bln</td>

                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('anak.edit', $anak_data->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                         
                                        <form action="{{ route('anak.destroy', $anak_data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
</div>

@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection