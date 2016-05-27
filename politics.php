<?php
include "includes/head.php"; 
include "includes/nav.php"; 
include "includes/heading.php";
include "includes/connect.php";
?>


<div class="container-fluid " style="background-image:url('images/30.jpg');">
  <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center" style=" color:darkorange;">POLITICS</h2>
    </div>
  </div>

  <div class="row">
        
<?php 
$query = "SELECT * FROM `politics`";
            $result = mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($result)){
  echo '
<div class="panel panel-primary">
   <div class="panel-heading">'.$row["Title1"].
   '</div>
   <div class="panel-body">'.
    $row["User1"].
  ' </div>
</div>';
}
?>
         
          </div>

  
  <div class="row text-center">         
        Enter the title to be searched for:<br/>
         <form action ="politics.php" method = post>
       <input type ="text" name = "text" value = ""></input>
         <input type="submit" name = "submit" value ="Go" class="btn btn-danger"></input>
         
        </form>
      </div>
      <br/><br/><br/>



  <?php

  if(isset ($_POST["text"]))
  {
$value = $_POST["text"];

$q1="SELECT Title1,User1 FROM politics WHERE Match(Title1) Against ('$value')";

$res = mysqli_query($connection,$q1);
if($res)

{
  echo '<div class="row text-center" style="color:darkgreen; font-size:23px;">'.' Showing search results for "'. $value.' "</div>';
    while($row=mysqli_fetch_assoc($res))
    {
  echo '
<div class="panel panel-primary">
   <div class="panel-heading">'.$row["Title1"].
   '</div>
   <div class="panel-body">'.
    $row["User1"].
  ' </div>
</div>';
}

}
else{   
    
   echo "Oops!!No article has been saved with such title";  

}
}
?>

</div>
</div>   


<?php include "includes/footer.php";?>