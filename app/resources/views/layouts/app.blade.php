<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
    @yield('styles')
</head>
<body id="page-top">
    @include('layouts.header')
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div id="content-wrapper">

            <div class="container-fluid">
                
                <!-- Main Content -->
                @section('main')
                @show

            </div>

            <!-- Sticky Footer -->
            @include('layouts.footer')

        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        @include('layouts.modal')
        
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

        <!-- React -->
        <script src="{{ asset('js/app.js') }}"></script>
        
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin.min.js') }}"></script>
        
        @yield('scripts')

    </div>
</body>
</html>
