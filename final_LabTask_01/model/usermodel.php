<?php 
require('db.php');


function getuserinfo(){
    $con = dbConnection();
    $sql = "select * from employee";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function addemployee($name,$contact,$username,$password){
    $con = dbConnection();
    $sql = "INSERT INTO employee( `employeename`, `contact`, `username`, `password`) VALUES ('$name','$contact','$username','$password')";
    $result = mysqli_query($con, $sql);
}



function deleteemployee($id){
    $con = dbConnection();
    $sql = "delete from employee where id='$id'";
    $result = mysqli_query($con, $sql);
}


function getsearchinfo($data){
    $con = dbConnection();
    $sql = "SELECT * FROM employee WHERE id LIKE'%$data%' OR employeename LIKE '%$data%' OR contact LIKE '%$data%' OR username LIKE '%$data%' OR password LIKE '%$data%';";
    $result = mysqli_query($con, $sql);
    $data= [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

?>