<?php
  include "../includes/db_connection.php";

  //$read_data_query = "SELECT * FROM users WHERE primary_id = $user_id ";
  $read_data_query = "SELECT * FROM users";

  $result = mysqli_query($connection,$read_data_query);

  if(!$result){
    die("Query failed" . mysql_error());
  }

  while($row = mysqli_fetch_assoc($result)){
    print_r($row);
  }
 ?>
