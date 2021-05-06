<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['item_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Products</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="edit.php">
                <input type="hidden" class="form-control" name="item_id" value="<?php echo $row['item_id']; ?>">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Item name</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="item_name" value="<?php echo $row['item_name']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Item details</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="item_details" value="<?php echo $row['item_details']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Item code</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="item_code" value="<?php echo $row['item_code']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Category ID</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cat_id" value="<?php echo $row['cat_id']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Store ID</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="store_id" value="<?php echo $row['store_id']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Item Price</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="item_price" value="<?php echo $row['item_price']; ?>">
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
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Category Display</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="cat_display" value="<?php echo $row['cat_display']; ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Featured</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Featured" value="<?php echo $row['Featured']; ?>">
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
                <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php echo $row['item_id'].' '.$row['item_name']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_products.php?id=<?php echo $row['item_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>