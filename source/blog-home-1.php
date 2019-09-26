<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Blog Home One
            <small>Subheading</small>
        </h1>

        <?php $page = 'blog-home-1'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php for($i=1; $i<=3; $i++) { ?>
                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="<?php echo $faker->imageUrl(750, 300, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo ucfirst($faker->words(rand(2, 4), true)); ?></h2>
                        <p class="card-text"><?php echo $faker->sentence(rand(5, 7), true); ?></p>
                        <a href="#" class="btn btn-primary"><?php echo ucfirst($faker->words(rand(2, 4), true)); ?> →</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?php $faker->dateTime($max = 'now'); ?> by
                        <a href="blog-post.html"><?php echo $faker->name; ?></a>
                    </div>
                </div>
                <?php } ?>

                <?php require_once('partials/blog/pagination.php'); ?>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <?php require_once('partials/blog/sidebar.php'); ?>
                
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
