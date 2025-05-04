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
                    <h4 class="card-title">Data Perkembangan Anak</h4>
                    {{-- <p class="card-description">Add class <code>.table-striped</code></p> --}}

                    <a href="{{ route('perkembangan.create') }}" class="btn btn-success btn-sm mb-4">
                        Tambah
                    </a>

                    <div class="table-responsive">
                      <table class="table" id="myTable">
                        <thead>
                          <tr>
                            <th>Nama Anak</th>
                            <th>Tanggal Posyandu</th>
                            <th>Berat Badan</th>
                            <th>Ket BB</th>
                            <th>Tinggi Badan</th>
                            <th>Ket TB</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($perkembanganAnak as $perkembangan)
                            <tr>
                                <td>{{ $perkembangan->anak->nama }}</td>
                                <td>{{ $perkembangan->tanggal_posyandu }}</td>
                                <td>{{ $perkembangan->berat_badan }} KG</td>
                                <td>{{ $perkembangan->ket_bb }}</td>
                                <td>{{ $perkembangan->tinggi_badan }} CM</td>
                                <td>{{ $perkembangan->ket_tb }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('perkembangan.edit', $perkembangan->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                         
                                        <form action="{{ route('perkembangan.destroy', $perkembangan->id) }}" method="POST">
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