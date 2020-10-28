<?php
    $terms = get_the_terms( get_the_ID(), 'type' );

    $classes = '';
    foreach($terms as $term){
        $classes .= $term->slug . ' ';
    }

?>
Hello World
<div class="col-12 col-lg-4 col-md-6 portfolio-item <?php echo $classes?>">
    <img src="<?php the_field('photo')?>" class="img-fluid" alt="">
    <div class="portfolio-info">
        <h1>Hello</h1>
        <h4><?php the_title()?></h4>
        <p><?php the_content()?></p>
        <a href="portfolio-details.html" class="details-link" title="More Details">Details</a>
    </div>
</div>