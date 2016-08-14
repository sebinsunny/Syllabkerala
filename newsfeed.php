
<?php
include_once("connection.php");




	if(isset($_FILES['image']) && isset($_POST['news'])){
			$o=$_POST['news'];
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];   
		
		if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
		}				
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"uploads/news/".$file_name);
			echo "Success";
			$a="INSERT INTO newsfeed(name,file)VALUES('$o','http://syllabkerala.in/uploads/news/$file_name')";
			$b=mysqli_query($conn,$a);
		}else{
			print_r($errors);
		}
	
}
?>

<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="image" />
<input type="text" name="news">
<input type="submit"/>
</form>