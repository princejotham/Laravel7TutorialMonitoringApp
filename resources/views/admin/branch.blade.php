@extends('layouts.admin')

@section('title')
  Branch Management
@endsection

@section('stylesheet')
  <!-- Datatables CSS -->
  <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Branch Management</h1>
</div>

<!-- DataTales Branch -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Branch List</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTableBranch" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Branch</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<!-- Datatable Plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
  $(document).ready( function () {
    $('#dataTableBranch').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('branchlist') }}",
      columns: [
        { data: 'id', name: 'id' },
        { data: 'branch', name: 'branch' }
      ]
    });
  });
</script>
@endsection