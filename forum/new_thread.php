<?PHP
    include_once("../connection.php");
    
        if(!isset($_SESSION['student'])){
        	header("Location: login.php");
        }
          
      
    $flag = '';
    $success = '';
        

if($_POST){
    $question = $_POST['question'];
    
    $uname = $_SESSION['student'];

    $sid_query = 'SELECT sid from student where username=\''.$uname.'\'';

    $result2 = mysqli_query($conn,$sid_query);
    $userdata = mysqli_fetch_array($result2,MYSQLI_ASSOC);

    $sid = $userdata['sid'];
   

    $query = "INSERT INTO forum_questions(sid,question) 
    VALUES ('$sid','$question')"; 
    
    $result = mysqli_query($conn, $query);

    if($result > 0){
        if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
            echo "success";
            exit;
        }
        $success = 1;   
    }
    else{
        if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
            echo "failed";
            exit;
        }
        $flag = 1; 
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include('../head_tag.php');
?>

<body>
<?php

include('../header.php');

?>


<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/forum.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<img src="assets/images/bg.jpg" class="img-responsive img thumbnail center-block">
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 center-block">	    
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Create new Thread</h3>
				</div>
				<div class="panel-body">
					<?php if($flag==1): ?>
                        <div id="login-alert" class="alert alert-danger alert-dismissible col-sm-12">Something went wrong!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                    <?php endif; ?>
                    <?php if($success==1): ?>
                        <div id="login-alert" class="alert alert-success alert-dismissible col-sm-12">Thread added successfully!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                    <?php endif; ?>
					<div class="col-lg-12">
						<form form action="" method="post" class="form-signin">
		                        <div class="form-group">
		                            <label for="inputEmail">What's your question ?</label>
		                            <textarea type="text" name="question" id="inputEmail" class="form-control input-lg" placeholder="Type in your question" value="" required></textarea>
		                        </div>		                        
		                    <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
		                </form>
				    </div>		
			    </div>
		    </div>
	    </div>
    </div>
</div>

</body>
</html>



