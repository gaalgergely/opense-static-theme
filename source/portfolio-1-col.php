<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Portfolio 1
            <small>Subheading</small>
        </h1>

        <?php $page = 'portfolio-1-col'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <!-- Project One -->
        <?php for($i=1; $i<=4; $i++){ ?>
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-single.html">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="<?php echo $faker->imageUrl(700, 300, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo ucfirst($faker->words(2, true)); ?></h3>
                <p><?php echo $faker->paragraph(3, true); ?></p>
                <a class="btn btn-primary" href="portfolio-single.html"><?php echo ucfirst($faker->words(2, true)); ?>
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <?php } ?>

        <?php require_once('partials/pagination.php'); ?>

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
