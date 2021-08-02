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
	<div class="wrapper-lol mb-4">
		<div class="container-fluid p-0">
			<div class="content ">
				<div class="container pb-5">
					<div class="row  mb-5">
						<div class="col mb-5">
							<div class="head-title">
								<h1 class="text-center">League Of Legends</h1>
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
					<h1>Players</h1>
				</div>
<!--				TODO: FINSIH IMG-->
				<!--			players for dota-->
				<div class="col-sm-12 col-md-6 col-lg-2 ">
					<div class="card" >
						<img src="assets/images/fordo-swaggins.jpg" height="500px" width="250px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Frodo Swaggins</h5>
							<p class="card-text"></p>
							<a href="_froddo-swaggins.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 col-md-6 col-lg-2 ">
					<div class="card" >
						<img src="assets/images/unamed.jpg" height="500px" width="250px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Tibbles</h5>
							<p class="card-text"></p>
							<a href="_tibbles-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 col-md-6 col-lg-2 ">
					<div class="card">
						<img src="assets/images/dk.jpg" height="500px" width="250px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">DK</h5>
							<p class="card-text"></p>
							<a href="_DK-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 col-md-6 col-lg-2">
					<div class="card" >
						<img src="assets/images/unamed.jpg	" height="500px" width="250px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Jibbles</h5>
							<p class="card-text"></p>
							<a href="-jibbles-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-2 ">
					<div class="card" >
						<img src="assets/images/scraggs.jpg" height="500px" width="250px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Cooked</h5>
							<p class="card-text"></p>
							<a href="_cooked-player-bio.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>
			</div>
			<!--			// matches and upcoming stuff starts here -->
			<!--			TODO: IN THE FUTURE WANT TO MAKE THE ROW MORE LIKE A CAROUSEL SO YOU CYCLE THROUGH THE MATCHES AND THINGS -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h1>Matches</h1>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>upcoming match 1</h3>
						<p>League of Legends BO3</p>

						<p>Fridays Vs SKT</p>

						<p>Thursday 21st</p>

						<p>match start: 14:00PM GMT</p>
						<a href="_singleleaguepage.blade.php" class="btn jason-button">watch here</a>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>upcoming match 1</h3>
						<p>League of Legends BO3</p>

						<p>Fridays Vs SKT</p>

						<p>Thursday 21st</p>

						<p>match start: 14:00PM GMT</p>
						<a href="_singleleaguepage.blade.php" class="btn jason-button">watch here</a>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>upcoming match 1</h3>
						<p>League of Legends BO3</p>

						<p>Fridays Vs SKT</p>

						<p>Thursday 21st</p>

						<p>match start: 14:00PM GMT</p>
						<a href="_singleleaguepage.blade.php" class="btn jason-button">watch here</a>

					</div>
					<div class="col-md-12">
						<h1>Tournaments</h1>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>upcoming tourn 1</h3>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>upcoming tourn 2</h3>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 view-toggle grid-view">
						<h3>upcoming tourn 3</h3>

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