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
                    <h4 class="card-title">Data Imunisasi Anak</h4>
                    <p class="card-description">Ini adalah data imunisasi anak yang telah didaftarkan, di tampilkan berdasarkan data yang terbaru tiap anak. </p>

                    <a href="{{ route('imunisasi.create') }}" class="btn btn-success btn-sm mb-4">
                        Tambah
                    </a>

                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th>Nama Anak</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Umur</th>
                            <th>Imunisasi</th>
                            <th>Vitamin</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($immunisasi_data as $imunisasi)
                            <tr>
                                <td>{{ $imunisasi->anak->nama }}</td>
                                <td>{{ \Carbon\Carbon::parse($imunisasi->tanggal_imunisasi)->translatedFormat('d F, Y') }}</td>
                                <td>
                                  @php
                                    $tanggalLahir = \Carbon\Carbon::parse($imunisasi->anak->tanggal_lahir);
                                    $tanggalImunisasi = \Carbon\Carbon::parse($imunisasi->tanggal_imunisasi);
                                    $umur = $tanggalLahir->diff($tanggalImunisasi);
                                  @endphp
                                  {{ $umur->y }} tahun {{ $umur->m }} bulan {{ $umur->d }} hari
                                </td>
                                <td>{{ $imunisasi->imunisasi }}</td>
                                <td>{{ $imunisasi->vitamin }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('imunisasi.edit', $imunisasi->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                         
                                        <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>

                                        <a href="{{ route('imunisasi.detail', $imunisasi->anak->id) }}" class="btn btn-info btn-sm ml-2">Detail</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
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