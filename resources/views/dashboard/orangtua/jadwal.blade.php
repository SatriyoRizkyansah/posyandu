@extends('partials.app')
@section('content')
<div class="content-wrapper" style="background-color: #CDE6B4">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Jadwal terbaru</h4>
            
                @if(!empty($jadwal) && $jadwal->gambar)
                <img src="{{ asset('img/jadwal/'.$jadwal->gambar) }}" alt="people" class="img-fluid" style=" object-fit: cover;">
                @else
                <div>Belum ada jadwal yang di upload</div>
                @endif
            </div>
        </div>
      </div>
</div>

<script>
  function updateFileName() {
    const fileInput = document.getElementById('file-upload');
    const textInput = document.getElementById('file-upload-filename');
    textInput.value = fileInput.files[0]?.name || '';
  }
</script>
@endsection