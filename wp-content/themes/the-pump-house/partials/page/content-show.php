<?php 
$terms = get_the_terms(get_the_ID(),'type');
$classes= "";

foreach($terms as $term){
    $classes.=$term->slug.'';
}
?>
<div class="row <?php echo $classes?>">
    <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active"><?php the_title()?></li>
        </ul>
    </div>
</div>

<div class="row portfolio-container">

    <div class="col-12 col-lg-4 col-md-6 portfolio-item filter-theatre">
        <img src="<?php the_field('image')?>" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>A Time to Laugh</h4>
            <p>26 OCTOBER 2020</p>
            <a href="portfolio-details.html" class="details-link" title="More Details">Details</a>
        </div>
    </div>

</div>