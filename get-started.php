<?php 
/*
 * single work
 * semplice.theme
  Template Name: Get Started Page
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
<div id="getstarted">

<div class="hero" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/get-started-hero.jpg);">
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

	<section id="section1">
		<div class="whitebox"></div>
		<img  class="hidden-sm" src="<?php echo get_field('section_1_image'); ?>" />
		<div class="container">
			<div class="content">
				<h2><?php echo get_field('section_1_title'); ?></h2>
				<img class="visible-sm" src="<?php echo get_field('section_1_image'); ?>"
				<p><?php echo get_field('section_1_content'); ?></p>
				<a class="cta lg" href="<?php echo get_field('section_1_cta_url');?>"><?php echo get_field('section_1_cta_copy'); ?></a>
				<?php if(get_field('section_1_learn_more_url')) { ?>
				<a class="learnmore-link" href="<?php echo get_field('section_1_learn_more_url'); ?>">Learn more</a>
				<?php } ?>
			</div>
		</div>
	</section>
	<section id="section2">
		<div class="whitebox"></div>
		<img  class="hidden-sm" src="<?php echo get_field('section_2_image'); ?>" />
		<div class="container">
			<div class="content">

				<h2><?php echo get_field('section_2_title'); ?></h2>
				<img  class="visible-sm" src="<?php echo get_field('section_2_image'); ?>" />
				<p><?php echo get_field('section_2_content'); ?></p>
				<a class="cta lg" href="<?php echo get_field('section_2_cta_url');?>"><?php echo get_field('section_2_cta_copy'); ?></a>
				<?php if(get_field('section_2_learn_more_url')) { ?>
				<a class="learnmore-link" href="<?php echo get_field('section_2_learn_more_url'); ?>">Learn more</a>
					<?php } ?>

			</div>
		</div>
	</section>
<script>
	$ = jQuery;
	$(document).ready(function(){
		var firstboxleft = $('#section1 .content').offset().left;
		var firstboxwidth = $('#section1 .content').outerWidth();
		var firstboxheight = $('#section1 .content').outerHeight();
		var secondboxright = $('#section1 .content').offset().left;
		var secondboxwidth = $('#section2 .content').outerWidth();
		var secondboxheight = $('#section2 .content').outerHeight();
		$('#section1 .whitebox').css({
			'width' : 100 + firstboxleft + firstboxwidth + 'px',
			'height' : 100 + firstboxheight + 'px',
		});
		$('#section2 .whitebox').css({
			'width' : 100 + secondboxright + secondboxwidth + 'px',
			'height' : 130 + secondboxheight + 'px',
		});
		$(window).resize(function(){
			var firstboxleft = $('#section1 .content').offset().left;
			var firstboxwidth = $('#section1 .content').outerWidth();
			var firstboxheight = $('#section1 .content').outerHeight();
			var secondboxright = $('#section1 .content').offset().left;
			var secondboxwidth = $('#section2 .content').outerWidth();
			var secondboxheight = $('#section2 .content').outerHeight();
			$('#section1 .whitebox').css({
				'width' : 100 + firstboxleft + firstboxwidth + 'px',
				'height' : 100 + firstboxheight + 'px',
			});
			$('#section2 .whitebox').css({
				'width' : 100 + secondboxright + secondboxwidth + 'px',
				'height' : 130 + secondboxheight + 'px',
			});
		});
	});
</script>
<?php if( have_rows('columns') ) { ?>

	<section id="intro">
		<div class="container">
			<div class="row">
				<?php while ( have_rows('columns') ) : the_row(); ?>
				<div class="span4">
					<h3><?php echo get_sub_field('column_title'); ?></h3>
					<p><?php echo get_sub_field('column_content'); ?></p>

					<a href="#form-overlay">Let's talk</a>

				</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

</div>	

<?php } ?>

<?php get_footer(); # inlude footer ?>