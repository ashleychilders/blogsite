<?php

/* Template Name: Posts Page */

get_header(); ?>
<div class="post-container">
<div class="row">
  <div class="nine columns">
    <div class="post-photos">
      <a href="http://www.ashley-childers.com/WIE/uncategorized/wordpress-as-a-cms/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/wordpress.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/pizzaplanet" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/pizzaplanet-1.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/celine" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/celine-1.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/resume" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/resume-2.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/pizzaplanet" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/pizzaplanet-1.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/celine" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/celine-1.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/resume" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/resume-2.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/pizzaplanet" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/pizzaplanet-1.png" width="200" height="200"/></a>
      <a href="http://ashley-childers.com/celine" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/celine-1.png" width="200" height="200"/></a>
  </div>
</div>
    <div class="three columns">
        <?php if ( have_posts() ) : ?>
            <h2>Archives</h2>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
                <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                <?php the_excerpt(); ?>
            <?php endwhile; ?> <!-- End Loop -->
        <?php endif; ?>
        <h2>Posts by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
</div>
</div>
<?php get_footer(); ?>
<!-- End Footer -->
