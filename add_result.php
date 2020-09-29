<?php include('include/header.php')?>

<div style="margin-top: 100px" class="row">
	<div class="col-md-4"></div>
	<div class="col-md-6">
		<br>
	<h3 style="text-align: center;background: green;color: white;">Add Result</h3>
		<form action="store.php" method="post">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Name</th>
					<td><input type="text" name="name" placeholder="Name" required=""></td>
					<th>Roll</th>
					<td><input type="text" name="roll" placeholder="Roll" required=""></td>
				</tr>
				
				<tr>
					<th>Class</th>
					<td><input type="text" name="class" placeholder="Class" required=""></td>
					<th>Year</th>
					<td><input type="text" name="year" placeholder="Year" required=""></td>
				</tr>
			</table>
			<table class="table table-bordered table-striped">
				<tr>
					<th width="130">Bangla</th>
					<td><input style="width: 100%" type="text" name="ban" placeholder="Bamgla Mark" required=""></td>
				</tr>
				<tr>
					<th>English</th>
					<td><input style="width: 100%" type="text" name="eng" placeholder="English Mark" required=""></td>
				</tr>
				<tr>
					<th>Math</th>
					<td><input style="width: 100%" type="text" name="math" placeholder="Math Mark" required=""></td>
				</tr>
				<tr>
					<th>Agriculture</th>
					<td><input style="width: 100%" type="text" name="ag" placeholder="Agriculture Mark" required=""></td>
				</tr>
				</tr>
			</table>
			<button class="btn btn-info"><input type="submit" name="submit" value="Save"></button>
		</form>
	</div>
</div>
<?php include('include/footer.php')?>