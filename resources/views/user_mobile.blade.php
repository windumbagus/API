@extends('admin.admin') 

{{-- @section('masteractive', 'active')
@section('user-mobile-active', 'active')
@section('title', 'User Mobile') --}}

@section('content')
<!-- DataTables -->
<link rel="stylesheet" href="assets/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<h4 class="box-title">ini adalah content User Mobile</h4>

<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">User Mobile</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2"class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>NIK</th>
            <th>NPWP</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td><span>Nama Saya Siapa Hayo?</span></td>
            <td><span>Username Saya apa?</span></td>
            <td><span>8749236532739</span></td>
            <td><span>111111111111</span></td>
            <td><span class="badge bg-green">Active</span></td>
            <td>
              <span>
                  <a href="#" class="view-category btn btn-info btn-sm"><i class="fa fa-align-left"></i></a>
                  <a href="#" class="update-category btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
              </span>
            </td>

          </tr>
        </tbody>
        </table>
    </div>

@endsection 

<!-- jQuery 3 -->
<script src="assets/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>

<!-- DataTables -->
<script src="assets/adminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/adminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/adminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/adminLTE/dist/js/demo.js"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example2').DataTable()
  })
</script>

