<?php

 include_once("connection.php");

    $query = "SELECT * FROM subject WHERE branch='information' AND year='2011' AND sem='s4'"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);



?>