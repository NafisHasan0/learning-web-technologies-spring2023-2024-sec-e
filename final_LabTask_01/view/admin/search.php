<?php 
require('../../model/usermodel.php');


$searchdata=getsearchinfo($_POST['data']);

?>

<html>
    <head>
        <title>search</title>
    </head>
    <body>

    <table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>User ID</th>
         <th>Employee Name</th>
         <th>Contact Number</th>
         <th>Username</th>
         <th>Password</th>
    </tr>
    <?php
    
    for($i=0;$i<count($searchdata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $searchdata[$i]['id'] . "</td>";
            echo "<td align=\"center\">" . $searchdata[$i]['employeename'] . "</td>";
            echo "<td align=\"center\">" . $searchdata[$i]['contact'] . "</td>";
            echo "<td align=\"center\">" . $searchdata[$i]['username'] . "</td>";
            echo "<td align=\"center\">" . $searchdata[$i]['password'] . "</td>";
    }
    ?>
     </table>


    </body>
</html>