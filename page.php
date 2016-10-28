<?php get_header(); ?>

  <div class="row">
      <div class="nine columns">

<!-- BEGIN PAGE PHP -->
    <div class="nine columns">
      <div class="about">
    <?php echo('Hello! My name is Ashley Childers, thank you for checking out my Web Interactivity and Engagement blog site.
            This is a collection of posts that I have composed as part of a course requirement for my studies  as a  graduate student at the University of Florida in the Web Design and Online Communication program. When not busy with school projects, you can find me  at The World Bank
            headquarters in the Printing and Multimedia Department where I manage projects related to print and digital media.
            Outside of work I enjoy volunteering and spending time with my husband, Daniel and fur baby, Celine. We currently reside in the Dupont Circle neighborhood of Washington, DC. I have been a member of the Junior League of Washington for 8 years where I assist with programs related to promoting literacy in the Washington, DC area. Weekly I volunteer at The Kennedy Center as a Multimedia Broadcaster where I assist with video recording for the performances on the Millennium Stage.'); ?>
      </div>
    </div>
          <?php if (have_posts()) :
            /* OUR DATA CONTEXT IS DEFINED  */
              while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
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
