<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div class="card mb-3">
        <div class="card-body d-flex flex-column flex-md-row align-items-center">

            <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="img-fluid mr-4 mb-2">
            <?php endif; ?>

            <div class="blog-content mb-3">
                <h3> <?php the_title(); ?> </h3>
                <?php    the_excerpt(); ?>

                <a class="btn mt-3 mb-3" href="<?php the_permalink(); ?>" role="button">Lue lisää</a>
            </div>
        </div>
    </div>

<?php endwhile; else: endif; ?>