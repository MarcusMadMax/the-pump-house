<?php
    $terms = get_the_terms( get_the_ID(), 'type' );

    $classes = '';
    foreach($terms as $term){
        $classes .= $term->slug . ' ';
    }

?>

<div class="col-12 col-lg-4 col-md-6 portfolio-item <?php echo $classes?>">
    <img src="<?php the_field('photo')?>" class="img-fluid" alt="">
    <div class="portfolio-info">
        <h4><?php the_title()?></h4>
        <p><?php the_field('date')?></p>
        <a href="<?php the_permalink()?>" class="details-link" title="More Details">Details</a>
    </div>
</div>