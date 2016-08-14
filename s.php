<?PHP
    include_once("connection.php");

    $query = "SELECT * FROM newsfeed"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){

            $data[] = $row;
    }
    echo json_encode($data);
?>