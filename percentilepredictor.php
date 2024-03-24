<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Percentile Predictor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	

	</head>
	<body style="background: linear-gradient(115deg, blue, white);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<h3 class="heading-section text-center">Percentile Predictor</h3>
		      	<h3 class="text-center mb-4">Enter your name and JEE Mains marks to know expected percentile</h3>
						<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]) ?>" method="POST" class="login-form">
		      		<div class="form-group">
						<h3>Name:</h3>
		      			<input type="text" class="form-control rounded-left" name="name" placeholder="Enter Your Name" value="<?php echo $_SESSION["username"]; ?>" readonly>
		      		</div><br>
	            <div class="form-group">
					<h3>JEE Mains Marks: (out of 300)</h3>
	              <input type="text" class="form-control rounded-left" name="marks" placeholder="JEE Mains marks" value="<?php echo $_SESSION['marks']; ?>" readonly>
	            </div><br>

                <div class="form-group">
					<h3>PREDICTED PERCENTILE:</h3>
	              <input type="text" class="form-control rounded-left" name="marks" placeholder="JEE Mains marks" value="<?php echo $_SESSION['percentile']; ?>" readonly>
	            </div><br>
	            
	            <div class="form-group">
	            	<button type="submit" name="logout" class="btn btn-primary rounded submit p-3 px-5">Logout</button>
	            </div><br><br>
	          </form>
	        </div>
				</div>
			</div>
		</div>
        <?php
        if(isset($_POST['logout'])){
            header("location:logout.php");
        }
        ?>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>

</html>
