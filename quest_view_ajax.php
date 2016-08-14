<?php
header('Content-Type: application/json');

if($_POST)
{
	require_once("connection.php");

	$branch = $_POST['branch'];
	$sem = $_POST['sem'];
	$year = $_POST['yer'];



	$sql = 'SELECT * FROM subject WHERE branch =\''.$branch.'\'
    and sem=\''.$sem.'\' and year = '.$year;


	

	$result = mysqli_query($conn,$sql);
	$data = array();

  		while($row = $result->fetch_assoc()) {
	    	$data[] = $row;
		}

		if(empty($data))
			$row['payload'] = 'false';
		else
			$row['payload'] = 'true';
		$row['data'] = $data;
		$fetch_data = json_encode($row);
		echo $fetch_data;

}
