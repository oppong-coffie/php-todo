<?php
$id = $_GET['id'];
  // include db
  include("./dbcon.php");

  // sql
  $sql="DELETE FROM activities WHERE id='$id'";

  // query
  $query=mysqli_query($dbcon,$sql);

//   condition
if($query){
    header("Location: ../index.php");
}else{
    echo "bad";
}

?>