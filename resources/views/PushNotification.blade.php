@extends('admin.admin')

@section('content-management', 'active')
@section('push-notif', 'active')
{{-- @section('title', 'User Mobile') --}}

@section('content')

<h3 class="box-title">Content Management Push Notification </h3>

<div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm-3">
        <a href="#" class="add-push-notif btn btn-block btn-primary">Create Push Notification</a><br>    
    </div>
</div>

 <!-- TableUserCMS -->
 <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Push Notification</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="push-notif"class="table table-bordered">
        <thead>
        <tr>
            <th>MESSAGE</th>
            <th>CODE NOTIFICATION</th>
            <th>CREATED DATE</th>
            <th>UPDATED DATE</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($PushNotifications as $PushNotification)

            <tr>
                <td><span>{{$PushNotification->Message}}</span></td>
                <td><span>{{$PushNotification->CodeNotif}}</span></td>
                <td><span>{{$PushNotification->CreatedDate}}</span></td>
                <td><span>{{$PushNotification->UpdatedDate}}</span></td>
                <td>
                <span>
                    <a href="#" data-id="{{ $PushNotification->id}}" class="update-push-notif btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>  
                    <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ $PushNotification->id}}')"><i class="fa fa-trash"></i></a>
                </span>
                </td>
            </tr>   
                            
            @endforeach       
        </tbody>
        </table>
    </div>
 </div>
<!-- page script -->
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
          
          //EDIT
          $('.update-push-notif').on('click',function(){
                  var id = $(this).attr('data-id');
                  console.log(id);
                  $.ajax({
                      url:"{{asset('/PushNotification/get')}}/"+id,
                      success: function (data){
                          console.log(data);
                          $('[name="push_notif_id_update"]').val(data.id);
                          $('[name="push_notif_Message_update"]').val(data.Message);
                          $('[name="push_notif_CodeNotif_update"]').val(data.CodeNotif);
                          $('[name="push_notif_CratedDate_update"]').val(data.CreatedDate);
                          $('[name="push_notif_UpdatedDate_update"]').val(data.UpdatedDate);
                      },
                      dataType:'JSON'
                  });
                  $('#update-push-notification').modal();
              });
      
          //ADD
          $('.add-push-notif').on('click',function(){
                  $('#add-push-notification').modal();     
          });

        }) 

          //DELETE
          function confirmDelete(id){
              var conf = confirm ('Are you sure delete this data ?')
          if(conf==true){
              // console.log('will delete data !!');
          window.location="{{asset('PushNotification/delete')}}/"+id;
          }
          return false;
          }
      </script>

@include('modal.add_push_notification')
@include('modal.update_push_notification')

@endsection






