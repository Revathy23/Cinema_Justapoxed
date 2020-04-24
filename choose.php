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

  $a = $_POST['choice'];
  
  if($a == 'Rajini')
  {
    echo '<script>window.location="./rajini.php"</script>';
  }

  if($a == 'Kamal Haasan')
  {
    echo '<script>window.location="./kamal.php"</script>';
  }

  if($a == 'Ajith')
  {
    echo '<script>window.location="./ajith.php"</script>';
  }

  if($a == 'Vijay')
  {
    echo '<script>window.location="./vijay.php"</script>';
  }
}

?>