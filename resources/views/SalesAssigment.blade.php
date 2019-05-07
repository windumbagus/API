@extends('admin.admin') 

@section('sales-assigment', 'active')
{{-- @section('user-mobile-active', 'active')
@section('title', 'User Mobile') --}}

@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="assets/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


<h3 class="box-title">ini adalah content Sales Assigment</h3>
<div class="row">
        <div class="col-sm-4">
            <!-- select -->
            <div class="form-group">
                <label>Select Area</label>
                <select class="form-control">
                    <option>Area 1</option>
                    <option>Area 2</option>
                    <option>Area 3</option>
                    <option>Area 4</option>
                    <option>Area 5</option>
                </select>
            </div>    
        </div>

        <div class="col-sm-4">
        <!-- select -->
        <div class="form-group">
                <label>Pilih Cabang</label>
                <select class="form-control">
                    <option>Cabang 1</option>
                    <option>Cabang 2</option>
                    <option>Cabang 3</option>
                    <option>Cabang 4</option>
                    <option>Cabang 5</option>
                </select>
            </div>   
        </div>

        <div class="col-sm-4">
                <div class="col-sm-6"><br>
                    <button type="button" class="btn btn-block btn-default">Search</button>
                </div>
                <div class="col-sm-6"><br>
                    <button type="button" class="btn btn-block btn-default">Reset</button>
                </div>
        </div>
</div>

 <!-- TableUserCMS -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">User CMS</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1"class="table table-bordered">
        <thead>
        <tr>
            <th>NPK</th>
            <th>User</th>
            <th>Nama</th>
            <th>Product</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>11224466</td>
                <td><span>dadang</span></td>
                <td><span>dadang</span></td>
                <td><span>Xenia</span></td>
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
    $('#example1').DataTable()
  })
</script>