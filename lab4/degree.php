<html>
<head>
    <title>Degree Form</title>
</head>
<body>
    <form method="post">
        <fieldset style="width: 250px">
            <legend>Degree</legend>
            <input type="checkbox" name="option[]" value="SSC"> SSC
            <input type="checkbox" name="option[]" value="HSC"> HSC
            <input type="checkbox" name="option[]" value="BSc"> BSc
            <input type="checkbox" name="option[]" value="MSc"> MSc
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>


<?php

    if (isset($_POST['option']) && count($_POST['option']) >= 2) {
		header("location: bloodgrp.php");
		exit();
 
    } else {
        echo "Please select at least two options.";
    }

?>
