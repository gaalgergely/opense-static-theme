<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Portfolio 2
            <small>Subheading</small>
        </h1>

        <?php $page = 'portfolio-2-col'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <div class="row">
            <?php for($i=1; $i<=6; $i++) { ?>
            <div class="col-lg-6 portfolio-item">
                <div class="card h-100">
                    <a href="portfolio-single.html"><img class="card-img-top" src="<?php echo $faker->imageUrl(700, 400, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="portfolio-single.html"><?php echo ucfirst($faker->words(2, true)); ?></a>
                        </h4>
                        <p class="card-text"><?php echo $faker->paragraph(rand(2, 5), true); ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

        <?php require_once('partials/pagination.php'); ?>

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
