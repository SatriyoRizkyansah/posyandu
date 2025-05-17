<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Posyandu Mawar Indah IX</title>

  {{-- Logo --}}
    <link rel="icon" href="{{ asset('images/logo/logo.png') }}" type="image/png"> 

  <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
    
    <!-- Plugin css for this page -->
    @yield('head')
    {{-- <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}"> --}}
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->

    <link rel="shortcut icon" href="{{ asset('images/logo/logo.png') }}">

    {{-- Bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

</head>
<body>

  <div class="container-scroller">
    <!-- partial: navbar -->
    @include('partials.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper" sty>
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        </div>
      </div>


    <!-- partial -->
    @if (Auth::guard('orangtua')->check())
        @include('partials.sidebar-orangtua')
    @else
        @include('partials.sidebar')
    @endif
    <!-- partial -->


      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const alertCloseButtons = document.querySelectorAll('.alert .close');
          alertCloseButtons.forEach(button => {
            button.addEventListener('click', function () {
              const alert = this.parentElement;
              alert.classList.remove('show');
              setTimeout(() => alert.remove(), 300); // Remove the alert after fade-out
            });
          });
        });
      </script>

      <div class="main-panel">
        
        {{-- Alert sukses --}}
        @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show mx-auto mt-3" role="alert" style="width: 98%">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert"aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
 
        {{-- Alert error --}}
        @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show"role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert"aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            
        @yield('content')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @yield('script')
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../js/settings.js"></script>
</body>
</html>

