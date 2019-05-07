<!-- Modal ADD -->
<div class="modal fade" id="update-role-management" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-database"></i>
                    
                            <h3 class="box-title">Update Role Management</h3>
                            <!-- tools box -->
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <form action="{{asset('/debug_role_management/update')}}" method="post"> 
                            @csrf	
                            <div class="form-group">
                                <input type="hidden" name="role_management_id_update"/>
                            </div>
                            <div class="form-group">
                                <label>Role Name :</label>
                                <input type="text" class="form-control" name="role_management_name_update"
                                placeholder="Role Name " required>
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
    