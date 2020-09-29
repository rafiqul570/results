<?php 
include('include/header.php');
include('include/connect.php');
$con = connectBD();
if(isset($_POST['class'])){
$class = $_POST['class'];	
$roll = $_POST['roll'];
$year = $_POST['year'];
$sql = "SELECT * from results WHERE class = '$class' AND roll = '$roll' 
AND year = '$year'";
 $result = mysqli_query($con,$sql);
?>

<div class="row">
<div class="col-md-3"></div>
	<div class="col-md-8">
	<br><br>
	<h3 style="text-align: center;background: green;color: white;">RESULT SHEET</h3>

	<table class="table table-bordered table-striped">
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
	 <tr>
		<th>Name</th>
		<td><?php echo $row['name'];?></td>
		<th>Class</th>
		<td><?php echo $row['class'];?></td>
	 </tr>
	 <tr>
		<th>Roll</th>
		<td><?php echo $row['roll'];?></td>
		<th>Year</th>
		<td><?php echo $row['year'];?></td>
	 </tr>
	</table>
	<h6 align="center">Mark sheet</h6>	
    <table class="table table-bordered table-striped">
		<tr style="color: green;text-align: center;">
			<th>Sl.No.</th>
			<th>Name of Subjects</th>
			<th>Marks</th>
			<th>Letter Grade</th>
			<th>Grade Point</th>
			<th width="150">GPA<p style="font-size: 10px;">(without additional subject)</p></th>
			<th width="100" align="center">GPA</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Bangla</td>
			<td><?php echo $row['ban'];?></td>
			<td><?php echo $row['gr_ban'];?></td>
			<td><?php echo $row['gpa_ban'];?></td>
			<td rowspan="4" style="padding-top: 90px; text-align: center;">
				<?php echo $row['total_gpa1'];?></td>
			<td rowspan="6" style="padding-top: 90px; text-align: center;">
				<?php echo $row['total_gpa2'];?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>English</td>
			<td><?php echo $row['eng'];?></td>
			<td><?php echo $row['gr_eng'];?></td>
			<td><?php echo $row['gpa_eng'];?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Math</td>
			<td><?php echo $row['math'];?></td>
			<td><?php echo $row['gr_math'];?></td>
			<td><?php echo $row['gpa_math'];?></td>
		</tr>
		<tr>
			<td colspan="5" style="color: green">Additional Subject :</td>
			
		</tr>
		<tr>
			<td>4</td>
			<td>Agriculture Studies</td>
			<td><?php echo $row['ag'];?></td>
			<td><?php echo $row['gr_ag'];?></td>
			<td><?php echo $row['gpa_ag'];?></td>
			<td align="center"><span style="color: green">(GP above 2)</span><br>
				<?php echo $row['gpa_2_ag'];?></td>
		</tr>
		<tr>
			<td colspan="5"> <p style="margin-left: 170px;">(Total Marks = 
				<?php echo $row['obtmark'];?> )</p></td>
			<td colspan="6" style="text-align: center;color: red;font-size: 20px;">
				<?php echo $row['result']; ?></td>
		</tr>
	 <?php } ?>
	</table>
  <?php } ?>
</div>
</div>
<?php include('include/footer.php')?>