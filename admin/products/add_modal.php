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
						<label class="control-label modal-label">Item name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item details</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_details" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item code</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_code" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category ID</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cat_id" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Store ID</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="store_id" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item price</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_price" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="status" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category display</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cat_display" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Featured</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Featured" required>
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