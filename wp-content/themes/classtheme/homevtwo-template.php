<?php 
/**
 * template Name: Homepage version two Template
 */
get_header();
?>

<main>
<section class ="masthead" style="background-image: url(<?php the_field('masthead_image'); ?>);">
<div>
<h1> <?php the_field('masthead_title') ?> </h1>
</div>
</section>
<section class ="row-one" >
<article>
<img src= "<?php the_field('image_one'); ?>" alt = "image one">
</article>
<article>
<img src= "<?php the_field('image_two'); ?>" alt = "image two">
</article>
<article>
<img src= "<?php the_field('image_three'); ?>" alt = "image three">
</article>
</section>
<section class ="row-two" >
<article>
<h2><?php the_field('title_1'); ?></h2>
<p><?php the_field('text_1'); ?> </p>
</article>
<article>
<h2><?php the_field('title_2'); ?></h2>
<p><?php the_field('text_2'); ?> </p>
</article>
</section>

<!--Posts-->

<section class="all-posts">
<?php
$args =array(
    'post_type'=> 'post',
    'post_status'=> 'publish'
);
$arr_posts = new WP_Query($args);
if($arr_posts->have_posts()) :
    while ($arr_posts->have_posts()) :
        $arr_posts->the_post();
?>

<article>
<?php 
if(has_post_thumbnail()) :
    the_post_thumbnail();
endif;
?>

<header>
<h4><?php the_title(); ?> </h4>
</header>

<div>
<?php the_excerpt();  ?>
<a href="<?php the_permalink(); ?>"> Read More </a>
</div>
</article>
<?php 
endwhile;
endif;
?>
<section>
<!--filter post by category-->
</section>
<?php
$args1 =array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'Example One'
);
$arr_posts1 = new WP_Query($args1);
if($arr_posts1->have_posts()) :
    while ($arr_posts1->have_posts()) :
        $arr_posts1->the_post();
?>
<article>
<?php
if(has_post_thumbnail()) :
    the_post_thumbnail();
endif;
?>
<header>
<h4><?php the_title(); ?> </h4>
</header>
<div>
<?php the_excerpt();  ?>
<?php the_category();  ?>
<a href="<?php the_permalink(); ?>"> Read More </a>
</div>
</article>
<?php
endwhile;
endif;
?>
</section> 
</main>

<?php 

get_footer();
?>