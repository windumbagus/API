@extends('admin.admin') 

@section('debug', 'active')
@section('debug-role-management', 'active')
{{-- @section('title', 'User Mobile') --}}

@section('content')

<h3 class="box-title">Debug Role Management</h3>

<div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm-2">
        <a href="#" class="add-role-management btn btn-block btn-primary">Create Role</a><br>    
    </div>
</div>
    

 <!-- TableUserCMS -->
 <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Role Management</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="push-notif"class="table table-bordered">
        <thead>
        <tr>
            <th>ROLE NAME</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($RoleManagements as $RoleManagement)

            <tr>
                <td><span>{{$RoleManagement->RoleName}}</span></td>
                <td>
                <span>
                    <a href="#" data-id="{{ $RoleManagement->id}}" class="update-role-management btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>  
                    <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ $RoleManagement->id}}')"><i class="fa fa-trash"></i></a>
                </span>
                </td>
            </tr>   
                            
            @endforeach       
        </tbody>
        </table>
    </div>
 </div>

 <script>
    $(function () {
        // $('#example1').DataTable()
        $('#push-notif').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })  
        
        //ADD
        $('.add-role-management').on('click',function(){
                $('#add-role-management').modal();     
        });

        //EDIT
        $('.update-role-management').on('click',function(){
                var id = $(this).attr('data-id');
                console.log(id);
                $.ajax({
                    url:"{{asset('/debug_role_management/get')}}/"+id,
                    success: function (data){
                        console.log(data);
                        $('[name="role_management_id_update"]').val(data.id);
                        $('[name="role_management_name_update"]').val(data.RoleName);
                    },
                    dataType:'JSON'
                });
                $('#update-role-management').modal();
            });
    
        
    }) 

        //DELETE
        function confirmDelete(id){
            var conf = confirm ('Are you sure delete this data ?')
        if(conf==true){
            // console.log('will delete data !!');
        window.location="{{asset('debug_role_management/delete')}}/"+id;
        }
        return false;
        }
</script>

@include('modal.add_role_management')
@include('modal.update_role_management')

    
@endsection 

