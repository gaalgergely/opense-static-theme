<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Post Title
            <small>by
                <a href="#">Start Bootstrap</a>
            </small>
        </h1>

        <?php $page = 'blog-single'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="<?php echo $faker->imageUrl(900, 300, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">

                <hr>

                <!-- Date/Time -->
                <p>Posted on <?php $faker->dateTime($max = 'now'); ?></p>

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $faker->sentence(rand(3, 5), true); ?></p>

                <?php $paragraphs = $faker->paragraphs(rand(2, 4), false); ?>

                <?php 
                foreach($paragraphs as $paragraph){
                    echo "<p>$paragraph</p>";    
                } 
                ?>

                <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $faker->sentence(3, true); ?></p>
                    <footer class="blockquote-footer"><?php echo $faker->name; ?> in
                        <cite title="Source Title"><?php echo ucfirst($faker->words(2, true)); ?></cite>
                    </footer>
                </blockquote>

                <?php $paragraphs = $faker->paragraphs(rand(2, 4), false); ?>

                <?php 
                foreach($paragraphs as $paragraph){
                    echo "<p>$paragraph</p>";    
                } 
                ?>

                <hr>

                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form id="commentForm">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="comment" required="" data-validation-required-message="Please enter your comment."></textarea>
                                <p class="help-block"></p>
                            </div>
                            <button type="submit" id="sendCommentButton" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <?php
                    $params = [
                        'exc' => 'gender,name,location,email,login,registered,dob,phone,cell,id,nat',
                        'noinfo' => true,
                        'results' => 4
                    ];
                    $response = json_decode($client->request('GET', 'https://randomuser.me/api/', ['query' => $params])->getBody()->getContents(), true); 
                ?>
                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="<?php echo $response['results'][0]['picture']['medium'] ?>" alt="<?php echo $faker->name; ?>">
                    <div class="media-body">
                        <h5 class="mt-0"><?php echo $faker->name; ?></h5>
                        <?php echo $faker->sentences(rand(3, 6), true); ?>
                    </div>
                </div>

                <!-- Comment with nested comments -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="<?php echo $response['results'][1]['picture']['medium'] ?>" alt="<?php echo $faker->name; ?>">
                    <div class="media-body">
                        <h5 class="mt-0"><?php echo $faker->name; ?></h5>
                        <?php echo $faker->sentences(rand(3, 6), true); ?>

                        <?php for($i=1; $i<=2; $i++){ ?>
                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="<?php echo $response['results'][$i+1]['picture']['medium'] ?>" alt="<?php echo $faker->name; ?>">
                            <div class="media-body">
                                <h5 class="mt-0"><?php echo $faker->name; ?></h5>
                                <?php echo $faker->sentences(rand(3, 6), true); ?>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>

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
