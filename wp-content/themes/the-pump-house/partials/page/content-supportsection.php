<?php
    $terms = get_the_terms( get_the_ID(), 'type' );

    $classes = '';
    foreach($terms as $term){
        $classes .= $term->slug . ' ';
    }

?>

<div class="col-lg-4 col-md-6 service-item">
    <div class="service-icon"><i class="fas fa-file-signature"></i></div>
    <h4 class="service-title"><a href=""><?php the_title()?></a></h4>
    <p class="service-description"><?php the_content()?></p>
</div>