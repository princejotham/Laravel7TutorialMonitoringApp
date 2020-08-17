@extends('layouts.admin')

@section('title')
  Dashboard
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

  <!-- Total of Content -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total of Content</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
          </div>
          <div class="col-auto">
            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
            <i class="fa fa-book fa-2x text-gray-300" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total of Membership -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total of Membership</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-address-card fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Membership Attendance -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Membership Attendance</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-info fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total of Teachers -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total of Teachers</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-user fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Membership Schedule Due Date -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Membership Schedule Due Date</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
          </div>
          <div class="col-auto">
            <i class="fa fa-table fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Previous Member</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="previous-member" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Cooperative Company</th>
            <th>Name</th>
            <th>ID</th>
            <th>Email Address</th>
            <th>Phone No.</th>
            <th>Date</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>#</th>
            <th>Cooperative Company</th>
            <th>Name</th>
            <th>ID</th>
            <th>Email Address</th>
            <th>Phone No.</th>
            <th>Date</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>10</td>
            <td>oe</td>
            <td>Jeong Hoon Ahn</td>
            <td>oephone</td>
            <td>lumpen88@naver.com</td>
            <td>010-3123-9814</td>
            <td>6/16/2020</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection