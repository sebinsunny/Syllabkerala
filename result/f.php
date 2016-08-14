
<?php
include('pdf2text.php');

if(isset($_POST['submit']) && isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];   
    
    if($file_size > 2097152){
    $errors[]='File size must be excately 2 MB';
    }       
    if(empty($errors)==true){
      move_uploaded_file($file_tmp,"upload/".$file_name);
    // echo $file_name;
$a="upload/";
$b=$a.$file_name;
//echo $b;
 //     $a="INSERT INTO jose(file)VALUES('http://syllabkerala.in/upload/$file_name')";
   //   $b=mysqli_query($conn,$a);
    }else{
      print_r($errors);
    }

$result = pdf2text($b);
//echo $result;
//json_encode($result);
//echo json_encode($result);
//echo array_search("sebin",$result);
$res = preg_split('/\s+/', $result);
//$count = count($res);
//print_r($res);

//print_r($res);
$total=$res[56]+$res[64]+$res[72]+ $res[80]+ $res[87]+ $res[96] + $res[103]+ $res[112];


//second mark








  




  

  //seven







  //eight



}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Result Analyser</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">/span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-10">
                <h1 class="page-header" align="center">Result</h1>
                <h1 align="center" class="page-header"><?php            echo $res[23],"\n";
echo $res[24] ,"\n <br/>";
echo $res[25],"\n";
echo $res[26] ,"\n";
echo $res[27] ,"\n";
echo $res[28] ,"\n<br/>";        ?></h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail" href="#">
                   
                
                    <h1> <?php           
echo $res[51],"\n";
echo $res[52] ,"\n";
echo $res[53],"\n<br/>";//principle
echo $res[54],"\n<br/>";
echo $res[55],"\n<br/>";
echo $res[56] ,"\n <br/>";//mark1
echo $res[57],"\n<br/>";//pass P

if($res[56]>=136 && $res[56]<=150)
{
    $i=10;
     echo $i;
}

else if($res[56]>=121 && $res[56]<=135)
{
    $i=9;
     echo $i;
}
  
  else if($res[56]>=106 && $res[56]<=121)
{
    $i=8;
     echo $i;
}

else if($res[56]>=91 && $res[56]<=106)
{
    $i=7;
     echo $i;
}

else if($res[56]>=83 && $res[56]<=91)
{
    $i=6;
     echo $i;
}

else if($res[56]>=75 && $res[56]<=82)
{
    $i=5.5;
    echo $i;
}

         ?>                    </h1>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                 <a class="thumbnail" href="#">
        <h1>           <?php

echo $res[59],"\n";
echo $res[60] ,"\n";
echo $res[61],"\n<br/>";//second sub
echo $res[62],"\n<br/>";
echo $res[63],"\n<br/>";
echo $res[64],"\n<br/>";//mark2
echo $res[65] ,"\n <br/>";//pass

if($res[64]>=136 && $res[64]<=150)
{
    $ii=10;
     echo $ii;
}

else if($res[64]>=121 && $res[64]<=135)
{
    $ii=9;
     echo $ii;
}
  
  else if($res[64]>=106 && $res[64]<=121)
{
    $ii=8;
     echo $ii;
}

else if($res[64]>=91 && $res[64]<=106)
{
    $ii=7;
     echo $ii;
}

else if($res[64]>=83 && $res[64]<=91)
{
    $ii=6;
     echo $ii;
}

else if($res[64]>=75 && $res[64]<=82)
{
    $ii=5.5;
    echo $ii;
}

?>
            </h1>    
            </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                 <a class="thumbnail" href="#">
                  <h1>           <?php

echo $res[67],"\n";
echo $res[68] ,"\n";
echo $res[69],"\n<br/>";//third sub
echo $res[70],"\n<br/>";
echo $res[71],"\n<br/>";
echo $res[72],"\n<br/>";//mark3
echo $res[73] ,"\n <br/>";//pass



//third mark
if($res[72]>=136 && $res[72]<=150)
{
    $iii=10;
     echo $iii;
}

else if($res[72]>=121 && $res[72]<=135)
{
    $iii=9;
     echo $iii;
}
  
  else if($res[72]>=106 && $res[72]<=121)
{
    $iii=8;
     echo $iii;
}

else if($res[72]>=91 && $res[72]<=106)
{
    $iii=7;
     echo $iii;
}

else if($res[72]>=83 && $res[72]<=91)
{
    $iii=6;
     echo $iii;
}

else if($res[72]>=75 && $res[72]<=82)
{
    $iii=5.5;
    echo $iii;
}


?>
            </h1> 
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                  <h1>           <?php

echo $res[75],"\n";
echo $res[76] ,"\n";
echo $res[77],"\n<br/>";//third sub
echo $res[78],"\n<br/>";
echo $res[79],"\n<br/>";
echo $res[80],"\n<br/>";//mark4
echo $res[81] ,"\n <br/>";//pass
 
   //forth

if($res[80]>=136 && $res[80]<=150)
{
    $iv=10;
     echo $iv;
}

else if($res[80]>=121 && $res[80]<=135)
{
    $iv=9;
     echo $iv;
}
  
  else if($res[80]>=106 && $res[80]<=121)
{
    $iv=8;
     echo $iv;
}

else if($res[80]>=91 && $res[80]<=106)
{
    $iv=7;
     echo $iv;
}

else if($res[80]>=83 && $res[80]<=91)
{
    $iv=6;
     echo $iv;
}

else if($res[80]>=75 && $res[80]<=82)
{
    $iv=5.5;
    echo $iv;
}


?>
            </h1> 
                </a>
            </div>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#">
                   <h1>           <?php

echo $res[83] ,"\n";
echo $res[84],"\n<br/>";//third sub
echo $res[85],"\n<br/>";
echo $res[86],"\n<br/>";
echo $res[87],"\n<br/>";//mark5
echo $res[88] ,"\n <br/>";//pass

  //fith

if($res[87]>=136 && $res[87]<=150)
{
    $i5=10;
     echo $i5;
}

else if($res[87]>=121 && $res[87]<=135)
{
    $i5=9;
     echo $i5;
}
  
  else if($res[87]>=106 && $res[87]<=121)
{
    $i5=8;
     echo $i5;
}

else if($res[87]>=91 && $res[87]<=106)
{
    $i5=7;
     echo $i5;
}

else if($res[87]>=83 && $res[87]<=91)
{
    $i5=6;
     echo $i5;
}

else if($res[87]>=75 && $res[87]<=82)
{
    $i5=5.5;
    echo $i5;
}


?>
            </h1>
             </a>
                
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                  <h1>           <?php


echo $res[90],"\n";
echo $res[91] ,"\n";
echo $res[92],"\n";//third sub
echo $res[93],"\n<br/>";
echo $res[94],"\n<br/>";
echo $res[95],"\n<br/>";//
echo $res[96] ,"\n <br/>";//mark6
echo $res[97] ,"\n <br/>";//pass

//sixth

if($res[96]>=136 && $res[96]<=150)
{
    $i6=10;
     echo $i6;
}

else if($res[96]>=121 && $res[96]<=135)
{
    $i6=9;
     echo $i6;
}
  
  else if($res[96]>=106 && $res[96]<=121)
{
    $i6=8;
     echo $i6;
}

else if($res[96]>=91 && $res[96]<=106)
{
    $i6=7;
     echo $i6;
}

else if($res[96]>=83 && $res[96]<=91)
{
    $i6=6;
     echo $i6;
}

else if($res[96]>=75 && $res[96]<=82)
{
    $i6=5.5;
    echo $i6;
}

?>
            </h1> 
              </a>  
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a class="thumbnail" href="#">
 <h1>           <?php

echo $res[99],"\n";//third sub
echo $res[100],"\n<br/>";
echo $res[101],"\n<br/>";
echo $res[102],"\n<br/>";//
echo $res[103] ,"\n <br/>";//mark7
echo $res[104] ,"\n <br/>";//pass


if($res[103]>=136 && $res[103]<=150)
{
    $i7=10;
     echo $i7;
}

else if($res[103]>=121 && $res[103]<=135)
{
    $i7=9;
     echo $i7;
}
  
  else if($res[103]>=106 && $res[103]<=121)
{
    $i7=8;
     echo $i7;
}

else if($res[103]>=91 && $res[103]<=106)
{
    $i7=7;
     echo $i7;
}

else if($res[103]>=83 && $res[103]<=91)
{
    $i7=6;
     echo $i7;
}

else if($res[103]>=75 && $res[103]<=82)
{
    $i7=5.5;
    echo $i7;
}


?>

            </h1> 
</a>                
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
             <a class="thumbnail" href="#">
               <h1> <?php

echo $res[106] ,"\n";
echo $res[107],"\n";//third sub
echo $res[108],"\n";
echo $res[109],"\n<br/>";
echo $res[110],"\n<br/>";//
echo $res[111] ,"\n <br/>";//mark
echo $res[112] ,"\n <br/>";//mark8
echo $res[113] ,"\n <br/>";

if($res[112]>=136 && $res[112]<=150)
{
    $i8=10;
     echo $i8;
}

else if($res[112]>=121 && $res[112]<=135)
{
    $i8=9;
     echo $i8;
}
  
  else if($res[112]>=106 && $res[112]<=121)
{
    $i8=8;
     echo $i8;
}

else if($res[112]>=91 && $res[112]<=106)
{
    $i8=7;
     echo $i8;
}

else if($res[112]>=83 && $res[112]<=91)
{
    $i8=6;
     echo $i8;
}

else if($res[112]>=75 && $res[112]<=82)
{
    $i8=5.5;
    echo $i8;
}

?>
</h1><a/>            </div>
            <div align="center"class="col-lg-3 col-md-4 col-xs-6 thumb">
               
            </div>
           
        </div>

        <hr>
<h1 align="center"> <?php



$h=($total/1200)*100;
echo "TOTAL MARK:=",$total, "\n";
echo "\n<br/>";
echo "PERCENTAGE :=", $h, "\n";
echo "\n<br/>";
$sum =($i*4)+($ii*4)+($iii*4)+($iv*4)+($i5*4)+($i6*4)+($i7*2)+($i8*2);
echo "CGPA :=", $sum/28;


?></h1>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Syllabkerala.in</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
