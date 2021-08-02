<!DOCTYPE html>
<html class="theme-dark" lang="en">
<head>
    <?php include("partials/head.blade.php") ?>
</head>
<body>
<!--//nav starts here//-->
<?php include("partials/nav.blade.php") ?>
<!--//OWL START -->
<?php include("partials/owl_carousel.blade.php") ?>

<!--// carousel start-->
<div id="carouselExampleFade" class="carousel slide carousel-fade mb-3" data-bs-ride="carousel ">
	<div class="carousel-inner">

		<div class="carousel-item carousel-img active">
			<img src="assets/images/_carousel-img-1.jpeg" class="d-block img-fluid " alt="...">
		</div>

		<div class="carousel-item carousel-img ">
			<img src="assets/images/_carousel-img-2.jpeg" class="d-block img-fluid " alt="...">
		</div>

		<div class="carousel-item carousel-img">
			<img src="assets/images/_carousel-img-3.jpeg" class="d-block img-fluid " alt="...">
		</div>

	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<div class="container-fluid">
	<div class="wrapper-view">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<!--						TODO: make the text look cleaner maybe better background for the boxes-->
						<div class="col-md-5 col-sm-12">
							<div class="home-view">
								<h3>Who are we?</h3>
								<br>
								<p>We started small in Call of Duty but saw alot of success and slowly expanded into the
									team we are today.
								</p>
								<br>
								<p>"We are a new Esports Team with the goal to compete and win!" - Jason Muxlow CEO</p>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="home-view">
								<h3>Lan is Back For COD</h3>
								<iframe width="560" height="300" src="https://www.youtube.com/embed/FWvy3wX__eU"
										title="YouTube video player" frameborder="0"
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
										allowfullscreen></iframe>
							</div>
						</div>

						<div class="col-md-7 col-sm-12">
							<div class="home-view fortnight-tease">
								<h3>Fortnight Team Soon!</h3>
							</div>
						</div>
						<div class="col-md-5 col-sm-12">
							<div class="home-view">
								<h3>Plans moving forward?</h3>
								<br>
								<p>As a team since we started early this year we have expanded a lot into all the major
									games like CS:GO, Dota, LOL, and we have a good content team.
									The plans moving forward would be to keep expanding but also improving what we have
									build and invest in the players.
								</p>
								<br>
							</div>
						</div>

						<div class="col-md-5 col-sm-12">
							<div class="home-view">
								<h3>GOALS</h3>
								<ul>
									<li>As any Esports team the Goal is to grow your fanbase by making the players
										relatable and we do that in many ways through streams, Videos, Q&A's.
										We like the build up story lines for the fans to get behind and follow.
									</li>
									<li> Trophies, As a team we want to win as much as we can and be dominant.</li>
								</ul>
							</div>
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="home-view dota-qual">
								<h3>Come Support Us Try and Qualify For TI </h3>
								<h3>Dates:Aug 5 - 15, 2021</h3>
								<h3>#UpTheFridays -Twitter</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<!--//footer starts //-->
<?php include("partials/footer.blade.php") ?>
<!--//footer ends //-->
<script src="./dist/app.js"></script>
</html>

