<?php
if(1){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'cinema';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $a = $_POST['name'];
        $b = $_POST['cast'];
        $c = $_POST['year'];
        $d = $_POST['content'];
        $e = $_POST['cost'];


        // $last_id = mysqli_insert_id($db);
        // echo $last_id;
      
      $sql = "SELECT MAX(id) FROM `english` WHERE 1";
      
      if ($result = mysqli_query($db, $sql)) {
      // Fetch one and one row
       ($row = mysqli_fetch_row($result)); {
        //printf ("%s\n", $row[0]);
        $r = $row[0]+1;
      }
  }



      // $result = $db->query($sql);
      // //$result = $result +1;
      // $row = mysqli_fetch_row('$result');
      // $r = $row[0]+1;
      // $l = $row["id"]+1;
      // echo $l;

        // $l = $last_id +1;
        //Insert image content into database

        $insert = $db->query("INSERT INTO `english`(`id`, `image`, `name`, `cast`, `year`, `content`, `cost`) VALUES ('$r','$imgContent','$a','$b','$c','$d','$e')");
        if($insert){
             //echo '<script>window.location="enter.php"</script>';
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>