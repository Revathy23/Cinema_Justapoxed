<?php

   $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cinema";


  // Create connection
  $db= mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$db) 
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  else
 {


        $a = $_POST['name'];
        $b = $_POST['em'];
        $c = $_POST['ph'];
        $d = $_POST['ms'];


        $insert = $db->query("INSERT INTO `msges`(`name`, `email`, `phno`, `msg`) VALUES ('$a','$b','$c','$d')");

      }
      echo '<script>window.location="./index.php"</script>';

      ?>