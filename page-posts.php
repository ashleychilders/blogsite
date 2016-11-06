<?php

/* Template Name: Posts Page */

get_header(); ?>
<div class="post-container">
  <div class="row">
    <div class="nine columns">
      <div class="post-photos">
        <a href="http://www.ashley-childers.com/WIE/uncategorized/wordpress-as-a-cms/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/wordpress.png" width="200" height="200"/></a>
        <a href="http://www.ashley-childers.com/WIE/uncategorized/skeleton-grid/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/skeleton.png" width="200" height="200"/></a>
        <a href="http://www.ashley-childers.com/WIE/uncategorized/mysql/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/mysql.png" width="200" height="200"/></a>
        <a href="http://www.ashley-childers.com/WIE/uncategorized/why-xampp/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/xampp.png" width="200" height="200"/></a>
        <a href="http://www.ashley-childers.com/WIE/uncategorized/blog-site-elements/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/pencil-1.png" width="200" height="200"/></a>
        <a href="http://www.ashley-childers.com/WIE/uncategorized/website-element-environment/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/environment.png" width="200" height="200"/></a>
        <a href="http://www.ashley-childers.com/WIE/uncategorized/understanding-php/" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/understandingphp.png" width="200" height="200"/></a>
        <a href="http://ashley-childers.com/pizzaplanet" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/pizzaplanet-1.png" width="200" height="200"/></a>
        <a href="http://ashley-childers.com/celine" target="_blank"><img alt="resumepic" class="shadow" id="postpic" src="http://www.ashley-childers.com/WIE/wp-content/uploads/2016/11/celine-1.png" width="200" height="200"/></a>
    </div>
  </div>
      <div class="three columns">
          <h2>Posts by Month:</h2>
          <ul>
              <?php wp_get_archives('type=monthly'); ?>
          </ul>
              <?php dynamic_sidebar('post-one'); ?>
      </div>
  </div>
</div>
<?php get_footer(); ?>
<!-- End Footer -->
