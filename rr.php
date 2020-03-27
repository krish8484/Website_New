<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>
<?php 
	$db_user_id1 = 11810179;
	$query = "SELECT * FROM `level2` WHERE 1";
	$result = mysqli_query($con, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
	?>
	<h1><b>Administration</b></h1>
	<?php
	$i = 1;?>
	<table>
		<tr>
		<td>NO</td>
		<td>GRNO</td>
		<td>Name</td>
		<td>Email</td>
		<td>Number</td>
		<td>Branch</td>		
		<td>Year</td>
		<td>division</td>
		<td>roll_no</td>
		<td>Domain</td>
		<td>ans1</td>
		<td>ans2</td>
		<td>ans3</td>

	</tr>
		<?php
	while ($row = mysqli_fetch_array($result)) 
		{
			if(strpos($row['Domain'], 'Administration') !== false)
			{
			?>
		<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['GRNO']; ?></td>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Number']; ?></td>
		<td><?php echo $row['Branch']; ?></td>
		<td><?php echo $row['Year']; ?></td>
		<td><?php echo $row['division']; ?></td>
		<td><?php echo $row['roll_no']; ?></td>
		<td><?php echo $row['Domain']; ?></td>
		<td><?php echo $row['ans1']; ?></td>
		<td><?php echo $row['ans2']; ?></td>
		<td><?php echo $row['ans3']; ?></td>
	</tr><?php
	}
	}?>
</table>
<?php
$query = "SELECT * FROM `level2` WHERE 1";
	$result = mysqli_query($con, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
	?>
	<h1><b>Programming</b></h1>
	<?php
	$i = 1;?>
	<table>
		<tr>
		<td>NO</td>
		<td>GRNO</td>
		<td>Name</td>
		<td>Email</td>
		<td>Number</td>
		<td>Branch</td>		
		<td>Year</td>
		<td>division</td>
		<td>roll_no</td>
		<td>Domain</td>
		<td>ans1</td>
		<td>ans2</td>
		<td>ans3</td>

	</tr>
		<?php
	while ($row = mysqli_fetch_array($result)) 
		{
			if(strpos($row['Domain'], 'Programming') !== false)
			{
			?>
		<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['GRNO']; ?></td>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Number']; ?></td>
		<td><?php echo $row['Branch']; ?></td>
		<td><?php echo $row['Year']; ?></td>
		<td><?php echo $row['division']; ?></td>
		<td><?php echo $row['roll_no']; ?></td>
		<td><?php echo $row['Domain']; ?></td>
		<td><?php echo $row['ans1']; ?></td>
		<td><?php echo $row['ans2']; ?></td>
		<td><?php echo $row['ans3']; ?></td>
	</tr><?php
	}
	}?>
</table>
<?php
$query = "SELECT * FROM `level2` WHERE 1";
	$result = mysqli_query($con, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
	?>
	<h1><b>Electronics</b></h1>
	<?php
	$i = 1;?>
	<table>
		<tr>
		<td>NO</td>
		<td>GRNO</td>
		<td>Name</td>
		<td>Email</td>
		<td>Number</td>
		<td>Branch</td>		
		<td>Year</td>
		<td>division</td>
		<td>roll_no</td>
		<td>Domain</td>
		<td>ans1</td>
		<td>ans2</td>
		<td>ans3</td>

	</tr>
		<?php
	while ($row = mysqli_fetch_array($result)) 
		{
			if(strpos($row['Domain'], 'Electronics') !== false)
			{
			?>
		<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['GRNO']; ?></td>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Number']; ?></td>
		<td><?php echo $row['Branch']; ?></td>
		<td><?php echo $row['Year']; ?></td>
		<td><?php echo $row['division']; ?></td>
		<td><?php echo $row['roll_no']; ?></td>
		<td><?php echo $row['Domain']; ?></td>
		<td><?php echo $row['ans1']; ?></td>
		<td><?php echo $row['ans2']; ?></td>
		<td><?php echo $row['ans3']; ?></td>
	</tr><?php
	}
	}?>
</table>
<?php
$query = "SELECT * FROM `level2` WHERE 1";
	$result = mysqli_query($con, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
	?>
	<h1><b>Mechanical</b></h3>
	<?php
	$i = 1;?>
	<table>
		<tr>
		<td>NO</td>
		<td>GRNO</td>
		<td>Name</td>
		<td>Email</td>
		<td>Number</td>
		<td>Branch</td>		
		<td>Year</td>
		<td>division</td>
		<td>roll_no</td>
		<td>Domain</td>
		<td>ans1</td>
		<td>ans2</td>
		<td>ans3</td>

	</tr>
		<?php
	while ($row = mysqli_fetch_array($result)) 
		{
			if(strpos($row['Domain'], 'Mechanical') !== false)
			{
			?>
		<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['GRNO']; ?></td>
		<td><?php echo $row['Name']; ?></td>
		<td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Number']; ?></td>
		<td><?php echo $row['Branch']; ?></td>
		<td><?php echo $row['Year']; ?></td>
		<td><?php echo $row['division']; ?></td>
		<td><?php echo $row['roll_no']; ?></td>
		<td><?php echo $row['Domain']; ?></td>
		<td><?php echo $row['ans1']; ?></td>
		<td><?php echo $row['ans2']; ?></td>
		<td><?php echo $row['ans3']; ?></td>
	</tr><?php
	}
	}?>
</table>

	<?php
		
	 echo "KRish Agarwal";
	 ?>

