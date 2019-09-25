<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">About
            <small>Subheading</small>
        </h1>

        <?php $page = 'about'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="<?php echo $faker->imageUrl(750, 450, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
            </div>
            <div class="col-lg-6">
                <h2>About <?php echo BRAND; ?> Template</h2>
                <?php 
                    $paragraphs = $faker->paragraphs(3, false); 
                    foreach($paragraphs as $paragraph){
                        echo "<p>$paragraph</p>";
                    }
                ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Our Team</h2>

        <div class="row">
            
            <?php
                $params = [
                    'key' => '13744865-04da6d8b4c44773dcfe776a7c',
                    'q' => 'face',
                    'image_type' => 'photo',
                    'category' => 'people',
                    'orientation' => 'horizontal',
                    'min_width' => '750',
                    'editors_choice' => true,
                    'safesearch' => true,
                    'order' => 'popular',
                    'per_page' => 3
                ];
                $response = json_decode($client->request('GET', 'https://pixabay.com/api', ['query' => $params])->getBody()->getContents(), true); 
            ?>
            
            <?php foreach($response['hits'] as $image){ ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="<?php echo $image['webformatURL']; ?>" alt="<?php echo $faker->sentence(5, true); ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $faker->name; ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $faker->jobTitle; ?></h6>
                        <p class="card-text"><?php echo $faker->sentences(2, true); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="#"><?php echo $faker->email; ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <h2>Our Customers</h2>
        <div class="row">
            <?php
                $companies = [
                    'microsoft',
                    'shopify',
                    'wordpress',
                    'audi',
                    'walmart',
                    'apple'
                ];
            ?>
            <?php foreach($companies as $company){ ?>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="<?php echo "https://logo.clearbit.com/$company.com?size=500"; ?>" alt="<?php echo $faker->sentence(5, true); ?>">
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
