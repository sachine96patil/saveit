<?php
include "includes/head.php"; ?>
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
        <li ><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true">HOME<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="about.php">ABOUT</a></li>
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
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<?php
include "includes/heading.php";
?>



<div class="container-fluid" style="background-image:url('images/30.jpg ');">

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center" style=" color:darkcyan;">ABOUT US</h2>
    </div>
  </div>
  <div class="row" style="font-size:22px; font-family:verdana; color:maroon;">
  	<div class="col-md-6 col-sm-12 col-lg-3">
  		<img src="images/40.jpg" width="300px" height="300px">
  	</div>
    <div class="col-md-6 col-sm-12 col-lg-3 well" >
      <p>NAME : RICHA SHAH </p>
       <p>COLLEGE : SIT,LONAVALA  </p>
              <p>DEPT:COMPUTER ENGG </p>
       <p>CLASS: SE 'B' </p>
    </div>

  	  	<div class="col-md-6 col-sm-12 col-lg-3" >
  		<img src="images/50.jpg" style="float:right;"width="300px" height="300px">
  	</div>
    <div class="col-md-6 col-sm-12 col-lg-3 well" >
      <p>NAME : SACHIN PATIL</p>
       <p>COLLEGE : SIT,LONAVALA  </p>
              <p>DEPT:COMPUTER ENGG </p>
       <p>CLASS: SE 'B' </p>
       <p> </p>    </div>



  </div>
</div>

<div class="row">
<div id="myCarousel" class="carousel slide">
   <!-- Carousel indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
   </ol>   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="images/40.jpg" height=300px width=300px alt="First slide">
        
         <div class="carousel-caption">Richa Shah</div>
      </div>
      <div class="item">
         <img src="images/50.jpg" height=300px width=300px alt="Second slide">
         <div class="carousel-caption">Sachin Patil</div>
      </div>
      
   </div>
   <!-- Carousel nav -->
   <a class="carousel-control left" href="#myCarousel" 
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel" 
      data-slide="next">&rsaquo;</a>
</div> 
</div> 
</div>

<?php include "includes/footer.php";?>