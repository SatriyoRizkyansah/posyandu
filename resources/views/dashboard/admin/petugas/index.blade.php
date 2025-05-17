@extends('partials.app')

@section('head')
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
          <h4 class="card-title">Data Petugas</h4>          
          <button onclick="captureTable()" class="btn btn-success btn-sm hide-on-capture">Cetak</button>
          <a href="{{ route('petugas.create') }}" class="btn btn-success btn-sm hide-on-capture">+ tambah</a>
          <div class="table-responsive pt-3">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Username
                  </th>
                  <th>
                    Password
                  </th>
                  <th class="hide-on-capture">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
              </tbody>
              @if($petugas->count() > 0)
            <tbody>
                @foreach($petugas as $index => $p)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        {{-- <td>{{ $p->password ? decrypt($p->password) : '' }}</td> --}}
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->password }}</td>
                        <td class="hide-on-capture">
                            <form action="{{ route('petugas.destroy', $p->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @else
            <tbody>
                <tr>
                    <td colspan="4" class="text-center">No data available</td>
                </tr>
            </tbody>
        @endif
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
  function captureTable() {
    const table = document.querySelector('.card-body');
    const hiddenEls = document.querySelectorAll('.hide-on-capture');

    // Sembunyikan kolom "Action"
    hiddenEls.forEach(el => el.style.display = 'none');

    // Screenshot
    html2canvas(table).then(function(canvas) {
      const link = document.createElement('a');
      link.download = 'data_petugas.png';
      link.href = canvas.toDataURL();
      link.click();

      // Tampilkan kembali kolom "Action"
      hiddenEls.forEach(el => el.style.display = '');
    });
  }
</script>



@endsection