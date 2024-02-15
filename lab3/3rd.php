
<html>
<head>
    <title>HTML form</title>
</head>
<body>
    <form method="" action="" enctype="">
        Input Number: <input type="number" name="number" value="" ><br>
        <h1> </h1>
              <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html>


<?php

    $num = $_REQUEST['number'];
  
    if($num %2 == 0)
    {
        echo "{$num} is even";
    }
    else
    {
        echo "{$num} is odd";
    }

?>