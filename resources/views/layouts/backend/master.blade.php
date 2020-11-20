<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title') | GLIL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
  {{-- Summernote --}}
  <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
  <link rel="stylesheet" href="{{asset('css/summernote-bs4.css')}}">
  {{-- Summernote --}}
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  {{-- Foysal --}}
  <link rel="stylesheet" href="{{asset('css/customize.css')}}">
  @yield('css')
  <meta name="theme-color" content="#fafafa">
</head>

<body class="position-relative">
  <div class="container-fluid px-0">

    @include('layouts.backend.sidebar')

    <main class="main-full-body bg-light">
      <!-- Theme changer -->
      <div class="theme-option p-4">
        <div class="theme-pck">
          <i class="fas fa-cog fa-lg"></i>
        </div>
        <p>Navbar:</p>
        <div class="side-nav-themes d-flex flex-row">
          <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
          <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
        </div>
      </div>
      <!-- The navbar -->
      <nav class="navbar navbar-expand navbar-light bg-light py-3">
        <p class="navbar-brand mb-0 pb-0">
          <span></span>
          <span></span>
          <span></span>
        </p>
        <!-- Navbar right menu section -->
        <div class="navb-menu ml-auto d-flex flex-row">
          <!-- Profile action dropdown -->
          <div class="dropdown dropdown-arow-none d-contents text-center mx-2">
            <!-- Icon -->
            <a href="#" class="w-100 dropdown-toggle text-muted mr-5" data-toggle="dropdown"><i
                class="far fa-user mr-1 profile-avatar"></i>{{ Auth::user()->name }}</a>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-max-height">
              <!-- Menu items -->
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            </div>
          </div>
        </div>
      </nav>

      @yield('content')

    </main>
    <!-- Footer section -->
    <footer class="footer-full-body p-4 d-flex flex-row justify-content-between text-secondary">
      <p>&copy; Copyright. <a href="https://www.beatnik.technology" target="_Blank">Beatnik Technology Limited</a></p>
      <p>Version 1.0.0</p>
    </footer>
  </div>

  <script src="{{ asset('js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js') }}"></script>
  <script src="{{ asset('js/vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/vendor/popper-js/popper1.14.7.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap-4.3.1/bootstrap.min.js') }}"></script>
  <!-- Data Table -->
  <script src="{{ asset('./js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script>
  <!-- Data Table script -->
  <script src="{{ asset('./js/plugins/dataTable_script.js') }}"></script>

  {{-- Summernote js --}}
  <script src="{{asset('js/summernote.js')}}"></script>
  <script src="{{asset('js/summernote-bs4.js')}}"></script>
  {{-- Summernote js --}}

  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  @stack('scripts')
</body>

</html>