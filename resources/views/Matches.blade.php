<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../resources/views/partials/head.blade.php") ?>
</head>
<body>
<!--// navbar-->
<?php include("../resources/views/partials/nav.blade.php") ?>
<!--// nav end -->
<!--//owl start -->
<?php include("../resources/views/partials/owl_carousel.blade.php") ?>


<div class="container">
	<div class="wrapper-view">

				<!--//// upcoming games -->
			<?php include("../resources/views/partials/matches_content.blade.php") ?>

			<!--//pagination//-->
		<?php include("../resources/views/partials/pagination.blade.php") ?>

	</div>
</div>
<!--// pagination ends -->
<!--// footer-->
<?php include("../resources/views/partials/footer.blade.php") ?>

<script src="./js/app.js"></script>


</body>
</html>