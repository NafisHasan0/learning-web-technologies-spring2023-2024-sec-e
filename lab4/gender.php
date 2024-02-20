<html>
<head>
    <title>Gender Form</title>
</head>
<body>
    <form method="post">
        <fieldset style="width: 200px">
            <legend>GENDER</legend>

            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other

            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    
        $selectedGender = $_POST['gender'] ?? '';

        if (!empty($selectedGender)) 
		{
            header("Location: degree.php");
            exit();
        } 
		else 
		{
            echo "Please select a gender.";
        }
    
?>