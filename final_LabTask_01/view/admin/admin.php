<?php 
require('../../model/usermodel.php');

$userdata=getuserinfo();

?>

<html lang="en">
<head>
    <title>admin</title>
</head>
<body >
     
    <table width="100%" border="0">
        <tr>
            <td align="center">
                <h1><u>Admin Panel</u></h1>
            </td>
        </tr>
    </table>



   <u> <h2>Employee Information :</h2> </u>
    
    <table width="100%" border="1" cellspacing="0" align="center" >
    <tr>
         <th>User ID</th>
         <th>Employee Name</th>
         <th>Contact Number</th>
         <th>Username</th>
         <th>Password</th>
         <th>Actions</th>
         <th>Actions</th>
    </tr>
    <?php
    
    for($i=0;$i<count($userdata);$i++){
        echo "<tr>";
     
            echo "<td align=\"center\">" . $userdata[$i]['id'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['employeename'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['contact'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['username'] . "</td>";
            echo "<td align=\"center\">" . $userdata[$i]['password'] . "</td>";
            
            echo '<td align="center">  
            <form method="post" action="../../controller/admin/deleteemployee.php">
            <input type="hidden" name="id" value="' .$userdata[$i]['id'] . '">
            <input type="submit" name="Delete" value="Delete" style="width: 50px; height: 20px; background-color: red; color: white;" >
            </form>  
            </td>';

            echo '<td align="center">  
            <form method="post" action="">
            <input type="hidden" name="userid" value="' .$userdata[$i]['id'] . '">
            <input type="submit" name="UPDATE" value="UPDATE" style="width: 70px; height: 20px; background-color: blue; color: white;" >
            </form>  
            </td>';
    }
    ?>
     </table>

   <h3>Add new Employee :
    <form method="post" action="employeeAddbyAdmin.php">
        <input type="submit" name="Add Employee" value="Add Employee" style="width: 100px; height: 30px; background-color: green; color: white;" >
    </form>

<br>
    <h3>Search employee Information :</h3> 
    <form method="post" action="search.php">
        <input type="text" name="data" value="" required> 
        <input type="submit" name="Search" value="Search" style="width: 60px; height: 30px; background-color: green; color: white;" >
    </form>





    </body>
</html>
