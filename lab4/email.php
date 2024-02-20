<html>
<head>
	<title>Email Form</title>
</head>
<body>
	<form>
    <fieldset style = "width: 340px">
    <legend>EMAIL</legend>
		<input type="email" name="email" value="" > [anything@exmple.com]
        <hr>
		<input type="submit" name="" value="Submit"  >
	</fieldset>
	</form>
</body>
</html>

<?php
    $email = $_REQUEST['email'];
    
	if(empty($email)) 
    {
        echo "Please enter a valid email address";
    } 
	else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header("Location: DOB.php");
            exit();
		} 
		else 
		{
			echo "Please enter a valid email address";
		}
	}
    

?>