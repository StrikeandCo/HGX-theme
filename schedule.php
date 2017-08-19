<?php 
/*
 * single work
 * semplice.theme
  Template Name: Schedule & Classes
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
<div id="aboutus">
	

<div class="hero" style="background-image: url(<?php echo get_field('hero_bg_image'); ?>">
	<div class="cta-container">
	
		<div class="thectas">
			<h1> <?php echo get_field('hero_title'); ?></h1>
			<p><?php echo get_field('hero_subtitle'); ?></p>
			<?php if(get_field('button_1_copy') & get_field('button_1_url')) { ?>
				<a class="cta primary" href="<?php echo get_field('button_1_url'); ?>"><?php echo get_field('button_1_copy'); ?></a>
			<?php } ?>
			<?php if(get_field('button_2_copy') & get_field('button_2_copy')) { ?>
				<a class="cta outline" href="<?php echo get_field('button_2_url'); ?>"><?php echo get_field('button_2_copy'); ?></a>
			<?php } ?>
		</div>
	</div>
</div>

<?php if (get_field('wodify_iframe')) { ?>
<section id="wod">
	<div class="container">
		<?php echo get_field('wodify_iframe'); ?>
	</div>
</section>

<?php } ?>
</div>	

<?php } ?>

<?php get_footer(); # inlude footer ?>