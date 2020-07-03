<?php
  $conn = new mysqli("localhost","root","","property_data");
  if($conn->connect_error){
    die("Failed to connect!".$conn->connect_error);
  }
  if(isset($_POST['query'])){
    $inpText = $_POST['query'];
    $query1="SELECT * FROM `properati-mx-2016-11-01-properties-sell` WHERE property_type like '%$inpText%'";
    $result1 = $conn->query($query1);
    $query2="SELECT * FROM `properati-mx-2016-11-01-properties-sell` WHERE place_name like '%$inpText%'";
    $result2 = $conn->query($query2);
    $query3="SELECT * FROM `properati-mx-2016-11-01-properties-sell` WHERE title like '%$inpText%'";
    $result3 = $conn->query($query3);
    if ($result1 === false&& $result2==false &&$result3==false) { die(mysqli_error($conn)); }
    if($result1->num_rows>0){
        $row = $result1->fetch_assoc();
        echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['property_type']."</a>";
    }
    elseif($result2->num_rows>0){
      $row = $result2->fetch_assoc();
      echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['place_name']."</a>";
    }
    elseif($result3->num_rows>0){
        $row = $result3->fetch_assoc();
    echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['title']."</a>";
  }
    else{
      echo "<p class='list-group-item border-1'>No Record</p>";
    }
  }
 ?>
