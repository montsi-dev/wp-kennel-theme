<aside class="bd-aside sticky-xl-right text-muted align-self-start mb-3 mb-xl-5 px-2">
    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">

        <?php

        if( is_active_sidebar( 'jm_sidebar' ) ){
            dynamic_sidebar( 'jm_sidebar' );
        }
        
        ?>

    </div>
</aside>