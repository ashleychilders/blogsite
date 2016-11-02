<?php get_header(); ?>

  <div class="row">

<!-- BEGIN PAGE PHP -->
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                      the_post();
                      if ( has_post_thumbnail() ) { ?>
                      <div class="three columns">
                        <div class="post-thumbnailpage">
                            <?php the_post_thumbnail('small'); ?></div>
                            <?php } ?>
                          </div>
                            <div class="nine columns">
                                <div class="post-title">
                                  <h2><?php the_title(); ?></h2>
                                </div>
                                  <?php the_content();

                            endwhile;
                        endif; ?>
                          </div>
             <!-- End Loop -->
      </div>
    </div>
<!-- End Section Container -->
<?php get_footer(); ?>
