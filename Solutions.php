<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="jumbotron text-center">
  <h1>Solutios of the Problem Satement</h1>
  <p>By Wishvesh Ujawane</p> 
</div>
<div class="container">
  <h1>Solution 1</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group">
    <label for="serverno">No of Server:</label>
    <input type="tel" class="form-control" placeholder="Enter the no. of Server" id="serverno" name="serverno" required="">
  </div>
  <div class="form-group">
    <label for="load">Enter the Load in Every 5 Minutes</label>
    <div class="row">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Load 1%" id="load1" name="load1" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Load 2%" id="load2" name="load2" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Load 3%" id="load3" name="load3" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Load 4%" id="load4" name="load4" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Load 5%" id="load5" name="load5" required="">
    </div>
</div>
  <button type="submit" class="btn btn-primary" name="submit_btn1">Submit</button>
</form>
<div class="d-flex flex-row-reverse">
<a href="Solution2.php" class="btn btn-dark">Visit to Solution 2 <span aria-hidden="true">&rarr;</span></a>      
</div>     
</div>

</body>
</html>
<?php 
  if(isset($_POST['submit_btn1'])){
    $serverno=$_POST['serverno'];
    
    $i=1;
    while ($i<6) {
      if($_POST['load'.$i]<50){
        $serverno=floor($serverno/2);
      }
      else{
        $serverno=floor(2*$serverno+1);
      }
      $i++;
    }
    echo '<br>
   <div class="container">
    <div class="row">
     <div class="alert alert-success fade show col-md-12 m-1" role="alert">
       <strong>After 5 minutes '.$serverno.' server is running.</strong></div></div></div>';
  }
?>

