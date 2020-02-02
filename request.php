<html>
 <head>
  <title>Free Quote</title>
<link rel="stylesheet" type="text/css" href="./style.css">
 </head>
 <body>


<div class="header">
  <img src="conantconstructionlogo.jpg">
  <h1>Conant Construction, LLC.</h1>
  <h4>One Call Does It All</h4>
<p>(603) 714-2252</p>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="#">Projects</a>
  <a href="#" class="right">Facebook</a>
</div>

<div class="row">
  <div class="main">
	<?php 
		if (isset($_FILES['pic'])) {
							
			$myFile = $_FILES['pic'];
			$fileCount = count($myFile["name"]);
			
			$uploaddir = "./uploads/";
			for ($i = 0; $i < $fileCount; $i++) {
				echo $i;
				echo "\n";
				
				$uploadfile = $uploaddir . $_POST["contact_value"] . "_" . basename($myFile["name"][$i]);
				
				if (move_uploaded_file($myFile['tmp_name'][$i], $uploadfile)) {
					echo "Success.\n";
				} else {
					echo "Failure.\n";
					echo 'Here is some more debugging info:';					
				}
				echo "</ pre>";
				
				
			}
		}
	?>
  
  </div>
  
</div>

<div class="footer">
<p>Call us today! <br />
(603) 714-2252</p>
  <p>Hours: 7:00am to 7:00pm</p>
</div>
 </body>
</html>