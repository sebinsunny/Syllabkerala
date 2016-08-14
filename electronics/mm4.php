<?php

 include_once("connection.php");

    $query = "SELECT * FROM subject WHERE branch='electronics' AND year='2014' AND sem='s3'"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);



?>