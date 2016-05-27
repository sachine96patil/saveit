<!-- head starts -->
<?php include "includes/connect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CMS| Find all our stuff at one place!</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet"> 


<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <!-- head ends -->

  <!-- NAV starts -->
<nav class="navbar navbar-default navbar-inverse  ">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>CMS</button>
      <br>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav nav-tabs">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true">HOME<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TOPICS<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="history.php" style=" color:darkblue;">HISTORY</a></li>
            <li><a href="geography.php" style=" color:darkred;">GEOGRAPHY</a></li>
            <li><a href="science.php" style=" color:darkgreen;">SCIENCE</a></li>
              <li><a href="politics.php" style=" color:darkorange;">POLITICS</a></li>
              <li><a href="economics.php" style=" color:darkcyan;">ECONOMICS</a></li>
            <!--<li class="divider"></li>-->
            <li><a href="technology.php" style=" color:darkkhaki;">TECHNOLOGY</a></li>
            <li class="divider" ></li>
              <li><a href="others.php" style=" color:darkmagenta;">OTHERS</a></li>
          </ul>
        </li>
      </ul>
      <!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>  -->
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
 <!-- NAV ends-->

<!--Heading starts -->
<div class="container-fluid" style="background-image:url('images/10.jpg');">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center">CMS</h1>
        <h4 align="right">Save all at one place!</h4>
    </div>
  </div>
  <hr>
</div>
<!--Heading ends -->
 <!-- CENTER CONTAINER starts -->
<div class="container-fluid" style="background-image:url('images/30.jpg '); background-color:;" >
  <div class="row text-center">
 <div class="col-md-6 col-md-offset-3">
      <form action="home.php" method="POST">
        <div class="form-group row">
    <label for="input" class="col-sm-2 form-control-label" style="color:darkblue; font-size:23px;">CONTENT</label>
    <div class="col-sm-10">
      <textarea class="form-control" name = "content" id="input" rows="5" placeholder="Enter your content here!" required></textarea>
    </div>
        </div>

          <div class="form-group row ">
   <label for="title" class="col-sm-2 form-control-label"><span class="glyphicon glyphicon-bookmark" aria-hidden="true" style="color:darkred; font-size:23px;"> TITLE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name = "ttl" id="title" placeholder="Enter Title for your content"> </input>
    </div>
          </div>
          <span style="color:grey; font-size:19px;"><h4>Check the topics you want the article to be saved in:</h4></span>
          <label class="checkbox-inline">
            <input type="checkbox" name="history" value="history" > <span style=" color:darkblue; font-size:20px;" >HISTORY</span></input>
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="geography" value="geography"><span style=" color:darkred; font-size:20px;" > GEOGRAPHY</span></input>
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="science" value="science"><span style=" color:darkgreen; font-size:20px;"> SCIENCE</span></input>
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="politics" value="politics"><span  style=" color:darkorange; font-size:20px;"> POLITICS</span></input>
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="economics" value="economics"><span style=" color:darkcyan; font-size:20px;" > ECONOMICS</span></input>
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="technology" value="technology"><span style=" color:darkkhaki; font-size:20px;" > TECHNOLOGY</span></input></input>
          </label>
          <label class="checkbox-inline">
            <input type="checkbox" name="other" value="other"><span style=" color:darkmagenta; font-size:20px;"> OTHERS</span></input>
          </label>
      <br/><br/>
      <input type="submit" class="btn btn-success btn-lg" name = "save" value="SAVE" data-target="#mymodal"></input>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
             
        </div>
        <?php         
        
                $box=array();
                $i = 0;
                if(isset( $_POST["history"])){$box[$i] = $_POST["history"]; $i++;}
                if(isset($_POST["geography"])){$box[$i] = $_POST["geography"]; $i++;}
                if(isset($_POST["science"])){$box[$i] = $_POST["science"]; $i++;}
                if(isset( $_POST["politics"])){$box[$i] = $_POST["politics"]; $i++;}
                if(isset($_POST["economics"])){$box[$i] = $_POST["economics"]; $i++;}
                if(isset($_POST["technology"])){$box[$i] = $_POST["technology"]; $i++;}
                if(isset($_POST["other"])){$box[$i] = $_POST["other"]; $i++;}
                
               
        
     
       
        if(isset($_POST["save"]))
        {
            
                      if(count($box)>0)
          {
            echo '

<div class="modal fade" tabindex="-1" role="dialog" id="mymodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">CMS</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to save the article ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">SAVE</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

            ';
           /*echo '<div class="alert alert-success alert-dismissible">
    your article has been saved sucessfully!!
    <buttton type="button" class="close" data-dismiss="alert"></button>
    <span aria-hidden="true">&times;</span>
    <span class="sr-only">Close</span>

    </div>';*/

         }
         else{
          echo '<div class="alert alert-success">
    please select atleast one topic to save article</div>';

         }
            $selected1 = current($box);
                    
                    $query1 = "INSERT INTO `$selected1`(Title1,User1)";
                    $query1 .= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result1 = mysqli_query($connection,$query1);
                    next($box); 
                    
                    $selected2 = current($box);
                    
                    $query2 = "INSERT INTO `$selected2`(Title1,User1)";
                    $query2 .= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result2 = mysqli_query($connection,$query2);
                    next($box);
                                 
                   $selected3 = current($box);
                    
                    $query3 = "INSERT INTO `$selected3`(Title1,User1)";
                    $query3.= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result3 = mysqli_query($connection,$query3);
                    next($box);
                                  
                    $selected4 = current($box);
                   
                    $query4 = "INSERT INTO `$selected4`(Title1,User1)";
                    $query4 .= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result4 = mysqli_query($connection,$query4);
                    next($box);
                    
                    
                    $selected5 = current($box);
                    
                    $query5 = "INSERT INTO `$selected5`(Title1,User1)";
                    $query5 .= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result5 = mysqli_query($connection,$query5);
                    next($box);
                    
                                  
                    $selected6 = current($box);
                    
                    $query6 = "INSERT INTO `$selected6`(Title1,User1)";
                    $query6 .= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result6 = mysqli_query($connection,$query6);
                    next($box);
                                  
                    $selected7 = current($box);
                    
                    $query7 = "INSERT INTO `$selected7`(Title1,User1)";
                    $query7 .= "VALUES('{$_POST["ttl"]}','{$_POST["content"]}')";
                    $result7 = mysqli_query($connection,$query7);
                    next($box);

                
         }
                  ?>
    </div>
      </form>
     </div>
      
  </div >

   <!-- CENTER CONTAINER ends -->
    <!-- FOOTER starts -->
  <br/><br/><br/><br/><br/>
  <footer class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      
      <marquee><p style=" color:white;" >Copyright &copy; 2016 &middot; All Rights Reserved &middot;</p> </marquee>
    </div>
  </footer>
  <hr>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
  <!-- FOOTER ends -->
