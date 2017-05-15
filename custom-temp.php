<?php 
/*
 * single work
 * semplice.theme
  Template Name: Homepage with Slideshow
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
<div id="homepage">
<?php
//if youtube video	
function modify_youtube_embed_url($html) {
    return str_replace("?feature=oembed", "?feature=oembed&autoplay=1", $html);
}
add_filter('oembed_result', 'modify_youtube_embed_url');
	

// check if the repeater field has rows of data
if( have_rows('carousel') ):	?>
<div id="hp-carousel">
	<div class="hp-slideshow">
		<ul>	
		<?php while ( have_rows('carousel') ) : the_row(); ?>

			<?php
				if (get_sub_field('slide_type') == 'image') {
			?>
			<li style="background-image: url(<?php echo the_sub_field('image'); ?>)"></li>
			<?php } ?>
			<?php if (get_sub_field('slide_type') == 'video') { ?>
			<li><?php 
				$theVideo = get_sub_field('video');
				echo wp_oembed_get($theVideo, array( 'autoplay' => 1 ) ); 
				
				?></li>
			<?php } ?>
		<?php endwhile; ?>
		</ul>
	</div>
	<div class="cta-container">
		<div class="thectas">
			
			<h1><?php echo get_field('page_title'); ?></h1>
			<?php if(get_field('primary_cta_copy') & get_field('primary_cta_url')) { ?>
				<a class="cta" href="<?php echo get_field('primary_cta_url'); ?>"><?php echo get_field('primary_cta_copy'); ?></a>
			<?php } ?>
			<?php if(get_field('secondary_cta_copy') & get_field('secondary_cta_url')) { ?>
				<a class="cta outline" href="<?php echo get_field('secondary_cta_url'); ?>"><?php echo get_field('secondary_cta_copy'); ?></a>
			<?php } ?>
		</div>
	</div>
</div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/unslider-min.js"></script>
<script>
	$ = jQuery;
	$(document).ready(function() {
		$('.hp-slideshow').unslider({
			animation: 'fade',
			autoplay: true,
			arrows: false,
			delay: 5000
		});
		var contentHeight = $('.thectas').outerHeight();
		var theposition = 'calc(50vh - ' + contentHeight / 1.75 + 'px)'
		$('.thectas').css('top',theposition);
	});
</script>
<?php else :

    // no rows found

endif;


		?>
	
	<?php if(get_field('cover_visibility') === 'visible') : ?>
	<?php get_template_part('partials/fullscreen-cover'); ?>
	<?php endif; ?>
	
	<?php if(!isset($_GET['cover-slider'])) : # if cover slider display no content ?>
		<!-- content fade -->
		<div class="fade-content">
			<?php
				// Remove wpautop
				remove_filter('the_content', 'wpautop');

				// get content
				$content = get_post_meta( get_the_ID(), 'semplice_ce_content', true );

				// strip out double quotes on bg images
				$content = remove_esc_bg_quotes($content);

				// output content
				$output = apply_filters('the_content', $content);

				echo $output;
				
				// reset postdata
				wp_reset_postdata();
			?>
		</div>
		
		<?php if(get_field('share_visibility') === 'visible' && get_field('global_share_visbility', 'options') !== 'hidden') : ?>
			<div class="share-box fade-content">
				<div class="container">
					<?php get_template_part('partials/share'); ?>
				</div>
			</div>
		<?php endif; ?>
		

	<?php endif; ?>
	
	<section class="twobg" style="background-color: rgba(34,38,41,1)">
		<div class="container">
			<div class="row">
				<div class="half-dark-overlay" style="background: linear-gradient(rgba(34, 38, 41, 0.9), rgba(34, 38, 41, 0.9)), url(<?php echo get_stylesheet_directory_uri(); ?>/images/hp-left-bg.jpg); background-size: cover;"></div>
				<div class="span4 dark-bg">
					<h3>The Facility</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at elementum arcu. Phasellus facilisis, libero in semper sodales.</p>
					<a href="#">Learn more</a>
				</div>
				<div class="half-green-overlay" style="background: linear-gradient(rgba(136, 202, 31, 0.9), rgba(136, 202, 31, 0.8	)), url(<?php echo get_stylesheet_directory_uri(); ?>/images/hp-right-bg.jpg); background-size: cover;"></div>
				<div class="span4 offset3 green-bg">
					<h3>HGX Community</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at elementum arcu. Phasellus facilisis, libero in semper sodales.</p>
					<a href="#">Learn more</a>
				</div>
			</div>
		</div>
	</section>
	<section id="quotes">
		<div class="container">

			<img class="preamble-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" />
			<div class="quote-container">
				<ul>
					<li>
						<p class="the-quote">I stopped my regular running routine three months ago to try CrossFit, despite a thrashed shoulder. This morning, I ran one of my standard routes again just for kicks (1st time in 3 months), and my avg. pace per mile was 26 seconds faster than my previous PR from when I was running regularly. Thank you, HGX! You guys work miracles.</p>
						<div class="avatar"></div>
						<p class="name">Jenny Duckworth</p>
						<p class="location">San Carlos</p>
					</li>
					<li>
						<p class="the-quote">I stopped my regular running routine three months ago to try CrossFit, despite a thrashed shoulder. This morning, I ran one of my standard routes again just for kicks (1st time in 3 months), and my avg. pace per mile was 26 seconds faster than my previous PR from when I was running regularly. Thank you, HGX! You guys work miracles.</p>
						<div class="avatar"></div>
						<p class="name">Jenny Stuckworth</p>
						<p class="location">San Carlos</p>
					</li>
					<li>
						<p class="the-quote">I stopped my regular running routine three months ago to try CrossFit, despite a thrashed shoulder. This morning, I ran one of my standard routes again just for kicks (1st time in 3 months), and my avg. pace per mile was 26 seconds faster than my previous PR from when I was running regularly. Thank you, HGX! You guys work miracles.</p>
						<div class="avatar"></div>
						<p class="name">Jenny Buckworth</p>
						<p class="location">San Carlos</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
<section id="igfeed">	
</section>
	
	<section>
		<a href="https://instagram.com/hgxfit/" target="_blank" class="cta outline dark lg center">Follow us</a>
	</section>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/spectragram.min.js"></script>
	<script>
		$('#igfeed').spectragram('getUserFeed',{
    	query: 'hgxfit'
		});
		$(document).ready(function(){
			$('#igfeed .img').each(function(){
				var size = $(this).outerWidth();
				$(this).css('height', size + 'px');
			});
			$(window).on('load resize', function(){
				$('#igfeed .img').each(function(){
					var size = $(this).outerWidth();
					$(this).css('height', size + 'px');
				});
			});
		});
	</script>
	
	<script>
	$ = jQuery;
	$(document).ready(function() {
		$('.quote-container').unslider({
			animation: 'fade',
			autoplay: true,
			arrows: false,
			delay: 5000
		});
	});
</script>
	
	<section id="wods">
		<div class="container">
			<div class="row">
				<h2>Latest Workouts</h2>
			</div>
			<div class="row">
				<?php query_posts( 'posts_per_page=3' ); ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="span4 loop">
					<p class="date"><?php echo get_the_date(); ?></p>	
					<div class="content"><?php echo the_excerpt(); ?></div>
					<a href="<?php echo get_the_permalink(); ?>">Learn more</a>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="row">
					<a href="/blog/" class="cta outline dark lg center">See more WODS</a>
			</div>
		</div>
	</section>	
	
</div>	

<?php } ?>

<?php get_footer(); # inlude footer ?>