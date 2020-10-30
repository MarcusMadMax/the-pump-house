<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2><?php the_title()?></h2>
    </div>

    </div>
</section><!-- End Breadcrumbs -->
<div class="portfolio-details-container d-lg-flex">
    <div class="portfolio-deails">
        <img src="<?php the_field('photo')?>" class="img-fluid" alt="">
    </div>

    <div class="portfolio-info ml-5">
        <h3>Details</h3>
        <ul class='col'>
            <li><strong>Dates and times</strong>: 
                <div class="dates"><?php the_field('dates')?></div>
            </li>
            <li><strong>Venue</strong>: <?php the_field('venue')?></li>
            <li><strong>Prices</strong>: <?php the_field('price')?></li>
            <li><strong>How to get tickets</strong>: <?php the_field('tickets')?><br><a href="#">
                <button>Get Tikets</button></a>
            </li>
        </ul>
    </div>

</div>

<div class="portfolio-description">
    <h2>About</h2>
    <p><?php the_content()?></p>
</div>

