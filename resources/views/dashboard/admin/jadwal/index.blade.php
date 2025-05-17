@extends('partials.app')
@section('content')
<div class="content-wrapper" style="background-color: #CDE6B4">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jadwal Posyandu</h4>
            {{-- <p class="card-description">Upload jadwal posyandu disini</p> --}}
            <form class="forms-sample" action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label>File upload</label>
                <div class="input-group col-xs-12">
                    <input type="file" name="gambar" id="file-upload" style="display: none;" onchange="updateFileName()" />
                    
                    <input type="text" class="form-control file-upload-info" id="file-upload-filename" placeholder="Upload jadwal posyandu disini" disabled />
                    
                    <span class="input-group-append">
                    <button class="file-upload-browse btn btn-success" type="button" onclick="document.getElementById('file-upload').click()">Upload</button>
                    </span>
                </div>
                </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>

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

@section('script')
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../js/settings.js"></script>
@endsection