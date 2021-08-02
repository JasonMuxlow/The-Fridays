<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.blade.php") ?>
</head>
<body>
<!--//nav starts here//-->
<?php include("partials/nav.blade.php") ?>
<!--// carousel start-->
<!--//owl-->
<?php include("partials/owl_carousel.blade.php") ?>

<!--//owl end-->
<!--// carousel end-->
<div class="container-fluid">
	<div class="wrapper-view">

		<!--//nav ends here// -->


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="match-page-view">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<img src="assets/images/JaysiiN.jpg" height="500px" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">⍟JaysiiN</h5>
										<p class="card-text"></p>
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="player-bio p-3">
									<ul>
										<li class="player-bio-list"> Game: CS:GO/Valorant </li>
										<li class="player-bio-list"> Role: Support</li>
										<li class="player-bio-list">AGE: 24</li>
										<li class="player-bio-list">
											<button class="btn jason-button"><i class="fab fa-twitch"></i></button>
											<button class="btn jason-button"><i class="fab fa-youtube"></i></button>
											<button class="btn jason-button"><i class="fab fa-twitter"></i></button>
											<button class="btn jason-button"><i class="fab fa-instagram"></i></button>
										</li>
										<li class="player-bio-list">Team: <button class="btn jason-button">CS:GO</button> <button class="btn jason-button">Valorant</button></li>
									</ul>
								</div>
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

