<?php include('include/header.php')?>
  <div class="row">
   <div class="col-md-4"></div>
	<div class="col-md-5">
	<br><br><br><br>
	<h3 style="text-align: center;background: green;color: white;">Select Student</h3>
 <form action="result.php" method="post">
	<table class="table table-bordered table-striped">
		<tr>
			<th>Class</th>
			<td><select style="width: 100%" name="class" required="">
				<option>Select</option>
				<option>Eight</option>
				<option>Ten</option>
			</select></td>
		</tr>
		<tr>
			<th>Roll</th>
			<td><input style="width: 100%" type="text" name="roll" placeholder="Roll" required=""></td>
		</tr>
		<tr>
			<th>Year</th>
			<td><select style="width: 100%" name="year" required="">
				<option>Select</option>
				<option>2020</option>
				<option>2021</option>
			</select></td>
		</tr>
	</table>
	<button class="btn btn-info"><input type="submit" name="submit" value="Save"></button>
  </form>
   </div>
</div>

<?php include('include/footer.php')?>