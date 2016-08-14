<!DOCTYPE html>
<html lang="en">

<?php
$flag=$success='';

if($_GET['id']){
   require_once("../connection.php");

   $thread_id = $_GET['id'];
     
      $sql = "SELECT * FROM forum_questions,student where forum_questions.sid=student.sid and forum_questions.thread_id=$thread_id";           

      $result2 = mysqli_query($conn,$sql);              

      $thread = array();

          while($data = $result2->fetch_assoc()) {
            $thread[] = $data;
        }

    $sql = "SELECT * FROM forum_answers,student where forum_answers.sid=student.sid and forum_answers.thread_id=$thread_id ORDER BY forum_answers.answer_id";
      

      $result2 = mysqli_query($conn,$sql);
      $thread_data = array();

          while($data = $result2->fetch_assoc()) {
            $thread_data[] = $data;
        }

        if($_POST){

        	if(!isset($_SESSION['student'])){
		        	header("Location: login.php");
		        }
		    $answer = $_POST['answer'];
		    
		    $uname = $_SESSION['student'];

		    $sid_query = 'SELECT sid from student where username=\''.$uname.'\'';

		    $result2 = mysqli_query($conn,$sid_query);
		    $userdata = mysqli_fetch_array($result2,MYSQLI_ASSOC);

		    $sid = $userdata['sid'];

		    $answer = $conn->real_escape_string($answer);
		   

		    $query = "INSERT INTO forum_answers(thread_id,sid,answer) 
		    VALUES ('$thread_id','$sid',\"$answer\")"; 	    


		    
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
        
}
else
die("Something went wrong!");

          
?>

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
	    <div class="col-lg-8">
	        <div class="panel panel-white post panel-shadow">
	            <div class="post-heading">
	                <div class="pull-left image">
	                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
	                </div>
	            <?php foreach ($thread as $value ): ?> 
	                <div class="pull-left meta">
	                    <div class="title h5">
	                        <a href="#"><strong><?= $value['firstname'].' '.$value['lastname']; ?></strong></a>
	                        asked a question
	                    </div>
	                    <h6 class="text-muted time"><?= date("d-M-Y , h:i A", strtotime($value['time'])); ?></h6>
	                </div>
	            </div> 
	            <div class="post-description">
	                <h2><?= htmlspecialchars($value['question']); ?></h2>
	            <?php endforeach; ?>
	                <div class="stats">
	                    <a href="#" class="btn btn-default stat-item">
	                        <i class="fa fa-thumbs-up icon"></i>2
	                    </a>
	                    <a href="#" class="btn btn-default stat-item">
	                        <i class="fa fa-share icon"></i>12
	                    </a>
	                </div>
	            </div>
	            <div class="post-footer">
	                <div class="input-group"> 
	                	<?php if($flag==1): ?>
                        	<div id="login-alert" class="alert alert-danger alert-dismissible col-sm-12">Something went wrong!
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
	                    <?php endif; ?>
	                    <?php if($success==1): ?>
	                        <div id="login-alert" class="alert alert-success alert-dismissible col-sm-12">Answer added successfully!
	                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	                        </div>
	                    <?php endif; ?>
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Add your answer</h4>
								</div>
								<div class="panel-body">
									<form action="" method="post" class="form-signin">
					                        <div class="form-group">
					                            <label for="inputEmail">What's your answer ?</label>
					                            <textarea type="text" name="answer" id="inputEmail" class="form-control input-lg" placeholder="Type in your answer" cols="82" value="" required></textarea>
					                        </div>						                        					                    		
				                </div>
				                <div class="panel-footer">

				                	<button class="btn btn-primary pull-right" type="submit">Submit</button>	
				                	<br><br>	                    		
					                </form>
				                </div>
			                </div>
					    </div>	                    		
	                </div>
	                <ul class="comments-list">
        	            <?php foreach ($thread_data as $reply ): ?> 
	                    <li class="comment">
	                        <a class="pull-left" href="#">
	                            <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
	                        </a>
	                        <div class="comment-body">
	                            <div class="comment-heading">
	                                <h4 class="user"><?= $reply['firstname'].' '.$reply['lastname']; ?></h4>
	                                <h5 class="time"><?= date("d-M-Y , h:i A", strtotime($reply['added_time'])); ?></h5>
	                            </div>
	                            <blockquote><?= htmlspecialchars($reply['answer']); ?></blockquote>
	                        </div>	                        
	                    </li>
	                <?php endforeach; ?>

	                </ul>
	            </div>
	        </div>
	    </div>
	    <div class="col-lg-4">
	    	<div class="panel panel-default">
	    		<div class="panel-heading">
	    			<h4></h4>
	    		</div>
	    		<div class="panel-body">
	    			
	    		</div>
	    		<div class="panel-footer">
	    			
	    		</div>
    		</div>

	    </div>
    </div>
</div>

</body>
</html>



