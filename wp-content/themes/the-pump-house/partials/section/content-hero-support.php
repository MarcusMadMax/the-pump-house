<!-- ======= Hero Section ======= -->
<section id="hero" style="background-image: url(<?php the_field('hero_background_image')?>);">
    <div class="hero-container">
        <div class="wow fadeIn">
            <div class="hero-logo">
                <img class="col-12 col-md-6" src="<?php echo get_template_directory_uri()?>/assets/img/the-pump-house/the-pump-house-logo.svg" alt="The Pumphouse logo">
            </div>
            <h1><?php the_field('hero_header')?></h1>
            <h2>The PumpHouse Theatre is a registered charity.</h2>
            <div class="actions">
                <a href="#services" class="btn-get-started">
                    <svg width="150" height="150" class="chevron">
                        <path d="M   0   0
                                L 75 30
                                L 150 0
                                L 150 75
                                L  75 100
                                L   0 75
                                Z" fill="#b71e1e"/>

                        <text x="75" y="55" fill="#fff" text-anchor="middle" alignment-baseline="middle">
                        More
                        </text>
                    </svg>
                </a>
            </div>   
            <div class="info-box">
                <p><?php the_field('hero_info_box_first_line')?></p>
                <h2><?php the_field('hero_info_box_first_title')?></h2>
                <h4><?php the_field('hero_info_box_second_title')?></h4>
                <p><?php the_field('hero_info_box_date')?></p>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->