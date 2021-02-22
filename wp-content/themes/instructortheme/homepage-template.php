<?php
  /**
  * Template Name: Homepage Template
  * @version 1.0
  * Description: This template will use the WordPress function for displaying the pages content. This will change in later lessons.
  */
  // the below php hook is used to call the header template
  get_header();
?>
  <!-- this is the part of the document that will handle the content of the webpage -->
  <main>
    <?php
    /* Start the Loop */
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content/content-page' );
    endwhile; // End of the loop.
    ?>
  </main>
  <!-- here we will call in the sidebar template. -->
  <?php get_sidebar(); ?>
<?php
  // use the php hook to call in the footer template
  get_footer();
?>
