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


		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="match-page-view">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<img src="assets/images/sassy.png" height="500px" class="card-img-top" alt="...">
									<div class="card-body">
										<h5 class="card-title">Sassy</h5>
										<p class="card-text"></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="player-bio p-3">
									<ul>
										<li class="player-bio-list"> Game: Multi</li>
										<li class="player-bio-list"> Role: Streamer</li>
										<li class="player-bio-list">AGE: ??</li>
										<li class="player-bio-list">
											<button class="btn jason-button"><i class="fab fa-twitch"></i></button>
											<button class="btn jason-button"><i class="fab fa-youtube"></i></button>
											<button class="btn jason-button"><i class="fab fa-twitter"></i></button>
											<button class="btn jason-button"><i class="fab fa-instagram"></i></button>
										</li>
										<li class="player-bio-list">Team:
											<button class="btn jason-button">Creator</button>

										</li>
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

