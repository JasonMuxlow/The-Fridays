<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../resources/views/partials/head.blade.php") ?>
</head>
<body>
<!--//nav-->
<?php include("../resources/views/partials/nav.blade.php") ?>
<!--//nav end-->

<!--owl//-->
<?php include("../resources/views/partials/owl_carousel.blade.php") ?>
<!--//owl end//-->


<div class="container p-3">
	<div class="wrapper-view p-3">
		<div class="row">

			<?php include("../resources/views/partials/news_content.blade.php") ?>


			<?php include("../resources/views/partials/pagination.blade.php") ?>

		</div>
	</div>
</div>

<?php include("../resources/views/partials/footer.blade.php") ?>
<script src="./js/app.js"></script>


</body>
</html>