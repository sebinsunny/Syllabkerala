<!DOCTYPE html>
<html lang="en">
<?php 
include 'head_tag.php';
?>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-md-8">
                <form class="form-horizontal" action="" method="post" id="quest_view_form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">University</label> 
                            <div class="col-lg-8">
                                <select class="form-control" name="uni">
                                    <option value="sel">
                                        SELECT
                                    </option>
                                    <option value="sem1">
                                        MG
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Branches</label> 
                            <div class="col-lg-8">
                                <select class="form-control" name="branch">
                                    <option value="select">
                                        SELECT
                                    </option>
                                    <option value="mechanical">
                                        Mechanical
                                    </option>
                                    <option value="computer">
                                        Computer
                                    </option>
                                    <option value="Civil">
                                        Civil
                                    </option>
                                    <option value="information">
                                        Information Technology
                                    </option>
                                    <option value="electronics">
                                        Electronics
                                    </option>
                                    <option value="electrical">
                                        Electrical
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Semester</label> 
                            <div class="col-lg-8">
                                <select class="form-control" name="sem">
                                    <option value="sel">
                                        SELECT
                                    </option>
                                    <option value="s1">
                                        S1S2
                                    </option>
                                    <option value="s3">
                                        S3
                                    </option>
                                    <option value="s4">
                                        S4
                                    </option>
                                    <option value="s5">
                                        S5
                                    </option>
                                    <option value="s6">
                                        S6
                                    </option>
                                    <option value="s7">
                                        S7
                                    </option>
                                    <option value="s8">
                                        S8
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Year</label> 
                            <div class="col-lg-8">
                                <select class="form-control" name="yer">
                                    <option value="">
                                        SELECT
                                    </option>
                                    <option value="2009">
                                        2009
                                    </option>
                                    <option value="2010">
                                        2010
                                    </option>
                                    <option value="2011">
                                        2011
                                    </option>
                                    <option value="2012">
                                        2012
                                    </option>
                                    <option value="2013">
                                        2013
                                    </option>
                                    <option value="2014">
                                        2014
                                    </option>
                                    <option value="2015">
                                        2015
                                    </option>
                                    <option value="2016">
                                        2016
                                    </option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                        <button type="submit" class="btn btn-success"> View Question Papers</button>
                        </div>                                               
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div id="questions">
                    
                </div>
            </div>
        </div>
    </div><!-- /container -->

    <script type="text/javascript">
        $("#quest_view_form").submit(function(e){
            $("#questions").html("<h3 class=\"text-success text-center\">Fetching..<\h3>");
            $.ajax({
                       type:"POST",
                       url: "quest_view_ajax.php",
                       data:$("#quest_view_form").serialize(),
                       success: function(data){
                           //$("#stage"+x).html(data);
                           //var obj = jQuery.parseJSON(data);
                           //console.log(data.data[0].file);
                           $("#questions").html("");
                           if(data.payload==='true'){
                                for (var i = 0, n = data.data.length; i < n; i++) {                            
                                    $("#questions").append("<img src=\""+data.data[i].file+"\" class=\"img-responsive img-thumbnail\">");
                                }
                            }
                            else{
                                $("#questions").html("<h3 class=\"text-danger text-center\">Unable to get requested question papers <\h3>");
                            }                   
                       }                             
                   }); 
            e.preventDefault();
        })
    </script>
</body>
</html>