  <!-- Begin Header -->
<?php get_header(); ?>
    <!-- End Header -->
    </div>
    <!-- Begin Section Container -->
    <div class="container">
        <div class="row">
            <div class="tweleve columns">
                <div class="intro">
                  <p>Hello! Welcome to my WIE Blog. This site is a place to showcase the work and topics I am learning about as I move closer to completing my Master of Arts in Mass Communication in Web Design and Online Communication from the University of Florida. I hope you find the topics covered engaging and interesting and I encourage you to connect with me on social media. Enjoy!</p>
                </div>
            </div>
          </div>
    </div>
    <div class="container">
      <div class="indexbox">
        <section class ="row">
                <!-- Begin Loop -->
              <?php
              if ( have_posts() ) {
                while ( have_posts() ){
                  the_post(); ?>
                <div class ="four columns index-post">
                  <div class="post-thumbnail-index">
                  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail');
                    }?>
                  </div>
                  <h3><a href="<?php the_permalink(); ?>"><?php
                    the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                  <p><a href="<?php the_permalink(); ?>">Read Post</a></p>
                </div>
                <?php
                } //end while
              } //end if
            ?>
              <!-- End Loop -->
        </section>
      </div>
    </div>
  <!-- Begin Fooder -->
      <?php get_footer(); ?>
<!-- End Footer -->
