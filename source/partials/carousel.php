<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for($i=0; $i<=2; $i++) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" <?php if($i==0) echo "class=\"active\"" ?>></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php for($i=0; $i<=2; $i++) { ?>
        <!-- Slide <?php echo $i; ?> - Set the background image for this slide in the line below -->
        <div class="carousel-item <?php if($i==0) echo "active"; ?>" style="background-image: url('<?php echo $faker->imageUrl(1900, 1080, 'business'); ?>')">
            <div class="carousel-caption d-none d-md-block">
                <h3><?php echo ucfirst($faker->words(2, true)); ?></h3>
                <p><?php echo $faker->sentence(5, true) ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
