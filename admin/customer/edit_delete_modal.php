<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['cust_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Customer</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="cust_id" value="<?php echo $row['cust_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cust_name" value="<?php echo $row['cust_name']; ?>">
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Age</label>
                    </div>
                    <div class="col-sm-10">
                        <input name="cust_age" type="Number" class="form-control" value="<?php echo $row['cust_age']; ?>">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Gender</label>
                    <div class="form-select">
                        <select name="cust_gender" id="" class="form-control">
                            <option value="M">Male</option>
                              <option value="F">Female</option>
                               <option value="X">Secret</option>
                                </select>
                      </div>
                      </div>
                      </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Address</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cust_add" value="<?php echo $row['cust_add']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Contact</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cust_contact" value="<?php echo $row['cust_contact']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Email</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cust_email" value="<?php echo $row['cust_email']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Status</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>">
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
