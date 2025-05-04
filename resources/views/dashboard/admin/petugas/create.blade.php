@extends('partials.app')
@section('content')
<div class="content-wrapper" style="background-color: #CDE6B4">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah data petugas</h4>
            {{-- <p class="card-description">Upload jadwal posyandu disini</p> --}}
            <form class="forms-sample" action="{{ route('petugas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
             <div class="form-group">
                <label for="exampleInputName1">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Username" name="username" />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">password</label>
                  <input type="password" class="form-control" id="password" placeholder="************" name="password" />
                </div>
              <button type="submit" class="btn btn-success mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>

      
</div>

@endsection