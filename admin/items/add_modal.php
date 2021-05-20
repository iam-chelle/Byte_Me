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
						<label class="control-label modal-label">Item Name</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Details</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_details" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Item Code</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="item_code" required>
					</div>
				</div>
				<div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Category ID</label>
                    <div class="form-select">
                        <select name="cat_id" id="" class="form-control">
                            <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                         </select>
                      </div>
                      </div>
                      </div>
                          <!--   <?php 
                       
                            $sql = "SELECT * FROM `store`;";
                                $stmt = mysqli_stmt_init($conn);
                                 if (!mysqli_stmt_prepare($stmt, $sql)){
                                header("location: index.php?error=stmtfailed");
                                  exit();
                                 }
                                
                              
                                  mysqli_stmt_execute($stmt);
                                $resultData = mysqli_stmt_get_result($stmt);
                                $arr = array();
                                while($row = mysqli_fetch_assoc($resultData)){
                                array_push($arr,$row);
                              }
                                foreach ($arr as $key => $val) { ?>
                                    <div class="row form-group">
                    <div class="col-sm-2">
      <label class="control-label modal-label">Store ID</label>
                    <div class="form-select">
                        <select name="store_id" id="" class="form-control">
                            <option value="1"><?php echo $val['store_id'];?></option> 
                              <?php } ?>
                       </select>
                       
                      </div>

                      </div>
                      </div>
                       -->
                        <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Store ID</label>
                    <div class="form-select">
                        <select name="store_id" id="" class="form-control">
                            <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                             <option value="6">5</option>
                             <option value="7">5</option>
                             <option value="8">5</option>
                             <option value="9">5</option>
                             <option value="10">5</option>
                         </select>
                      </div>
                      </div>
                      </div>
                    


                       
				 <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Price</label>
                    </div>
                    <div class="col-sm-10">
                        <input name="item_price" type="Number" class="form-control">
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
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>