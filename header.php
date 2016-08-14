<?php
   include_once('connection.php');

?>
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Student Assistant</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo $base_url; ?>admin.php">Admin</a></li>
        <li><a href="<?php echo $base_url; ?>college.php">Colleges</a></li>
        <li><a href="<?php echo $base_url; ?>university.php">University</a></li>
       <li><a href="<?php echo $base_url; ?>chat.php">Chat</a></li>
        <li><a href="<?php echo $base_url; ?>student.php">Student</a></li> 
        <li><a href="<?php echo $base_url; ?>quest_view.php">View Previous Questions</a></li>  
        <li><a href="<?php echo $base_url; ?>forum">Forum</a></li>   
                     <li><a href="<?php echo $base_url; ?>result">Result Analyser</a></li> 
             
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php 
        if(isset($_SESSION['student']))
          echo '<li><a href="'.$base_url.'logout.php"><span class="text-danger"> <i class="fa fa-power-off" aria-hidden="true"></i>
 Logout</span></a></li>';
      ?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<style type="text/css">
  .center-block
  {
    float: none;
  }
  .padding
  {
    padding: 5%;
  }
</style>