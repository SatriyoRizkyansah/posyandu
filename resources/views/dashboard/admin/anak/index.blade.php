@php
    use Carbon\Carbon;
@endphp
@extends('partials.app')
@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">
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
                            @foreach ($anak_data as $anak)
                            <tr>
                                <td>{{ $anak->id }}</td>
                                <td>{{ $anak->orangtua->nama_ibu }}</td>
                                <td>{{ $anak->nama }}</td>
                                <td>{{ $anak->tanggal_lahir }}</td>

                                @php
                                    $tanggalLahir = Carbon::parse($anak->tanggal_lahir);
                                    $sekarang = Carbon::now();
                                    $umurTahun = $tanggalLahir->diff($sekarang)->y;
                                    $umurBulan = $tanggalLahir->diff($sekarang)->m;
                                @endphp

                                <td>{{ $umurTahun }} thn, {{ $umurBulan }} bln</td>

                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('anak.edit', $anak->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                         
                                        <form action="{{ route('anak.destroy', $anak->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
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