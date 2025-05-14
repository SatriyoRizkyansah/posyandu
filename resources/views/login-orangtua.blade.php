<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Posyandu</title>
    {{-- Logo --}}
  <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png"> 
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
  <style>
    body {
      background: linear-gradient(135deg, #A0C97A, #5F8051);
      min-height: 100vh;
    }

    .auth-form-light {
      position: relative;
      padding-top: 80px !important;
    }

    .brand-logo {
      position: absolute;
      top: -60px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 100px;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .brand-logo img {
      width: 60px;
    }

    .auth-form-btn {
      background-color: #4CAF50;
      border: none;
    }

    .auth-form-btn:hover {
      background-color: #45a049;
    }

  </style>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background: linear-gradient(135deg, #b6db94, #5F8051);">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">

            @if (session('loginError'))
              <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                {{ session('loginError') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show mb-5 text-white" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('images/logo/logo.png') }}" alt="logo">
              </div>
              <h3 class="text-center font-weight-bold ">Posyandu<br>Mawar Indah IX</h3>
              <h6 class="font-weight-light text-center my-4">Silakan masuk menggunakan akun Anda</h6>

              <form method="POST" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nik" placeholder="Username">
                </div>
                <div class="form-group position-relative">
                  <input type="password" class="form-control form-control-lg" name="no_telp" placeholder="Password">
                  <!-- Optional: icon visibility bisa ditambahkan di sini -->
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-lg font-weight-medium auth-form-btn text-white">Masuk</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
</body>
</html>
