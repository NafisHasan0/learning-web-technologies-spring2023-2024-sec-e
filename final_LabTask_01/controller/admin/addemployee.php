<?php

require('../../model/userModel.php');

$name= $_POST['employeename'];
$contact= $_POST['contact'];
$username= $_POST['username'];
$password= $_POST['password'];

addemployee($name,$contact,$username,$password);
header('Location:../../view/admin/admin.php');

?>