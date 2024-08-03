<?php
// connect db
include("./dbcon.php");

// varibles
$job=$_POST['job'];

// sql
$mysql = "INSERT INTO activities(`job`, `status`) VALUES('$job', 'pendin')";

// query
$query = mysqli_query($dbcon,$mysql);

if($query){
    header("Location: ../index.php");
}else{
    echo "bad";
}
?>