<?php
   require_once("../connection.php");
     
      $sql = "SELECT * FROM forum_questions,student where forum_questions.sid=student.sid";
      

      $result2 = mysqli_query($conn,$sql);
      $questions = array();

          while($data = $result2->fetch_assoc()) {
            $questions[] = $data;
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
					<h3>Forum Threads
					<a class="btn btn-success pull-right" href="new_thread.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Start a Thread</a></h3>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
					<?php foreach ($questions as $question): ?>
						<div id="postlist">
							<div class="panel">
				                <div class="panel-heading">
				                    <div class="text-center">
				                        <div class="row">
				                            <div class="col-sm-9">
				                                <h1 class="pull-left"><?= $question['question']; ?></h1>
				                            </div>				                            
				                        </div>
				                    </div>
				                </div>
				                
				            <div class="panel-body">
				                <h4>Asked by <strong> <?php echo $question['firstname'].' '.$question['lastname'].'</strong> on <strong> '.date("d-M-Y , h:i A", strtotime($question['time'])).'</strong>'; ?></h4>
				            </div>
				            
				            <div class="panel-footer">
				                <a class="btn btn-info" href="view_thread.php?id=<?= $question['thread_id']; ?>"> View Thread </a>
				            </div>
				        </div>
			        <?php endforeach; ?>				        				       				        
				    </div>		
			    </div>
		    </div>
	    </div>
    </div>
</div>

</body>
</html>



