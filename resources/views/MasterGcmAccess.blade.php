@extends('admin.admin') 

@section('master-management', 'active')
@section('master-gcm', 'active')
{{-- @section('title', 'User Mobile') --}}

@section('content')

<!-- DataTables -->
{{-- <link rel="stylesheet" href="assets/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> --}}

<h3 class="box-title">Content Master GCM Access</h3>

<div class="row">
<div class="col-sm-8">
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
</div><br>

<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Master GCM Access</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1"class="table table-bordered">
            <thead>
            <tr>
                <th>CONDITION</th>
                <th>ADDED DATE</th>
                <th>USER ADDED</th>
                <th>UPDATED DATE</th>
                <th>ACTION</th>
                
            </tr>
            </thead>
            <tbody>
                <tr>
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
            <button class="btn btn-warning btn-sm" onclick="history.go(-1);">Back </button>
        </div>
    
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
            })

            //ADD
            $('.add-master-gcm').on('click',function(){
                    $('#add-master-gcm').modal();     
            });
        })
    </script>
    
@endsection 