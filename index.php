<!DOCTYPE html>
<html lang="en">
<head>
<title>Conant Construction, LLC.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./style.css">
</style>
</head>
<body>
	<?php 
		// Validate input and sanitize
		if ($_SERVER['REQUEST_METHOD']== "POST") {
			$valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.

			if (empty($_POST["contact_name"])) {
				$contact_nameErr = "Name is required.";
				$valid = false; //false
			}
			else {
				$contact_name = $_POST["contact_name"];
			}
		
			if (empty($_POST["project_desc"])) {
				$project_descErr = "Description of the project is required.";
				$valid = false;
			}
			else {
				$project_desc = $_POST["project_desc"];
			}

			//if valid then redirect
			if($valid){
				$url = 'https://' . $_SERVER['HTTP_HOST']; //get server
				$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); //get current directory
				$url .= '/request.php';
				
				header('Location: ' . $url, TRUE, 302);
				exit();
			}
		}
	?>
<div class="mainContainer">

<div class="header">
	<div class="logoRow">
		<div class ="logo">
			<img src="conantconstructionlogo.jpg">
		</div>
		<div class="logoText">Conant Construction, LLC.
			<div class="logoQuote">One Call Does It All</div>
		</div>
	</div>
</div>

<div class="navbar">
  <a href="#" class="active">Home</a>
  <a href="#">Projects</a>
  <a href="#" class="right">Facebook</a>
</div>

<div class="row">
  <div class="main">
    <h2>We can handle all your needs.</h2>
    <h5>From roofing, siding, windows, and doors. We have you covered.</h5>
    <p>For over 40 years, Conant Construction, LLC. has been a one call does it all in the field of general contract construction. From interior to exterior, and even landscape design, we provide quality craftsmanship with each job. New construction or remodels, and repairs. No job is too big or small.</p>
    <br>
  </div>
  <div class="side">
    <p></p>
    <h3>Free Quote</h3>
    <p>Please fill this form out for a free quote. I will do my best to get back to you in a timely manner.</p>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
		Name*: <?php echo $contact_nameErr; ?><br />
		<input type="text" name="contact_name"><br /><br />
		Project Description: (required) <br />
		<textarea name="project_desc" rows="3" cols="21"></textarea><br /><br />
		Contact Information: (required)<br />
		<input type="radio" name="contact" value="Email" checked> Email<br />
		<input type="radio" name="contact" value="Text"> Text Message<br />
		<input type="text" name="contact_value"><br /><br />
		<div>Upload pictures (optional)</div>
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
		<input type="file" name="pic[]" multiple /><br /><br />
		<input type="submit" name="submit">
	</form>
  </div>
</div>

<div class="footer">
<p>Call us today! <br />
(603) 714-2252</p>
  <p>Hours: 7:00am to 7:00pm</p>
</div>
</div>

</body>
</html>