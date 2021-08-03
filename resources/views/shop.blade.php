<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../resources/views/partials/head.blade.php") ?>
</head>

<body>
<!--// nav starts//-->
<?php include("../resources/views/partials/nav.blade.php") ?>

<!--// nav ends //-->
<?php include("../resources/views/partials/owl_carousel.blade.php") ?>


<div class="d-flex" id="wrapper">
    <?php include("../resources/views/partials/sidenav.blade.php") ?>


    <div id="page-content-wrapper" class="">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 my-3 mx-2">

                    <?php include("../resources/views/partials/shop_content.blade.php") ?>
                </div>
            </div>

            <?php include("../resources/views/partials/pagination.blade.php") ?>

        </div>
    </div>
</div>


<?php include("../resources/views/partials/footer.blade.php") ?>
</body>
<script src="/js/app.js" defer></script>


<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>-->
