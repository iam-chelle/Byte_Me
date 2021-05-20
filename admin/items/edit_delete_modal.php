<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['item_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Item</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="item_id" value="<?php echo $row['item_id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>">
					</div>
				</div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Details</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="item_details" value="<?php echo $row['item_details']; ?>">
                    </div>
                </div>
               <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Price</label>
                    </div>
                    <div class="col-sm-10">
                        <input name="item_price" type="Number" class="form-control" value="<?php echo $row['item_price']; ?>">
                    </div>
                </div>
              
                      <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Image</label>
                    </div>
                    <div class="col-sm-10">
                         <input name="item_img" type="file" class="form-control" alue="<?php echo $row['item_img']; ?>">
                    </div>
                </div>
                  <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Cat_display</label>
                    <div class="form-select">
                        <select name="cat_display" id="" class="form-control">
                            <option value="0">0</option>
                              <option value="1">1</option>
                                </select>
                      </div>
                      </div>
                      </div>
                 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Featured</label>
                    <div class="form-select">
                        <select name="Featured" id="" class="form-control">
                            <option value="0">0</option>
                              <option value="1">1</option>
                                </select>
                      </div>
                      </div>
                      </div>

                      <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Status</label>
                    <div class="form-select">
                        <select name="status" id="" class="form-control">
                            <option value="A">A</option>
                              <option value="D">D</option>
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

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['item_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete item</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['item_name'].' '.$row['item_code']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['item_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
