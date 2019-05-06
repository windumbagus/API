<!-- Modal ADD -->
<div class="modal fade" id="add-master-gcm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">Add Push Notification</h5> --}}
                </div>
                <div class="modal-body">
                    <div class="box box-info">
                            <div class="box-header">
                                <i class="fa fa-database"></i>
                        
                                <h3 class="box-title">Add Master GCM</h3>
                                <!-- tools box -->
                                <!-- /. tools -->
                            </div>
                            <div class="box-body">
                                <form action="#" method="post"> 
                                @csrf	
                                <div class="form-group">
                                    <input type="hidden" name="push_notif_id_add"/>
                                </div>
                                <div class="form-group">
                                    <label>Key GCM :</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="Key GCM">
                                </div>
                                <div class="form-group">
                                        <label>Condition :</label>
                                        <select class="form-control">
                                            <option>Condition 1</option>
                                            <option>Condition 2</option>
                                            <option>Condition 3</option>
                                            <option>Condition 4</option>
                                            <option>Condition 5</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>No SR :</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="No SR">
                                </div>
                                <div class="form-group">
                                    <label>Sort Number :</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="Sort Number">
                                </div>
                                <div class="form-group">
                                    <label>DESC GCM :</label>
                                    <input type="text" class="form-control" name="push_notif_Message_add"
                                    placeholder="DESC GCM">
                                </div>
                                <div class="form-group">
                                    <label>CD Value 1:</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="CD Value 1">
                                </div>
                                <div class="form-group">
                                    <label>Char Value 1 :</label>
                                    <textarea type="text" class="form-control" name="push_notif_Message_add"
                                    placeholder="Char Value 1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>CD Value 2:</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="CD Value 2">
                                </div>
                                <div class="form-group">
                                    <label>Char Value 2 :</label>
                                    <textarea type="text" class="form-control" name="push_notif_Message_add"
                                    placeholder="Char Value 2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>CD Value 3:</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="CD Value 3">
                                </div>
                                <div class="form-group">
                                    <label>Char Value 3 :</label>
                                    <textarea type="text" class="form-control" name="push_notif_Message_add"
                                    placeholder="Char Value 3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>CD Value 4:</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="CD Value 4">
                                </div>
                                <div class="form-group">
                                    <label>Char Value 4 :</label>
                                    <textarea type="text" class="form-control" name="push_notif_Message_add"
                                    placeholder="Char Value 4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>From Value :</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="From Value">
                                </div>
                                <div class="form-group">
                                    <label>To Value :</label>
                                    <input type="number" class="form-control" name="push_notif_Message_add"
                                    placeholder="To Value">
                                </div>                            
                                <div class="form-group">
                                    <label>From Due Date :</label>                                
                                    <input type="date" class="form-control" name="push_notif_CratedDate_add"
                                    placeholder="From Due Date">
                                </div>
                                <div class="form-group">
                                    <label>To Due Date :</label>                                
                                    <input type="date" class="form-control" name="push_notif_UpdatedDate_add"
                                    placeholder="To Due Date">
                                </div>       
                                <div class="form-group">
                                    <label>Flag Active :</label>                                
                                    <input type="checkbox" class="checkbox  " name="push_notif_UpdatedDate_add">
                                </div>       
                                <div class="form-group">
                                    <label>Flag View :</label>                                
                                    <input type="checkbox" class="checkbox  " name="push_notif_UpdatedDate_add">
                                </div>       
                                <div class="form-group">
                                    <label>CD SP :</label>                                
                                    <input type="text" class="form-control" name="push_notif_UpdatedDate_add">
                                </div>           
                                <div class="form-group">
                                    <label>Is Active :</label>                                
                                    <input type="checkbox" class="checkbox  " name="push_notif_UpdatedDate_add">
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


