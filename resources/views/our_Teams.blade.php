<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.blade.php") ?>
</head>
<body>
<!--//nav start-->
<?php include("partials/nav.blade.php") ?>

<!--//nav ended-->
<!--//owl -->
<?php include("partials/owl_carousel.blade.php") ?>

<div class="container">

	<div class="wrapper-view">
		<div class="row">
			<div class="col-md-12">
				<div class="m-3 team-buttons">
					<button class="show-players-button jason-button" type="button">Show Players</button>
				</div>
			</div>
			<!--			TODO:need to make it so the greyscale only applies to the background img but its affecting everything -->
			<!--			//diifrent team frames-->
			<div class="col-md-3 col-sm-12 team-frame team-frame-csgo">
				<h2 class="wallpaper-title">csgo team</h2>
				<div class="team-players">
					<table class="table table-team-players table-team-players-toggle">
						<tbody>
						<tr>
							<td hre colspan="10"><a href="_csgoMatches.blade.php">⍟JaysiiN </a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_csgoMatches.blade.php"> ⍟FISHY</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_csgoMatches.blade.php"> BadAssBailey</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_csgoMatches.blade.php"> ChiefMayes</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_csgoMatches.blade.php"> Cooked</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--///next frame-->
			<div class="col-md-3 col-sm-12 team-frame team-frame-dota">
				<h2 class="wallpaper-title">Dota 2</h2>
				<div class="team-players">
					<table class="table table-team-players table-team-players-toggle">
						<tbody>
						<tr>
							<td colspan="10"><a href="_dotaMatches.blade.php">SumaiL</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_dotaMatches.blade.php">Topson</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_dotaMatches.blade.php">Ceb</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_dotaMatches.blade.php">Saksa</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_dotaMatches.blade.php">N0tail</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//next frame-->
			<div class="col-md-3 col-sm-12 team-frame team-frame-cod">
				<h2 class="wallpaper-title">Call of Duty</h2>
				<div class="team-players">
					<table class="table table-team-players table-team-players-toggle">
						<tbody>
						<tr>
							<td colspan="10"><a href="_callofdutyMatches.blade.php">Scump</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_callofdutyMatches.blade.php">Formal</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_callofdutyMatches.blade.php">Envoy</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_callofdutyMatches.blade.php">Dashy</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_callofdutyMatches.blade.php">General (SUB)</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//next frame-->
			<div class="col-md-3 col-sm-12 team-frame team-frame-lol">
				<h2 class="wallpaper-title">League of Legends</h2>
				<div class="team-players">
					<table class="table table-team-players table-team-players-toggle">
						<tbody>
						<tr>
							<td colspan="10"><a href="_leagueMatches.blade.php">Cooked</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_leagueMatches.blade.php">Jibbles</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_leagueMatches.blade.php">DK</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_leagueMatches.blade.php">Tibbles</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_leagueMatches.blade.php">Frodo Swaggins</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//next frame-->
			<div class="col-md-3 col-sm-12 team-frame team-frame-valorant">
				<h2 class="wallpaper-title">Valorant</h2>
				<div class="team-players">
					<table class="table table-team-players table-team-players-toggle">
						<tbody>
						<tr>
							<td colspan="10"><a href="_valorantMatches.blade.php">⍟JaysiiN</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_valorantMatches.blade.php">Laney</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_valorantMatches.blade.php">BadAssBailey</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_valorantMatches.blade.php">CleanSheet</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_valorantMatches.blade.php">Cooked</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//next frame-->
			<div class="col-md-3 col-sm-12 team-frame team-frame-creators">
				<h2 class="wallpaper-title">Creators</h2>
				<div class="team-players">
					<table class="table table-team-players table-team-players-toggle">
						<tbody>
						<tr>
							<td colspan="10"><a href="_creatorsPage.blade.php">HarryBoy</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_creatorsPage.blade.php">Karthy</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_creatorsPage.blade.php">Zen</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_creatorsPage.blade.php">Sassy</a></td>
						</tr>
						<tr>
							<td colspan="10"><a href="_creatorsPage.blade.php">Clown69</a></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--last frame-->
		</div>
	</div>
</div>

<!--//footer -->
<?php include("partials/footer.blade.php") ?>
<script src="./dist/app.js"></script>


</body>
</html>