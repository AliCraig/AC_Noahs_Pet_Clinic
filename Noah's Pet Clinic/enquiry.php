<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Noah's Pet Clinic</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="page-wrapper">
	  	<header class="top-header">
			<div class="top-banner">
				<div id="logo">
			  		<h1><a href="services.html">Noah's Pet Clinic</a></h1>		  		
		  		</div>
        	</div>
			<nav class="nav-bar">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li class="active"><a href="enquiry.html">Enquiry</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
      	</header>
	  	<main class="main clearfix">
		  <section class="enquiry-table">
	  			<div id="enquiry-table-img"></div>
		   		<form method="POST" action="enquiry.php">
					<table width="100%" border="0" cellspacing="0" cellpadding="6">
  						<tbody>
    						<tr>
      							<td width="47%" style="text-align: right">&nbsp;</td>
								<td width="53%" style="text-align: left"><strong>Enquiry</strong></td>
    						</tr>
    						<tr>
      							<td style="text-align: right"><label for="name">Name:</label></td>
      							<td style="text-align: left"><input name="name" type="text" id="name" size="25" maxlength="50"></td>
    						</tr>
    						<tr>
      							<td style="text-align: right"><label for="email">Email:</label></td>
      							<td style="text-align: left"><span style="text-align: right"><input name="email" type="email" id="email" size="25" maxlength="50"></span></td>
    						</tr>
    						<tr>
      							<td style="text-align: right">Tel:&nbsp;</td>
      							<td style="text-align: left"><span style="text-align: right"><input type="tel" size="25" maxlength="50"></span></td>
    						</tr>
    						<tr>
      							<td style="text-align: right"><label for="pettype">Pet Type:</label></td>
      							<td style="text-align: left"><p><label><input type="radio" name="pettype" value="dog" id="pettype_0">Dog</label><br><label><input type="radio" name="pettype" value="cat" id="pettype_1">Cat</label><br><label><input type="radio" name="pettype" value="other" id="pettype_2">Other</label><br></p></td>
    						</tr>
   							<tr>
      							<td style="text-align: right"><label for="petname">Pet's Name:</label></td>
      							<td style="text-align: left"><span style="text-align: right"><input name="petname" type="text" id="petname" size="25" maxlength="50"></span></td>
    						</tr>
    						<tr>
      							<td style="text-align: right">Pet's Gender:</td>
      							<td style="text-align: left"><p><label><input type="radio" name="petgender" value="M" id="petgender_0">M</label><br><label><input type="radio" name="petgender" value="F" id="petgender_1">F</label><br></p></td>
    						</tr>
    						<tr>
      							<td style="text-align: right">Pet's Age:</td>
      							<td style="text-align: left"><p><label><input type="radio" name="petage" value="<1" id="petage_0">Less than 1 year</label><br><label><input type="radio" name="petage" value="1-5" id="petage_1">1-5 years</label><br><label><input type="radio" name="petage" value="6-10" id="petage_2">6-10 years</label><br><label><input type="radio" name="petage" value=">10" id="petage_3">Over 10 years</label><br></p></td>
    						</tr>
    						<tr>
								<td style="text-align: right">Service:</td>
								<td style="text-align: left"><p><label><input type="radio" name="service" value="checkup" id="service_0">General Checkup</label><br><label><input type="radio" name="service" value="vaccinations" id="service_1">Vaccinations</label><br><label><input type="radio" name="service" value="neuturing" id="service_2">Neuturing/Spaying</label><br><label><input type="radio" name="service" value="boarding" id="service_3">Boarding</label><br></p></td>
    						</tr>
    						<tr>
      							<td style="text-align: right">&nbsp;</td>
      							<td style="text-align: center"><input type="submit" name="submit" id="submit" value="Submit"></td>
    						</tr>
  					</tbody>
			</table>
	   	</form>
			<?php
$con = mysqli_connect("localhost","root","", "kkk");
	if (!$con) {
		die ("Failed");
	}
	// echo "success.";

	$a = $_POST['petname'];

	
$sql = "SELECT * FROM kkk where service='$a' ";
	$result = $con->query($sql);
			$row = $result->fetch_assoc();  
			echo ("age".$row["age"]."<br>"); 
	


	
	

?>  
			  
			  
	</section>
</main>
<footer class="footer">
	 <p><a href="index.html">Home</a>
		<a href="services.html">Services</a>
		<a href="enquiry.html">Enquiry</a>
		<a href="gallery.html">Gallery</a>
		<a href="contact.html">Contact</a></p>
	 <p>Copyright &copy; 2020 A Craig. All Rights Reserved.</p>
</footer>
</div>
</body>
</html>
