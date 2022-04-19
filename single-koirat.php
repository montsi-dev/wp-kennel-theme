<?php get_header(); ?>

<section class="page-wrap dogs-bg">
    <div class="container">
        <div class="d-flex justify-content-center mt-3 mb-1">
            <img src="<?php the_post_thumbnail_url() ?>" alt="dog" style="max-width:500px">  
        </div>

        
        <div class="dog-names d-flex align-items-center flex-column mb-3">
            <h4><?php the_field('virallinen_nimi') ?></h4>
            <h4>"<?php the_title(); ?>" </h4>
            <p><?php if( get_field('syntymaaika')) : ?>
                (  Synt. <?php the_field('syntymaaika') ?> )
                <?php endif; ?></p>
        </div>
        <!-- <hr> -->
        <div class="dog-info row">

        <div class="col-md-8 d-flex flex-column justify-content-center">
            <?php the_content(); ?>
        
            <?php if( get_field('linkki_sukutauluun')) : ?>
                <div >
                <a class="btn mt-1 mb-1" href="<?php the_field('linkki_sukutauluun'); ?>" role="button"><?php the_title(); ?> KoiraNetissä </a>
                </div>    
            <?php endif; ?>
        </div>
        <div class="col-md-4 mt-3">

            <?php $fields = get_field_objects(); ?>

            <?php if( $fields ): ?>
                <ul class="list-group">
                <?php foreach( $fields as $field ): ?>

                    <?php if( $field['value'] && 
                        $field['value'] !== get_field('syntymaaika') &&
                        $field['value'] !== get_field('virallinen_nimi') &&
                        $field['value'] !== get_field('linkki_sukutauluun') 
                    ): ?>
                        <li class="list-group-item"><b><?php echo $field['label']; ?>:</b> <?php echo $field['value']; ?></li>
                    <?php endif; ?>

                <?php endforeach; ?>
                </ul>

            <?php endif; ?>
        </div>
        
        </div>
    </div>
        <!--
            linkki kaikkiin koiriin 
            echo get_post_type_archive_link('koira'); -->
</section> 

<?php get_footer(); ?>