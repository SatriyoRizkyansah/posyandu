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
                    <h4 class="card-title">Data Imunisasi Anak</h4>
                    {{-- <p class="card-description">Add class <code>.table-striped</code></p> --}}

                    <a href="{{ route('imunisasi.create') }}" class="btn btn-success btn-sm mb-4">
                        Tambah
                    </a>

                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th>Nama Anak</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Imunisasi</th>
                            <th>Vitamin</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($immunisasi_data as $imunisasi)
                            <tr>
                                <td>{{ $imunisasi->anak->nama }}</td>
                                <td>{{ $imunisasi->tanggal_imunisasi }}</td>
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