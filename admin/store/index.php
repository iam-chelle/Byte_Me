<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>

		<style>
			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  overflow: hidden;
			  background-color: #98FB98;
			}

			li {
			  float: left;
			}

			li a {
			  display: block;
			  padding: 8px;
			}

			</style>
</head>
<body>


		<ul>
		 <li><a href="../index.php">Home</a></li>
		  <li><a href="../items/index.php">Products</a></li>
		  <li><a href="../category/index.php">Category</a></li>
		   <li><a href="../store_add/index.php">Store Location</a></li>
		  <li><a href="../store/index.php">Store Owners</a></li>
		  <li><a href="../customer/index.php">Customers</a></li>
		  <li><a href="../orders/index.php">Orders</a></li>
		   <li><a href="../report.php">Sales Report</a></li>
		 
		</ul>

<div class="container">
	<h1 class="page-header text-center">Store Owner</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Store ID</th>
						<th>Store Name</th>
						<th>Owner</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Contact Number</th>
						<th>Email Address</th>
						<th>Address</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT store.*, storeadd.add_desc
											FROM store 
											JOIN storeadd 
											ON store.add_id = storeadd.add_id;";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['store_id']."</td>
									<td>".$row['store_name']."</td>
									<td>".$row['store_owner']."</td>
									<td>".$row['sell_age']."</td>
									<td>".$row['sell_gender']."</td>
									<td>".$row['sell_contact']."</td>
									<td>".$row['sell_email']."</td>
									<td>".$row['add_desc']."</td>
									<td>".$row['status']."</td>
									
					
									<td>
										<a href='#edit_".$row['store_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span>Update</a>
										
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
<<footer><div class="PP"><p>Sue and Venir</p></div></footer>
<<style>
.PP{
	text-align: center;
}
</style>
</html>