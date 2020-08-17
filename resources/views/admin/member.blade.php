@extends('layouts.admin')

@section('title')
  Member Management
@endsection

@section('stylesheet')
  <!-- Datatables CSS -->
  <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Member Management</h1>
</div>

<!-- DataTales Member -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Member List</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTableMember" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
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
    $('#dataTableMember').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('memberlist') }}",
      columns: [
        { data: 'id', name: 'id' },
        { data: 'username', name: 'username' }
      ]
    });
  });
</script>
@endsection