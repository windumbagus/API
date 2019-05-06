@extends('admin.admin') 
{{-- 
@section('masteractive', 'active')
@section('user-mobile-active', 'active')
@section('title', 'User Mobile') --}}

@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="assets/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


<h3 class="box-title">ini adalah content User CMS</h3>
<div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-block btn-primary">Create User</button><br>   
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
            <th style="width: 10px">No.</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile Phone</th>
            <th>Is Active</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td><span>Windu Muhammad Bagus</span></td>
                <td><span>windumbagus</span></td>
                <td><span>windumbagus@gmail.com</span></td>
                <td><span>08123456789</span></td>
                <td><span class="badge bg-green">Active</span></td>
                <td>
                <span>
                    <a href="#" class="view-category btn btn-info btn-sm"><i class="fa fa-align-left"></i></a>
                    <a href="#" class="update-category btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </span>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td><span>Irsyad Hafizh</span></td>
                <td><span>irsyadhafizh</span></td>
                <td><span>irsyadhafizh@gmail.com</span></td>
                <td><span>081987654321</span></td>
                <td><span class="badge bg-red">InActive</span></td>
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

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>