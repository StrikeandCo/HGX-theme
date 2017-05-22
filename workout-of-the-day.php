<?php 
/*
 * single work
 * semplice.theme
  Template Name: Workout of the Day template
 */
?>
<?php get_header(); # inlude header ?>
<?php if ( post_password_required() ) { ?>

	<div class="container">
		<div class="row">
			<div class="span12">
				<?php echo get_the_password_form(); ?>
			</div>
		</div>
	</div>
 
<?php } else { ?>
<div id="wod">

<div class="hero" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/wod-hero.jpg);">
	<div class="cta-container">
	
		<div class="thectas">
			<h1> <?php echo get_the_title(); ?></h1>
			<?php if(get_field('cta_1_copy') & get_field('cta_1_url')) { ?>
				<a class="cta primary" href="<?php echo get_field('cta_1_url'); ?>"><?php echo get_field('cta_1_copy'); ?></a>
			<?php } ?>
			<?php if(get_field('cta_2_copy') & get_field('cta_2_copy')) { ?>
				<a class="cta outline" href="<?php echo get_field('cta_2_url'); ?>"><?php echo get_field('cta_2_copy'); ?></a>
			<?php } ?>
		</div>
	</div>
</div>
<?php 
							$args = array(
                   //'cat' => '5',
                   'post_type' => 'post',
                   'posts_per_page' => 6,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );
		query_posts($args); 
		if ( have_posts() ) : 
?>
	<section id="wodposts">
	<div class="container">
	<div class="wod-contain">
<!-- blog loop -->
<?php while ( have_posts() ) : the_post(); ?>
    <div class="row">
			<div class="date-holder">
				<p><span class="date"><?php the_time('d');?></span></br/><span class="month"><?php the_time('M'); ?></span></p>
			</div>
			<div class="content-holder">
				<?php the_content(); ?>
			</div>
		</div>
 <?php endwhile; ?>
<div class="navigation">

<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
} ?>
</div>
	</div>
</div>
</section>
<?php 
		endif; 
		wp_reset_query();
?>		
	


<?php } ?>

<?php get_footer(); # include footer ?>