<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['store_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Store Owner</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="store_id" value="<?php echo $row['store_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="store_name" value="<?php echo $row['store_name']; ?>">
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Owner</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="store_owner" value="<?php echo $row['store_owner']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Age</label>
                    </div>
                    <div class="col-sm-10">
                        <input name="sell_age" type="Number" class="form-control" value="<?php echo $row['sell_age']; ?>">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Gender</label>
                    <div class="form-select">
                        <select name="sell_gender" id="" class="form-control">
                            <option value="F">Female</option>
                              <option value="M">Male</option>
                              <option value="X">Secret</option>
                                </select>
                      </div>
                      </div>
                      </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Contact #</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sell_contact" value="<?php echo $row['sell_contact']; ?>">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Email Address</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sell_email" value="<?php echo $row['sell_email']; ?>">
                    </div>
                </div>

                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Status</label>
                    <div class="form-select">
                        <select name="status" id="" class="form-control">
                            <option value="Active">Active</option>
                              <option value="Maintenance">Maintenance</option>
                                </select>
                      </div>
                      </div>
                      </div>

            </div> 
			</div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>
