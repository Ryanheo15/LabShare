function validate() {
  let valid = <?php

      include '../PHP/db_connection.php';

      if($_POST[""])
      {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //Adding security
        $pass = mysqli_real_escape_string($connection, $pass);
        $email = mysqli_real_escape_string($connection,$email);

        //Password encryption
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;

        $pass = crypt($pass,$hashF_and_salt);

        $verify = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
        $verify_query = mysqli_query($connection, $verify);


        if(!$verify_query){
          die("SEARCH QUERY FAILED " . mysqli_error($connection));
        }

        else {

          $verify_array = mysqli_fetch_assoc($verify_query);

          if($verify_array['email'] == $email && $verify_array['password'] == $pass) {
              echo "<script> location.href='user/index.html'; </script>";

              session_start();

              $_SESSION['id'] = mysqli_fetch_assoc($verify_query);

          }
          else {
            //echo "<script> location.href='../HTML/index.html'; </script>";
            //header("Location: index.php?login-failed");

            //echo "<script> alert('Incorrect password and username');</script>";

            echo false;

          }

        }

        $connection->close();



      }
      /*
      if ($_POST['username'] == 'admin@labshare.net' && $_POST['password'] == 'password')
      {
        echo "<script> location.href='../HTML/admin/'; </script>";
      }
      else
      {
        echo "<script> location.href='../HTML/user/'; </script>";
      }
      */
  ?>;

console.log(1);
  if (!valid) {
    alert("pepsi");
    return false;
  }
}
