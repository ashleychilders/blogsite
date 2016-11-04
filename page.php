<?php get_header(); ?>

  <div class="row">

<!-- BEGIN PAGE PHP -->
    <div class="nine columns">
      <div class="about">
      </div>
    </div>
          <?php if (have_posts()) :
            /* OUR DATA CONTEXT IS DEFINED  */
              while (have_posts()) : the_post(); ?>
                    <?php the_content();
              endwhile;
          endif; ?>
      </div>

      <div class="three columns">
          <?php get_sidebar(); ?>
      </div>

    </div>

<!-- End Section Container -->
<?php get_footer(); ?>
