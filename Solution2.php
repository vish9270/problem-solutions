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
  <h1>Solution 2</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-group">
    <label for="items">No. of Items</label>
    <div class="row">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="No. of Breads" name="breadno" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="No. of Vadas" id="load2" name="vadano" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="No. of Samosa" id="load3" name="samosano" required="">
    </div>
</div>

 <div class="form-group">
    <label for="prices">Prices</label>
    <div class="row">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Price of Vada Pav" name="vadaprice" required="">
    <input type="tel" class="form-control col-md-3 m-2" placeholder="Price of Samosa Pav" id="load2" name="samosaprice" required="">
   
  </div>
</div>

 <button type="submit" class="btn btn-primary" name="submit_btn2">Submit</button>
</form>  

<div class="d-flex flex-row-reverse">
<a href="Solutions.php" class="btn btn-dark"><span aria-hidden="true">&larr;</span> Go Back</a>      
</div>          
</div>

</body>
</html>
<?php 
  if(isset($_POST['submit_btn2'])){

    $breadno=$_POST['breadno'];
    $vadano=$_POST['vadano'];
    $samosano=$_POST['samosano'];
    $vadaprice=$_POST['vadaprice'];
    $samosaprice=$_POST['samosaprice'];
    $profit=0;
    if($vadaprice>=$samosaprice){
    	//checking if breadno is>1
    	while(($vadano>0) AND ($breadno>1)){
			$profit=$profit+$vadaprice;
			$vadano--;
			$breadno=$breadno-2;
    	}		
    	while(($samosano>0) AND ($breadno>1)){
    			$profit=$profit+$samosaprice;
    			$samosano--;
    			$breadno=$breadno-2;
    		}
     }
    else{

    	//checking if breadno is>1
    	while(($samosano>0) AND ($breadno>1)){
    			$profit=$profit+$samosaprice;
    			$samosano--;		//using 1 samosa
    			$breadno=$breadno-2;		//using 2 breads
    		}
    		while(($vadano>0) AND ($breadno>1)){
    			$profit=$profit+$vadaprice;
    			$vadano--;		//using 1 vada
    			$breadno=$breadno-2;
    		}
    }
	 echo '<br>
	 <div class="container">
	 	<div class="row">
		 <div class="alert alert-success fade show col-md-3 m-1" role="alert">
	  	 <strong>Bread Left: '.$breadno.'</strong></div>
	  	 <div class="alert alert-success fade show col-md-3 m-1" role="alert">
	  	 <strong>Vada Left: '.$vadano.'</strong></div>
	  	 <div class="alert alert-success fade show col-md-3 m-1" role="alert">
	  	 <strong>Samosa Left: '.$samosano.'</strong></div>
	</div>
	<div class="row">
		 <div class="alert alert-success fade show col-md-3 m-1" role="alert">
	  	 <strong>Vada Pav Price: '.$vadaprice.'</strong></div>
	  	 <div class="alert alert-success fade show col-md-3 m-1" role="alert">
	  	 <strong>Samosa Pav Price: '.$samosaprice.'</strong></div>
	  	 <div class="alert alert-danger fade show col-md-5 m-1" role="alert">
	  	 <strong>Maximum Profit Possible: '.$profit.' Rs.</strong></div>
	</div>
	</div>';	
  }
?>