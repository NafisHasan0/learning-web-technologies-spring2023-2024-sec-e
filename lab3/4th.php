
<html>
<head>
    <title>HTML form</title>
</head>
<body>
    <form method="" action="" enctype="">
        Input Number 1 : <input type="number" name="number1" value="" ><br>
        Input Number 2 : <input type="number" name="number2" value="" ><br>
        Input Number 3 : <input type="number" name="number3" value="" ><br>

        <h1> </h1>
              <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html>


<?php

    $num1 = $_REQUEST['number1'];
    $num2 = $_REQUEST['number2'];
    $num3 = $_REQUEST['number3'];

    $largest= $num1;
  
    if($num2>$largest)
    {
        $largest = $num2;
    }
    if($num3>$largest)
    {
        $largest = $num3;
    }

    echo"{$largest} is the largest number";
   

?>