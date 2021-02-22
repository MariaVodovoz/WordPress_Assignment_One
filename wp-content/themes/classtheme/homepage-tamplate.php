<?php 
/**
 * template Name: Homepage Template
 */
get_header();
?>

<main>
<?php 
while(have_posts()) : 
    the_post();
    get_template_part('template-parts/content/content-page');
endwhile;
 
?>
</main>
<?php  get_sidebar(); ?>
<?php  get_footer(); ?>


