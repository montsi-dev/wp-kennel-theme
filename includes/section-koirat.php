<?php
$loop = new WP_Query( array(
    'post_type' => 'Koirat',
    'posts_per_page' => -1
  )
);
?>
<?php if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();?>

<div class="card mb-3">
  <div class="d-flex flex-column flex-md-row align-items-center mb-3 mt-3">

    <?php if(has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid mr-4 mb-2">
    <?php endif; ?>

    <div>
        <h3> <?php the_title(); ?> </h3>
        <?php echo wp_trim_words(get_the_content(), 13) ?> <br>
        <a class="btn mt-3 mb-3" href="<?php the_permalink(); ?>" role="button">Lue lisää</a>
    </div>
  </div>
</div>

<?php endwhile; else: endif; wp_reset_query();?>
