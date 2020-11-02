<!-- ======= About Section ======= -->
<?php get_header()?>

<section id="about">
    <div class="container wow fadeInUp">
    <div class="row">
        <div class="col-md-12">
            <h3 class="section-title mx-auto"><?php the_title()?></h3>
            <div class="section-title-divider"></div>
            <p class="section-description"><?php the_field('second_header')?></p>
        </div>
    </div>
    <div class="container about-container wow fadeInUp">
        <div class="row">
            <div class="col-lg-6 mb-md-5 about-img">
                <img src="<?php the_field('image')?>" alt="The Pump House from the lake">
            </div>
        <div class="col-lg-6 about-content">
            <h2 class="about-title"><p>Shiny new things</p></h2>
            <div class="d-med-flex">
                <p class="about-text">
                    <?php the_field('first_paragraph')?>
                </p>
                <p class="about-text">
                    <?php the_field('second_paragraph')?>
                </p>
            </div>
        </div>
    </div>
</section><!-- End About Section -->
<hr>
