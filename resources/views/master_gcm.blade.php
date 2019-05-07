@extends('admin.admin') 


@section('master-management', 'active')
@section('master-gcm', 'active')
{{-- @section('title', 'User Mobile') --}}

@section('content')

<!-- DataTables -->
<link rel="stylesheet" href="assets/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<h3 class="box-title">Content Master GCM</h3>

<div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-3">
                <button type="button" class="add-master-gcm btn btn-block btn-primary"><i class="fa fa-plus"> &nbsp;Create New Master GCM</i></button>
        </div>
        <div class="col-sm-2">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-upload"> &nbsp;Upload Master GCM</i></button>
        </div>
        <div class="col-sm-3">
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-download"> &nbsp;Download Master GCM</i></button>
        </div>
        <div class="col-sm-2">
                {{-- <button type="button" class="btn btn-block btn-primary"><i class="fa fa-edit"> &nbsp;GCM Access</i></button> --}}
                <a type="button" href="{{ asset('MasterGcmAccess') }}" class=" btn btn-block btn-primary"><i class="fa fa-edit"> &nbsp;GCM Access</i></a>        
            </div>          
</div><br>

<div class="row">
        <div class="col-sm-4">
            <!-- select -->
            <div class="form-group">
                {{-- <label>--Choose Condition--</label> --}}
                <select class="form-control">
                    <option>Choose Condition</option>
                    <option>Condition 1</option>
                    <option>Condition 2</option>
                    <option>Condition 3</option>
                    <option>Condition 4</option>
                    <option>Condition 5</option>
                </select>
            </div>    
        </div>

        <div class="col-sm-4">
            <input type="search" class="form-control" placeholder="Type Keyword Here">
        </div>

        
        <div class="col-sm-4">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-block btn-info"><i class="fa fa-search"> &nbsp;Search</i></button>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-block btn-info"><i class="fa fa-undo"> &nbsp;Reset</i></button>
                </div>
        </div>
</div>

 <!-- TableUserCMS -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Master GCM</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1"class="table table-bordered">
        <thead>
        <tr>
            <th>CD VALUE 1</th>
            <th>CHARVALUE 1</th>
            <th>CD VALUE 2</th>
            <th>CHARVALUE 2</th>
            <th>CD VALUE 3</th>
            <th>CHARVALUE 3</th>
            <th>IS ACTIVE</th>
            <th>EDIT</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
                <td>TEST</td>
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

<!-- page script -->
    <script>
        $(function () {
          $('#example1').DataTable()

          //ADD
          $('.add-master-gcm').on('click',function(){
                  $('#add-master-gcm').modal();     
          });
        })
    </script>

@include('modal.add_master_gcm')
@endsection 
