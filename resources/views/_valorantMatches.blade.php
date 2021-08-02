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
	<div class="wrapper-valorant mb-4">
		<div class="container-fluid p-0">
			<div class="content ">
				<div class="container pb-5">
					<div class="row  mb-5">
						<div class="col mb-5">
							<div class="head-title">
								<h1 class="text-center">Valorant</h1>
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
				<div class="col-md-12 ">
					<h1>Players</h1>
				</div>
				<!--			players for dota-->
				<div class="col-sm-12 col-md-6 col-lg-2 ">
					<div class="card">
						<img src="assets/images/JaysiiN.jpg"  class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">⍟JaysiiN</h5>
							<p class="card-text"></p>
							<a href="_jaysiin-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 col-md-6 col-lg-2 ">
					<div class="card" >
						<img src="assets/images/laney.jpg"  class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Laney</h5>
							<p class="card-text"></p>
							<a href="_laney-player-page.blade.php" class="btn jason-button">Go somewhere</a>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 col-md-6 col-lg-2 ">
					<div class="card">
						<img src="assets/images/badassbailey.jpg"  class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">BadAssBailey</h5>
							<p class="card-text"></p>
							<a href="_badassbailey-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 col-md-6 col-lg-2 ">
					<div class="card" >
						<img src="assets/images/CleanSheet.jpg"  class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">CleanSheet</h5>
							<p class="card-text"></p>
							<a href="_cleansheet.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>


				<div class=" col-sm-12 col-md-6 col-lg-2 ">
					<div class="card" >
						<img src="assets/images/_nbk.png"  class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">NBK</h5>
							<p class="card-text"></p>
							<a href="_NBK-player-page.blade.php" class="btn jason-button">Player Page</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<h1>Matches</h1>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-3 view-toggle grid-view">
						<h3>upcoming match 1</h3>
						<p>Valorant BO3</p>
						<p>Fridays Vs 100T</p>
						<p>wednesday 20th</p>
						<p>match start: 17:00PM GMT</p>
						<a href="_singlevalopage.blade.php" class="btn jason-button">watch here</a>

					</div>
					<div class="col-md-6 col-sm-12 col-lg-3 view-toggle grid-view">
						<h3>upcoming match 1</h3>
						<p>Valorant BO3</p>
						<p>Fridays Vs 100T</p>
						<p>wednesday 20th</p>
						<p>match start: 17:00PM GMT</p>
						<a href="_singlevalopage.blade.php" class="btn jason-button">watch here</a>

					</div>
					<div class="col-md-6 col-sm-12 col-lg-3 view-toggle grid-view">
						<h3>upcoming match 1</h3>
						<p>Valorant BO3</p>
						<p>Fridays Vs 100T</p>
						<p>wednesday 20th</p>
						<p>match start: 17:00PM GMT</p>
						<a href="_singlevalopage.blade.php" class="btn jason-button">watch here</a>

					</div>
					<div class="col-md-12">
						<h1>Tournaments</h1>
					</div>
					<div class="col-md-6 col-sm-12 col-lg-3 view-toggle grid-view">
						<h3>upcoming tourn 1</h3>

					</div>
					<div class="col-md-6 col-sm-12 col-lg-3 view-toggle grid-view">
						<h3>upcoming tourn 2</h3>

					</div>
					<div class="col-md-6 col-sm-12 col-lg-3 view-toggle grid-view">
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