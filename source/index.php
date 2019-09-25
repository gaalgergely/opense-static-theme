<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <header>
        <?php require_once('partials/carousel.php'); ?>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to <?php echo BRAND; ?> Template</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <?php for($i=1; $i<=3; $i++){ ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header"><?php echo ucfirst($faker->words(2, true)); ?></h4>
                    <div class="card-body">
                        <p class="card-text"><?php echo $faker->paragraph(2, true); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary"><?php echo ucfirst($faker->words(2, true)); ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Portfolio Heading</h2>

        <div class="row">
            <?php for($i=1; $i<=6; $i++){ ?>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="portfolio-single.html"><img class="card-img-top" src="<?php echo $faker->imageUrl(700, 400, 'business'); ?>" alt="<?php echo $faker->sentence(5, true) ?>"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="portfolio-single.html"><?php echo ucfirst($faker->words(2, true)); ?></a>
                        </h4>
                        <p class="card-text"><?php echo $faker->paragraph(5, true); ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2><?php echo BRAND; ?> Template Features</h2>
                <p><?php echo $faker->sentence(8, true) ?>:</p>
                <ul>
                    <li>
                        <strong>Bootstrap v4</strong>
                    </li>
                    <li>jQuery</li>
                    <li>Font Awesome</li>
                    <li>Working contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                </ul>
                <p><?php echo $faker->paragraph(5, true); ?></p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="<?php echo $faker->imageUrl(700, 450, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p><?php echo $faker->paragraph(2, true); ?></p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
