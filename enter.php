<?php

	 $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cinema";


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) 
  {
      die("Connection failed: " . mysqli_connect_error());
  }
  else
 {
  
  
  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!--title-->
  <title>Civil Preparation Kit</title>

  <!--Bootstrap headers-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">   
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">


  </head>
  <body>
    <div class="container">
      <div align="center" style="margin-top: 50px;">
        <h1 style="font-family: 'Playfair Display', serif;">Enter the question</h1>
      </div>
      <div style="margin-top: 50px;" align="center">
      <form action="up.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/><br><br>
        Answer for the uploaded name.
        <input type="text" name="name"><br><br>
        Enter the mark for the cast.
        <input type="text" name="cast"><br><br>
        Enter the mark for the year.
        <input type="text" name="year"><br><br>
        Enter the mark for the content.
        <input type="text" name="content"><br><br>
        Enter the mark for the cost.
        <input type="text" name="cost"><br><br>
        <input type="submit" name="submit" value="UPLOAD"/><br><br> 
    </form>
      <a href="../../admin_topic.php"><button>Finish</button></a>
    </div>
   
    
</body>
</html>

  <?php
}
?>