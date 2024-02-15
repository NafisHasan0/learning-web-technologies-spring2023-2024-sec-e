<html>
<head>
    <title>HTML form</title>
</head>
<body>
    <form method="" action="" enctype="">
        Ammount: <input type="number" name="ammount" value="" ><br>
      
        <h1> </h1>
              <input type="submit" name="submit" value="Submit" >
        
    </form>
</body>
</html>


<?php

    $ammount = $_REQUEST['ammount'];
  

    echo'Vat : ' . $ammount*0.15;

?>