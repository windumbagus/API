<!-- Modal ADD -->
<div class="modal fade" id="add-push-notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title">Add Push Notification</h5> --}}
            </div>
            <div class="modal-body">
                <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-database"></i>
                    
                            <h3 class="box-title">Add Push Notification</h3>
                            <!-- tools box -->
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <form action="{{asset('/PushNotification/save')}}" method="post"> 
                            @csrf	
                            <div class="form-group">
                                <input type="hidden" name="push_notif_id_add"/>
                            </div>
                            <div class="form-group">
                                <label>Message :</label>
                                <input type="text" class="form-control" name="push_notif_Message_add"
                                placeholder="Message">
                            </div>
                            <div class="form-group">
                                <label>Notification Code :</label>
                                <input type="text" class="form-control" name="push_notif_CodeNotif_add"
                                placeholder="Notivication Code">
                            </div>
                            <div class="form-group">
                                <label>Created Date :</label>                                
                                <input type="date" class="form-control" name="push_notif_CratedDate_add"
                                placeholder="Created Date">
                            </div>
                            <div class="form-group">
                                <label>Updated Date :</label>                                
                                <input type="date" class="form-control" name="push_notif_UpdatedDate_add"
                                placeholder="Updated Date">
                            </div>
    
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="pull-right btn btn-success">
                        <b>Submit</b><i class="save fa fa-send-o"></i></button>					
            </div>
        </form>			
        </div>
    </div>
</div>
