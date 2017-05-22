<?php 
/*
 * single work
 * semplice.theme
  Template Name: About Us Page
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
	

<div class="hero" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/about-us-hero.jpg)">
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
<?php if( have_rows('columns') ) { ?>

	<section id="intro">
		<div class="container">
			<div class="row">
				<?php while ( have_rows('columns') ) : the_row(); ?>
				<div class="span6">
					<h3><?php echo get_sub_field('column_title'); ?></h3>
					<p><?php echo get_sub_field('column_content'); ?></p>
					<?php if (get_sub_field('learn_more_url')) { ?>
					<!--<a href="<?php echo get_sub_field('learn_more_url') ?>">Learn more</a>-->
				<?php } ?>	
				</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<section id="coaches">
		<div class="container">
			<?php get_template_part('coach-loop'); ?>
		</div>
	</section>
<?php if (have_rows('content_carousel')) { ?>	
<section id="carousel">
	<div class="thecarousel">
		<ul>
			<?php while (have_rows('content_carousel')) : the_row(); ?>
			<li>
				<div class="thebg" style="background-image:url(<?php echo get_sub_field('background_image'); ?>);">
					<div class="container">
						<div class="thecontent">
							<h2><?php echo get_sub_field('slide_title'); ?></h2>
							<p><?php echo get_sub_field('slide_content'); ?></p>
						</div>
					</div>
				</div>
			</li>
			<?php endwhile; ?>

		</ul>
	</div>
</section>
<?php } ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/unslider-min.js"></script>
<script>
	$ = jQuery;
	$(document).ready(function() {
		$('.thecarousel').unslider({
			animation: 'fade',
			autoplay: true,
			arrows: false,
			delay: 5000
		});		
	});
</script>
<script>
	$(window).load(function(){
		var navwidth = $('.unslider-nav').outerWidth(true);
		var posish = $('#carousel .container').offset().left;
		$('.unslider-nav').attr('style', 'left: ' + (posish - 8) +'px');
	});
	$(window).resize(function() {
		var navwidth = $('.unslider-nav').outerWidth(true);
		var posish = $('#carousel .container').offset().left;
		$('.unslider-nav').attr('style', 'left: ' + (posish - 8) +'px');
	});
</script>
<section id="themap">
	<div class="loc-content">
		<h2>Location</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at elementum arcu. Phasellus facilisis, libero in semper sodales.</p>
		<p><a href="#">Learn more</a></p>
	</div>
</section>
<?php if (get_field('wodify_iframe')) { ?>
<section id="wod">
	<div class="container">
		<h2>Schedule &amp; Classes</h2>
		<?php echo get_field('wodify_iframe'); ?>
	</div>
</section>

<?php } ?>
</div>	

<?php } ?>

<?php get_footer(); # inlude footer ?>