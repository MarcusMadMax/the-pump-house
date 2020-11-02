<!-- ======= Support Section ======= -->
<section id="services">
    <div class="container wow fadeInUp">
    <div class="row">
        <div class="col-md-12">
        <h3 class="section-title"><?php the_field('header')?></h3>
        <div class="section-title-divider"></div>
        <p class="section-description"><?php the_field('sub_header')?></p>
        </div>
    </div>

    <div class="row">
        <?php
                $args = array('post_type' => 'supportsection');
                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    get_template_part('partials/page/content', 'supportsection');
                }

                /* Restore original Post Data */
                wp_reset_postdata();

            ?>
        </div>

    </div>
    </div>
</section><!-- End Support Section -->