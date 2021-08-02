<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.blade.php") ?>
</head>
<body>
<!--// navbar-->
<?php include("partials/nav.blade.php") ?>
<!--// nav end -->
<!--//owl start -->
<?php include("partials/owl_carousel.blade.php") ?>


<div class="container">


	<div class="wrapper-view">
		<div class="row">
			<div class="col-md-6 p-1">
				<!--// buttons to toggle matches and views -->
				<button class="jason-button upcoming-matches-button">Upcoming Games</button>
				<button class="jason-button played-matches-button">Played Matches</button>
			</div>
			<div class="col-md-6 p-1">
				<div class="dropdown">
					<button class="btn jason-button dropdown-toggle" type="button" id="dropdownMenuButton1"
							data-bs-toggle="dropdown" aria-expanded="false">
						Views
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item list-view_button" href="#">List</a></li>
						<li><a class="dropdown-item grid-view_button" href="#">Grid</a></li>
						<li><a class="dropdown-item masonry-view_button" href="#">masonry</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">

				<!--TODO: text in diffrent </p> tages overlap in diffrent views need to look into iyt -->
				<!--//// upcoming games -->
				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">

					<h3>upcoming game 1</h3>
					<p>CS:GO BO3</p>
					<p>Fridays Vs G2</p>
					<p>wednesday 20th</p>
					<p>match start: 12:00PM GMT</p>
					<a href="_singlecsgopage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 2</h3>
					<p>Dota 2 BO3</p>
					<p>Fridays Vs OG</p>
					<p>Thursday 21st</p>
					<p>match start: 13:00PM GMT</p>
					<a href="_singledotapage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 3</h3>
					<p>Call of Duty BO3</p>
					<p>Fridays Vs London Ravens</p>
					<p>wednesday 20th</p>
					<p>match start: 18:00PM GMT</p>
					<a href="_singlecodpage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 4</h3>
					<p>League of Legends BO3</p>
					<p>Fridays Vs SKT</p>
					<p>Thursday 21st</p>
					<p>match start: 14:00PM GMT</p>
					<a href="_singleleaguepage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 5</h3>
					<p>Valorant BO3</p>
					<p>Fridays Vs 100T</p>
					<p>wednesday 20th</p>
					<p>match start: 17:00PM GMT</p>
					<a href="_singlevalopage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 6</h3>
					<p>CS:GO BO3</p>
					<p>Fridays Vs Navi</p>
					<p>Friday 22nd</p>
					<p>match start: 12:00PM GMT</p>
					<a href="_singlecsgopage.blade.php" class="btn jason-button">Match Page</a>
				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 7</h3>
					<p>Dota BO3</p>
					<p>Fridays Vs Nigma</p>
					<p>wednesday 20th</p>
					<p>match start: 12:00PM GMT</p>
					<a href="_singledotapage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 8</h3>
					<p>Call of Duty BO3</p>
					<p>Fridays Vs G2</p>
					<p>wednesday 20th</p>
					<p>match start: 12:00PM GMT</p>
					<a href="_singlecodpage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 upcoming-games">
					<h3>upcoming game 9</h3>
					<p>League BO3</p>
					<p>Fridays Vs G2</p>
					<p>Thursday 21st</p>
					<p>match start: 13:00PM GMT</p>
					<a href="_singleleaguepage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<!--				played games	//////-->

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 1</h3>
					<p>League BO3</p>
					<p>Fridays Vs Fnatic</p>
					<p>Monday 14th</p>
					<p>3-1</p>
					<a href="_singleleaguepage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 2</h3>
					<p>Call of Duty BO3</p>
					<p>Fridays Vs Dallas Empire</p>
					<p>Tuesday 15th</p>
					<p>3-1</p>
					<a href="_singlecodpage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 3</h3>
					<p>Dota BO3</p>
					<p>Fridays Vs Team Secret</p>
					<p>tuesday 15th</p>
					<p>3-1</p>
					<a href="_singledotapage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 4</h3>
					<p>Valorant BO3</p>
					<p>Fridays Vs sentinels</p>
					<p>monday 14th</p>
					<p>3-1</p>
					<a href="_singlevalopage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 5</h3>
					<p>Call of Duty BO3</p>
					<p>Fridays Vs G2</p>
					<p>Monday 14th</p>
					<p>3-1</p>
					<a href="_singlecodpage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 6</h3>
					<p>CS:GO BO3</p>
					<p>Fridays Vs Liquid</p>
					<p>Sunday 13th</p>
					<p>3-1</p>
					<a href="_singlecsgopage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 7</h3>
					<p>CS:GO BO3</p>
					<p>Fridays Vs Cloud 9</p>
					<p>Sunday 13th</p>
					<p>3-1</p>
					<a href="_singlecsgopage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 8</h3>
					<p>League BO3</p>
					<p>Fridays Vs TSM</p>
					<p>Sunday 13th</p>
					<p>3-1</p>
					<a href="_singleleaguepage.blade.php" class="btn jason-button">Match Page</a>

				</div>

				<div class="view-toggle grid-view col-sm-12 col-md-6 col-lg-3 played-games">
					<h3>played game 9</h3>
					<p>League BO3</p>
					<p>Fridays Vs Rouge</p>
					<p>Monday 14th </p>
					<p>3-1</p>
					<a href="_singleleaguepage.blade.php" class="btn jason-button">Match Page</a>

				</div>

			</div>
		</div>
		<!--//pagination//-->
		<div class="col-md-12">
			<nav aria-label="Page navigation pagination-position">
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="#">Previous</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<!--// pagination ends -->
<!--// footer-->
<?php include("partials/footer.blade.php") ?>

<script src="./dist/app.js"></script>


</body>
</html>