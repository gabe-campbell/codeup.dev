<!DOCTYPE html>
<html>
<head>
	<title>Form Test</title>
</head>

<body>
	<?php var_dump($_GET); ?>
	<?php var_dump($_POST); ?>

<form>
	<label for="awesome">Is Ike awesome?</label>

	<input type="checkbox" id="awesome" name="awesome" value="yes">

	<br>
	<br>
	<br>

	<label for="awesomeness" name="awesomeness" >How awesome is Ike?</label>
	<br>
	<select id="awesomeness" name="awesomeness">
		<option selected disabled>----Select One----</option>
		<option value="1">Kinda Awesome</option>
		<option value="2">Pretty Awesome</option>
		<option value="3">Seriously Awesome</option>
		<option value="4">100% Awesome</option>
	</select>
	<br>
	<br>

	<label for="why" name="why" >Why is Ike so awesome?</label>
	<br>
	<select id="why" name="why[]" multiple>
		<option value="smart">Ike is smart</option>
		<option value="funny">Ike is funny</option>
		<option value="couragous">Ike is couragous</option>
		<option value="rich">Ike is rich</option>
		<option value="-1" selected disabled>----You can select more than one----</option>
	</select>
	<br>
	<br>
	<input type="submit" id="submit" value="Submit">


</form>
</body>