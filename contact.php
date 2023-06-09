<?php
//get data from form  
$name = $_POST['name'];
$number= $_POST['number'];
$email= $_POST['email'];
$gender= $_POST['gender'];

$to = "stayhostels@mail.com";
$subject = "NEW BOOKING REQUEST";
$body = "Name: $name\nNumber: $number\nEmail: $email\nGender: $gender";
$headers = "From: noreply@stayhostels.org" . "\r\n" .
"CC: kiokoeddie254@gmail.com";
if($email!=NULL){
    mail($to,$subject,$body,$headers);
}
if(mail($to, $subject, $body, $headers)) {
        echo "Booking was Successful!!";
    } else {
        echo "Sorry, your booking request could not be sent at this time.";
    }
?>


<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


    <!-- Basic Page Needs
  ================================================== -->

<!DOCTYPE html>
<head>
		<meta charset="utf-8">
	<title>STAY HOSTELS </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0,">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/script.js"></script>
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
	
	
	
    
</head>
		

	
<body class="contact-page">
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="wrap-header zerogrid">
		<div class="row">
			<div id="cssmenu">
				<ul>
				   <li class='active'><a href="index.html">Home</a></li>
				    
				   <li><a href="contact.html">BOOK</a></li>
				</ul>
			</div>
			
		</div>
	</div>
</header>

<section class="content-box box-3">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row">
						<div class="col-2-4">
							<div class="wrap-col wrapper">
								<h1>ALMOST THERE...</h1>
								
								<h5> Payment </h5>
								<span> You are required to pay 12,000 shillings to finalize your booking process and secure an accommodation with us. </span>
								<br>
								<br>
								<br>
								<br>
								<a href="https://goo.gl/maps/RgsWCh4y9k22v4Up7?coh=178573&entry=tt"> <img class="example-image" src="images/location.png" height="50" width="50" alt="" /></a>
								<a class="button" href="tel:+254799543648">Make an enquiry</a>
							</div>
						</div>
						
						<div class="col-2-4">
							<div class="wrap-col wrapper">
								<br>

								<h5> Paybill Number: </h5>
								<span> 247247 </span>  
							<h5> ACCOUNT NUMBER: </h5>
							<span> 0707139152 </span> <br>
							<br>
						
								<a href="https://goo.gl/maps/ujM1iEVPgXZQeXia7?coh=178573&entry=tt" target="new"> <img class="example-image" src="images/location.png" height="50" width="50" alt="" /></a> 
								<a class="button" href="https://wa.link/04qo6t">SEND THE CONFIRMATION MESSAGE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	


<!--////////////////////////////////////Container-->


<!--////////////////////////////////////Footer-->
<footer>
	
	<div class="wrap-footer">
		<div class="zerogrid">
			<div class="row">
				<h3>Contact</h3>
				<span> <a href="tel:"+254799543648"> Phone </a></span></br>
				<span><a href="mailto:stayhostels@gmail.com"> EMAIL</a>   </span></br>
				<span> <a href="https://goo.gl/maps/RgsWCh4y9k22v4Up7?coh=178573&entry=tt">Nairobi West </a> </span></br>
					<span> <a href="https://wa.link/04qo6t"> Whatsapp </a>
						<br>
				<span><strong> Designed by <a href="tel:+254741056273">EDDIE KIOKO</a> </strong></span>
				<ul class="social-buttons">
				<li><a href="tel:0799543648"><i class="fa fa-phone"></i></a>
					</li>
					<li><a href="https://wa.link/04qo6t"><i class="fa fa-whatsapp"></i></a>
					</li>
					<li><a href="https://www.instagram.com/mwendwa2.0/"><i class="fa fa-instagram"></i></a>
					</li>
					<li><a href="mailto:stayhostels@gmail.com"><i class="fa fa-envelope"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
	
</div>
</body></html>