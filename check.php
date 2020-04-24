<?php


if(1)
{
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
  
 
$sql = "SELECT * FROM `tamil` WHERE 1";
          $sth = mysqli_query($conn,$sql);

          while($result=mysqli_fetch_array($sth))
          {
          // echo "<table>";
          // echo "<tr>";
          // echo "<td rowspan='4'>". '<img style="height:300px; width:300px;" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>' . "</td></tr>";      
          // echo "<tr><td>" . $result['type'] . "</td></tr>";
          // echo "<tr><td>" . $result['time'] . "</td></tr>";
          // echo "<tr><td>" . $result['latitude'] . "</td></tr>";
          // echo "<tr><td>"1 . $result['longitude'] . "</td></tr>";
 
 ?>

 <div class="it-lists">
         <div class="container" >
          <div class="row">
            <div class="col-sm-2" align="center" style="margin-top: 20px;">
                <?php


              // echo $result['image'];    

                ?>
                
            </div>
         <div class="col-sm-8" >

        <div class="img-hover thumbnail">
           <?php echo "<table><tr><td>". '<img style="width:100px;height:100px;" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>' . "</td></tr></table>"; ?>       
        </div>
        <br>
         

         </div>
         <div class="col-sm-2">
           <?php
            echo $result['name'];
            echo $result['cast'];
            echo $result['year'];
            echo $result['content'];
            echo $result['cost'];
            }
}
}
           ?>
         </div>
     </div>
 </div></div>