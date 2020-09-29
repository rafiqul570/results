<?php
session_start();
if (! isset($_SESSION['login'])){
header ('Location:login/login.php');
}?>
<?php 
include('include/header.php');
include('include/connect.php');
$con = connectBD();
$sql = "SELECT * from results";
 $result = mysqli_query($con,$sql);
?>
<div class="container box">
<div class="row">
<div class="col-md-2"></div>
	<div class="col-md-10">
	<br><br>
	<h3 style="text-align: center;background: green;color: white;">RESULT SHEET</h3>

	<table id="example" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Roll</th>
				<th>Name</th>
				<th>Class</th>
				<th>GPA</th>
				<th>Result</th>
				<th width="200">Action</th>
			</tr>
		</thead>
		<tbody>
	    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $row['roll'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['class'];?></td>
				<td><?php echo $row['total_gpa2'];?></td>
				<td style="color: red"><?php echo $row['result'];?></td>
				<td>
				<a class="btn btn-info btn-sm" href="edit.php?
				id=<?php echo $row ['id']; ?>">Edit</a>
			    <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
			    <a class="btn btn-success btn-sm" href="view.php">View</a>
			   </td>
			</tr>
		 <?php } ?>
		</tbody>
		<tfoot>
			<tr><td></td></tr>
		</tfoot>
	</table>
  </div>
 </div>
</div>

<?php include('include/footer.php');?>