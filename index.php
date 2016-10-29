  <!-- Begin Header -->
<?php get_header(); ?>
  <!-- End Header -->
  </div>
  <!-- Begin Section Container -->
    <div class="container">
      <section class ="row">
          <div class="row">
            <div class="tweleve columns">
              <div class="intro">
                <?php echo('Hello! Welcome to my WIE Blog. This site is a place to showcase the work and topics I am learning about as I move closer to completing my Master of Arts in Mass Communication in Web Design and Online Communication from the University of Florida. I hope you find the topics covered engaging and interesting and I encourage you to connect with me on social media. Enjoy!'); ?>
              </div>
            </div>
          </div>
              <!-- Begin Loop -->
            <?php
            if ( have_posts() ) {
              while ( have_posts() ){
                the_post(); ?>
              <div class ="six columns">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                  }?>
                <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?>
                </a></h3>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>">Read More</a></p>
              </div>
              <?php
              } //end while
            } //end if
          ?>
            <!-- End Loop -->

      </section>
    </div>
  <!-- End Section Container -->

  <!-- Begin Fooder -->
      <?php get_footer(); ?>
<!-- End Footer -->
