<?php get_header() ?>

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <?php
            while (have_posts()) :
                the_post();
                get_template_part('partials/page/content','single-supportsection');
            endwhile;
        ?>

    </div>
</section><!-- End Portfolio Details Section -->

<?php get_footer() ?>