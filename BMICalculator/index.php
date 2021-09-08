<?php
	include "header.php";

	$firstName = " ";
	$lastName = " ";
	$result = " ";
	$age = " ";
	$weight = 0;
	$height = 0;
	$bmi = 0;

	if($_POST){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$age = $_POST['age'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
	}

	$wei = $weight * 2.2046;
	$hei = $height * 0.39370;

	$w = $wei * 703;
	$h = $hei * $hei;
	$bmi = $w / $h;

	if($bmi <= 18.4){
		$result = "Underweight";
	}
	else if($bmi >= 18.5 and $bmi <= 24.9){
		$result = "Normal Weight";
	}
	else if($bmi >= 25 and $bmi <= 29.9){
		$result = "Overweight";
	}
	else if($bmi >= 30){
		$result = "Obesity";
	}

?>

<form action="index.php" method="POST">
	<div class="form-row">
		<div class="form-group col-md-9">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>First Name</label>
					<input type="text" class="form-control" name="firstName" value="<?php echo $firstName; ?>" required>
				</div>
				<div class="form-group col-md-6">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lastName" value="<?php echo $lastName; ?>" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<label>Age</label>
					<input type="text" class="form-control" name="age" value="<?php echo $age; ?>" required>
				</div>
				<div class="form-group col-md-4">
					<label>Weight(kg)</label>
					<input type="text" class="form-control" name="weight" value="<?php echo $weight; ?>" required>
				</div>
				<div class="form-group col-md-4">
					<label>Height(cm)</label>
					<input type="text" class="form-control" name="height" value="<?php echo $height; ?>" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4">
					<button type="submit" class="btn btn-primary">BMI Calculate</button>
					<a href="index.php"><button type="button" class="btn btn-secondary">Clear</button></a>
				</div>
			</div>
		</div>
		<div class="form-group col-md-3">
			<table class="table">
				<tr>
					<th>Full Name</th>
					<td><?php echo $firstName . " " . $lastName; ?></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><?php echo $age; ?></td>
				</tr>
				<tr>
					<th>Weight(lbs)</th>
					<td><?php echo $wei; ?></td>
				</tr>
				<tr>
					<th>Height(in)</th>
					<td><?php echo $hei; ?></td>
				</tr>
				<tr>
					<th>BMI</th>
					<td><?php echo $bmi; ?></td>
				</tr>
				<tr>
					<th>Interpretation</th>
					<td><?php echo $result; ?></td>
				</tr>
			</table>
		</div>
	</div>
</form>

<?php
	include "footer.php";
?>