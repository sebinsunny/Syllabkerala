<?php

 include_once("connection.php");

    $query = "SELECT * FROM subject WHERE branch='mechanical' AND year='2012' AND sem='s1'"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);



?>