<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="store_name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Owner</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="store_owner" required>
					</div>
				</div>
				 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Age</label>
                    </div>
                    <div class="col-sm-10">
                        <input name="sell_age" type="Number" class="form-control">
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
                        <label class="control-label modal-label">Address ID</label>
                    </div>
                    <div class="col-sm-10">
                        <input name="add_id" type="Number" class="form-control" >
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact #</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sell_contact" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sell_email" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>