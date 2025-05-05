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
                    <h4 class="card-title">Data OrangTua</h4>
                    {{-- <p class="card-description">Add class <code>.table-striped</code></p> --}}

                    <a href="{{ route('imunisasi.create') }}" class="btn btn-success btn-sm mb-4">
                        Tambah
                    </a>

                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th>Nik</th>
                            <th>Nama Ibu</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Anak</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orangtua_data as $orangtua)
                            <tr>
                                <td>{{ $orangtua->nik}}</td>
                                <td>{{ $orangtua->nama_ibu }}</td>
                                <td>{{ $orangtua->no_telp }}</td>
                                <td>{{ $orangtua->alamat }}</td>
                                <td>
                                    <select name="id_anak" id="id_anak" class="">
                                        @foreach ($orangtua->anak as $anak)
                                            <option value="{{ $anak->id }}">{{ $anak->nama }}</option>
                                        @endforeach
                                    </select>
                                 </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('orangtua.edit', $orangtua->id) }}" class="btn btn-warning btn-sm mr-2 text-white">Edit</a>
                                        <form action="{{ route('imunisasi.destroy', $orangtua->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        <a href="{{ route('orangtua.edit', $orangtua->id) }}" class="btn btn-success btn-sm ml-2 text-white">Tambah Anak</a>
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