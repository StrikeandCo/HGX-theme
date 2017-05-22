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
			<p><?php echo get_field('page_subtitle');?></p>
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
	
<?php if( have_rows('columns') ) { ?>

	<section id="intro" style="padding-top:140px;">
		<div class="container">
			<div class="row">
				<?php while ( have_rows('columns') ) : the_row(); ?>
				<div class="span4">
					<h3><?php echo get_sub_field('column_title'); ?></h3>
					<p><?php echo get_sub_field('column_content'); ?></p>
					<?php if (get_sub_field('column_url')) { ?>
					<a href="<?php echo get_sub_field('column_url') ?>"><?php echo get_sub_field('column_link'); ?></a>
				<?php } ?>	
				</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	
	<section class="twobg" style="background-color: rgba(34,38,41,1)">
		<div class="container">
			<div class="row">
				<div class="half-dark-overlay" style="background: linear-gradient(rgba(34, 38, 41, 0.85), rgba(34, 38, 41, 0.75)), url(<?php echo get_stylesheet_directory_uri(); ?>/images/hp-left-bg.jpg); background-size: cover;"></div>
				<div class="span4 dark-bg">
					<h3>Space To Grow</h3>
					<p>Our 4,500 sq foot facility includes Olympic lifting area, Gymnastics, Lounge, Parking, and Showers</p>
					<a href="/about/#carousel">See more</a>
				</div>
				<div class="half-green-overlay" style="background: linear-gradient(rgba(100, 150, 17, 0.85), rgba(100, 150, 17, 0.75	)), url(<?php echo get_stylesheet_directory_uri(); ?>/images/hp-right-bg.jpg); background-size: cover;"></div>
				<div class="span4 offset3 green-bg">
					<h3>HGX Community</h3>
					<p>Real people, getting real fitness, showing real results. And having fun in the process. Come along for the ride.</p>
					<a href="https://www.instagram.com/hgxfit/" target="_blank">Follow Us On Instagram</a>
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
						<p class="the-quote">I have been a member with this Box for over 4 years, and it has been one the best decisions I have made in my life.  I am stronger than ever, and I have met some amazing people that not only inspire me but also make me laugh. The coaches put some serious time and effort here making this place a gym you want to work out at!</p>
						<img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/devon_c.jpg">
						<p class="name">Devon C</p>
						<p class="location">Silicon Valley, CA</p>
					</li>
					<li>
						<p class="the-quote">I have been a member here for over 3 years. The workouts are challenging and can be modified to fit anyone's level. The coaches are great at working with you and making sure you are doing all the exercises right. It's a very inclusive community and all the members, coaches, and the owners are very friendly. </p>
						<img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/karin_l.jpg">
						<p class="name">Karin L.</p>
						<p class="location">San Carlos, CA</p>
					</li>
					<li>
						<p class="the-quote">I am so grateful that Homegrown has such professional instructors who can push you further than you thought you could go and still help guide you in keeping your body safe in all of your mechanics. I am a total Crossfit beginner and I find myself daydreaming about what the next WOD will be.</p>
						<img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ankita.jpg">
						<p class="name">Ankita T.</p>
						<p class="location">San Carlos</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
<section id="igfeed">	
</section>
	
	<section style="padding-top: 20px;">
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
		var slider = $('.quote-container').unslider({ animation: 'fade', autoplay: true, arrows: false, delay: 5000 });
		var theHeight = $('.unslider-active .the-quote').height();
		$('#quotes').css({'height' : theHeight + 600 + 'px', 'max-height' : 'none'});
		$(window).resize(function() {
			var theHeight = $('.unslider-active .the-quote').height();
			$('#quotes').css({'height' : theHeight + 600 + 'px', 'max-height' : 'none'});
		});
		slider.on('unslider.change', function(event, index, $slide) {
			var theHeight = $('.unslider-active .the-quote').height();
			$('#quotes').css({'height' : theHeight + 600 + 'px', 'max-height' : 'none'});
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