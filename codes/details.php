<?php
  $conn = new mysqli("localhost","root","","property_data");
  if($conn->connect_error){
    die("Failed to connect!".$conn->connect_error);
  }
  if(isset($_POST['submit'])){
    $data=$_POST['search'];
    $sql="SELECT * FROM `properati-mx-2016-11-01-properties-sell` WHERE property_type='$data'
    or place_name like '%$data%' or description like '%$data%'";
    $result=$conn->query($sql);
    echo "<table>";
    echo "<tr>";
    echo "<td><b>Title</b></td>";
    echo "<td><b>Type</b></td>";
    echo "<td><b>Place Name</b></td>";
    echo "<td><b>Price</b></td>";
    echo "<td><b>Total Area in m2</b></td>";
    echo "<td><b>Floors</b></td>";
    echo "<td><b>Rooms</b></td>";
    echo "</tr>";
    while($row=$result->fetch_assoc()){

      $title = $row['title'];
      $type = $row['property_type'];
      $name = $row['place_name'];
      $price = $row['price'];
      $ts = $row['surface_total_in_m2'];
      $floor = $row['floor'];
      $room = $row['rooms'];
      echo "<tr>";
      echo "<td>$title</td>";
      echo "<td>$type</td>";
      echo "<td>$name</td>";
      echo "<td>$price</td>";
      echo "<td>$ts</td>";
      echo "<td>$floor</td>";
      echo "<td>$room</td>";
      echo "</tr>";
  }
  echo "</table>";
}
