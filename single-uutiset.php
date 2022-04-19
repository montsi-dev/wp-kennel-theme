<?php get_header(); ?>

    <section class="page-wrap">
        <div class="container">
              
            <?php if(has_post_thumbnail()):?>
                <div class="gallery">
                    <a href="<?php the_post_thumbnail_url('blog-large');?>">
                        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 ">
                    </a>
                </div>
            <?php endif;?>

            <h1 class="mb-3"><?php the_title();?></h1>   
            <?php the_content();?>
            

            <div class="row">            
                <div class="col-lg-6">
                    <!-- <php get_template_part('includes/section','uutiset');?> -->
                    <?php wp_link_pages();?>
                </div>
            </div>

        </div>
    </section>

<?php    get_footer();

?>