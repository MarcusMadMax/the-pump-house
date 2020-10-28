<!-- ======= portfolio Section ======= -->
<section id="portfolio">
    <div class="container wow fadeInUp">

    <?php
        while(have_posts()){
            the_post();
            get_template_part('partials/content','index');
        }//end while
    ?>

        <div class="row">
                <div class='mx-auto mb-3'><h3 class="section-title">What's on</h3>
                    <div class="section-title-divider"></div>
                </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">

                    <?php
                    $terms = get_terms('type',array('hide_empty'=>false));
                    foreach($terms as $term){
                        echo'<li data-filter=".'.$term->slug.'">'.$term->name.'</li>';
                    }
                    ?>

                </ul>
            </div>
        </div>

        <div class="row portfolio-container">

            <div class="col-12 col-lg-4 col-md-6 portfolio-item filter-theatre">
                <?php   
                    $args = array('post_type' => 'show');
                    //Get data (services) from database
                    // The Query
                    $the_query = new WP_Query( $args );
                    
                    // The Loop
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            get_template_part('partials/page/content','show');
                        }

                    /* Restore original Post Data */
                    wp_reset_postdata();

                ?>
            </div>
        </div>
    </div>
</section><!-- End portfolio Section -->