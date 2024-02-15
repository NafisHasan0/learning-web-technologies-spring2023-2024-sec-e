
<html>
<head>
    <title>HTML form</title>
</head>
<body>
    <form method="" action="" enctype="">
        Length: <input type="number" name="length" value="" ><br>
        Width: <input type="number" name="width" value="" ><br>
        <h1> </h1>
              <input type="submit" name="submit" value="Submit" >
        
    </form>
</body>
</html>


<?php

    $length = $_REQUEST['length'];
    $width = $_REQUEST['width'];

    echo'Area : ' . $width*$length . "<br>";
    
    echo 'Perimeter : ' . 2*($length+$width);

?>