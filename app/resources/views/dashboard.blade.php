@extends('layouts.app')

@section('main')
  @if (session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
  @endif
  <div id="dashboard"></div>
  
@endsection

@section('scripts')

  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  
@endsection
