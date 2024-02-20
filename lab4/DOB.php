<html>
<head>
	<title>DateOfBirth Form</title>
</head>
<body>
	<form>
	<fieldset style = "width: 300px">
    <legend>DATE OF BIRTH</legend>
		<table>
			<tr>
				<td >dd</td>
				<td align="center">mm</td>
				<td align="center">yyyy</td>
			</tr>

			<tr>
				<td><input type="number" name="day" style="width: 60px;"></td>
				<td><input type="number" name="month" style="width: 60px;"></td>
				<td><input type="number" name="year" style="width: 70px;"></td>
			</tr>
		</table>

		<hr>
		<br>
		<input type="submit" name="" value="Submit">
	</fieldset>	
	</form>
</body>
</html>

<?php
    $day = $_REQUEST['day'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];


	if(empty($day) || empty($month) || empty($year) )
    {
        echo "Please fill all the information";
    } 
	else
	{
		if ( $day<1|| $day>31)
	{
		echo " day must be between 1-31";
	}
	else if ( $month<1|| $month>12)
	{
		echo " month must be between 1-12";
	}
	else if ( $year<1953|| $year>1998)
	{
		echo " year must be between 1953-1998";
	}
	else
	{
		header("Location: gender.php");
        exit();
	}
	}
	


    

?>