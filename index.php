<?php
  // include db
  include("./components/dbcon.php");

  // sql
  $sql="SELECT * FROM activities";

  // query
  $query=mysqli_query($dbcon,$sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo</title>
    <link rel="stylesheet" href="./index.css" />
  </head>
  <body>
    <h1>Todo App</h1>
    <div class="main1">
      <form action="./components/sendjob.php" method="POST">
        <input name="job" type="text" />
        <button type="submit">Add</button>
      </form>

      <div class="activities">
        <?php
        while($row=mysqli_fetch_array($query)){
          echo '
          <div class="one">
          <div class="marked">'.$row["status"].'</div>
          <div class="job">'.$row["job"].'</div>
          <div class="action">
            <a class="edit" href="">edit</a>
            <a class="delete" href="./components/delete.php?id='.$row["id"].'">delete</a>
            <a class="done" href="./components/done.php">Done</a>
          </div>
        </div>;
          ';
        }
          ?>
        
       
   
      </div>
    </div>
  </body>
</html>
