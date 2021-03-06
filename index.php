<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THIS WAY</title>
<!-- Animate CSS https://daneden.github.io/animate.css/ -->	
	<link rel="stylesheet" href="css/animate.css">
<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- JQuery -->
	<script	  src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!-- JQuery Boostrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Link wWaypoints JS -->
	<script src="js/waypoints.min.js"></script>
<!-- Link CSS -->
	<link rel="stylesheet" href="css/style.css">
<!-- Waypoints -->
	<script>
		$(function(){

			$("h1").waypoint(function() {
				$(this).toggleClass( 'bounceInLeft animated' );
				},
				{
					offset: '70%',
					triggerOnce: true
				});

			$("h3").waypoint(function() {
				$(this).toggleClass( 'bounceInRight animated' );
				},
				{
					offset: '70%',
					triggerOnce: true
				});

			$("h2").waypoint(function() {
				$(this).toggleClass( 'fadeInLeft animated' );
				},
				{
					offset: '70%',
					triggerOnce: true
				});

			$("#txt_bmx").waypoint(function() {
				$(this).toggleClass( 'fadeInRight animated' );
				},
				{
					offset: '70%',
					triggerOnce: true
				});

			$(".iconw").waypoint(function() {
				$(this).toggleClass( 'rubberBand animated' );
				},
				{
					offset: '70%',
					triggerOnce: true
				});

		});
	</script>
<!-- -->
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
</head>
<body>

	<?php include_once "inc/header.php" ?>

	<section id="hipster">
		<div class="container">

			<h1>To be a hipster is...</h1>
			<h3>... ask your mother!</h3>
			
		</div>	
	</section>
	<section id="galeria">
		<div class="row">
			<div class="col col-lg-6 col-md-6 col-sm-4 col-xs-4">
				<div class="overlay overlay-violet"></div>
				<img src="img/bmx.jpg" alt="">
			</div>
			<div class="col col-lg-3 col-md-3 col-sm-4 col-xs-4">
				<div class="overlay overlay-red"></div>
				<img src="img/food.jpg" alt="">
			</div>
			<div class="col col-lg-3 col-md-3 col-sm-4 col-xs-4">
				<div class="overlay overlay-gold"></div>
				<img src="img/girl.jpg" alt="">
			</div>
		</div>

		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="overlay overlay-green"></div>
				<img src="img/book.jpg" alt="">
			</div>
			<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="overlay overlay-gold"></div>
				<img src="img/sea.jpg" alt="">
			</div>
			<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<div class="overlay overlay-blue"></div>
				<img src="img/car.jpg" alt="">
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<hr>
					<h2 style="opacity: 0;">Titular</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. </p>
					<hr>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div class="text-center">
						<i class="iconw fa fa-bomb fa-5x" aria-hidden="true"></i>
						<i class="iconw fa fa-anchor fa-5x" aria-hidden="true"></i>
						<i class="iconw fa fa-lemon-o fa-5x" aria-hidden="true"></i>
					</div>
				<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. </p>
				</div>
				<hr>
			</div>
			
		</div>
	</section>
	<br>
	<section>
		<div class="container">
			<div id="bmx" class="row">
				<div class="col-md-4"></div>
				<div style="opacity: 0;" id="txt_bmx" class="col-md-8">
					<h2>Titular</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas animi autem. Quidem dignissimos doloremque, voluptate eum natus iste aut totam esse quas explicabo expedita quam non enim pariatur possimus. </p>
				</div>
			</div>
		</div>
	</section>
	<br>
	<section>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		   <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="img/california.jpg" alt="California">
		      <div class="carousel-caption">
		      <h3>California</h3>
		      </div>
		    </div>

		    <div class="item">
		      <img src="img/new_york.jpg" alt="New York">
		      <div class="carousel-caption">
		      <h3>New York</h3>
		      </div>
		    </div>

		    <div class="item">
		      <img src="img/cuba.jpg" alt="Cuba">
		      <div class="carousel-caption">
		      <h3>Cuba</h3>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<?php include_once "inc/footer.php" ?>

</body>
</html>