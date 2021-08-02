<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.blade.php") ?>
</head>
<body>

<!--//nav bar-->
<?php include("partials/nav.blade.php") ?>

<!--nav ends -->

<!--//owl-->
<?php include("partials/owl_carousel.blade.php") ?>

<!--//owl end-->

<!--single team/mathces page header -->
<div class="wrapper">
	<div class="wrapper-creators mb-4">
		<div class="container-fluid p-0">
			<div class="content ">
				<div class="container pb-5">
					<div class="row  mb-5">
						<div class="col mb-5">
							<div class="head-title">
								<h1 class="text-center">Creators</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//heder end -->
<div class="container-flex p-5">

	<div class="wrapper-view">
		<div class="col-md-12 ">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<h1>Creator's</h1>
				</div>
				<!--			players for dota-->
				<div class="col-sm-12 col-md-6 col-lg-2 ">
					<div class="card">
						<img src="assets/images/unamed.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">HarryBoy</h5>
							<p class="card-text"></p>
							<a href="_unamed-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-2 ">
					<div class="card">
						<img src="assets/images/unamed.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Karthy</h5>
							<p class="card-text"></p>
							<a href="_unamed-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-2">
					<div class="card">
						<img src="assets/images/unamed.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Zen</h5>
							<p class="card-text"></p>
							<a href="_unamed-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-2 ">
					<div class="card">
						<img src="assets/images/sassy.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Sassy</h5>
							<p class="card-text"></p>
							<a href="_sassy-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-2">
					<div class="card">
						<img src="assets/images/quinn.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Clown69</h5>
							<p class="card-text"></p>
							<a href="_clown-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>
			</div>

			<!--			// matches and upcoming stuff starts here -->
			<!--			TODO: IN THE FUTURE WANT TO MAKE THE ROW MORE LIKE A CAROUSEL SO YOU CYCLE THROUGH THE MATCHES AND THINGS -->

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h1>Recent Video's</h1>

					</div>
					<!--					<div class="owl-carousel">-->
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>HarryBoy New Vid</h3>
						<div class="creator-vid">
							<iframe width="350" height="200" src="https://www.youtube.com/embed/QqRLVFRe9AU"
									title="YouTube video player" frameborder="5"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>Recent Video 1</h3>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>Recent Video 1</h3>
					</div>
					<!--					</div>-->
					<div class="col-md-12">
						<h1>Highlights</h1>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>highlights 1</h3>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>highlights 1</h3>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>highlights 1</h3>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include("partials/footer.blade.php") ?>

<script src="./dist/app.js"></script>

</body>
</html>