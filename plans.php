<?php 
/*
 * single work
 * semplice.theme
  Template Name: Plans template
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
<div id="plansandpricing">

<div class="hero" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/plans-and-pricing-hero.jpg);">
	<div class="cta-container">
	
		<div class="thectas">
			<h1> <?php echo get_field('page_title'); ?></h1>
			<?php if(get_field('cta_1_copy') & get_field('cta_1_url')) { ?>
				<a class="cta primary" href="<?php echo get_field('cta_1_url'); ?>"><?php echo get_field('cta_1_copy'); ?></a>
			<?php } ?>
			<?php if(get_field('cta_2_copy') & get_field('cta_2_copy')) { ?>
				<a class="cta outline" href="<?php echo get_field('cta_2_url'); ?>"><?php echo get_field('cta_2_copy'); ?></a>
			<?php } ?>
		</div>
	</div>
</div>
<div id="plans">
<?php $loop = new WP_Query( array( 'post_type' => 'plans', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<section>
		<div class="container">
		
			<!--<h2><?php echo get_field('plan_title'); ?></h2>-->
				<!--small res-->

			<!--hi res-->
			
			<div class="details">
				<h2><?php echo get_field('plan_title'); ?></h2>
				<p><?php echo get_field('plan_details'); ?></p>
				<a class="cta lg" href="#form-overlay">Let's talk</a>
			</div>
			<div class="prices">
				
				
				
				<?php if( have_rows('plan_pricing') ) { ?>
				<?php while ( have_rows('plan_pricing') ) : the_row(); ?>
				<div class="tier">
					<p class="tiertitle"><?php echo get_sub_field('tier_title'); ?></p>
					<?php if( have_rows('plan_price') ) { ?>
					<?php while ( have_rows('plan_price') ) : the_row(); ?>
						<p>
							<span class="price"><span class="dollar">$</span><?php echo get_sub_field('price'); ?></span><?php echo get_sub_field('add_pricing_details'); ?>
						</p>
					<?php endwhile; ?>
					<?php } ?>
				</div>
				<?php endwhile; ?>
				<?php } ?>
			
			
			
			
			
			</div>
		</div>
	</section>
	
	
<?php endwhile; wp_reset_query(); ?>
<?php if(get_field('section_title') && get_field('section_copy') && get_field('section_background_image')) { ?>
<section id="section" style="background-image: url(<?php echo get_field('section_background_image'); ?>)">
	<div class="container">
		<div class="content">
		<h2><?php echo get_field('section_title'); ?></h2>
		<p><?php echo get_field('section_copy'); ?></p>
		<a class="cta lg" href="#form-overlay">Let's talk</a>
		</div>
	</div>
</section>
	<script>
		$ = jQuery;
		var theHeight = $('div.content').outerHeight();
		$('div.content').css('margin-top','-' + (theHeight/2) + 'px');
		$(window).resize(function() {
			theHeight = $('div.content').outerHeight();
			$('div.content').css('margin-top','-' + (theHeight/2) + 'px');
		});
	</script>
<?php } ?>
	
</div>
	
	
	
	

</div>	

<?php } ?>

<?php get_footer(); # inlude footer ?>