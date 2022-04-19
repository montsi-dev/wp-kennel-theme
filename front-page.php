<?php
/*
Template Name: Etusivu
*/
?>

<?php get_header(); ?>


<!-- Full Page Image Header -->
<header class="masthead d-flex justify-content-center align-items-end" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
</header>
<div class="d-flex justify-content-center ">
  <a id="puppy-note" href="#news-section" class="btn position-absolute top-0 start-50 translate-middle">
    <h3>Tervetuloa!</h3>
    <p>Katso pentusuunnitelmat uutisista</p>
    <h3><i class="fa fa-angle-double-down"></i></h3>
  </a>
</div>
<div id="news-section"></div>

<section class="page-wrap news-bg">
    <div class="container">

      <?php get_template_part('includes/section', 'uutiset'); ?>

    </div>
</section>

<?php get_footer(); ?>

