<?php
  // include db
  include("./components/dbcon.php");

  // sql
  $sql="UPDATE activities SET `status`='done'";

  // query
  $query=mysqli_query($dbcon,$sql);

//   condition
if($query){
    header("Location: ../index.php");
}else{
    echo "bad";
}
?>