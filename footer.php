<?php 
/*
 * footer
 * semplice.theme
 */
$addr = '551 Taylor Way' . "\n" . 'San Carlos, CA' . "\n" . '94070';
$address = get_theme_mod('company_address', $addr);
$phone = get_theme_mod('company_phone_number','650-218-5836');
$email = get_theme_mod('company_email','hello@hgxfit.com');
$instagram = get_theme_mod('instagram','HGXFIT');
$facebook = get_theme_mod('facebook','https://www.facebook.com/SanCarlosCrossFit/');
$footerform = get_theme_mod('footer_form','');
?>
			
			<!-- content -->
			</div>
		<!-- wrapper -->
		</div>
		<div class="to-the-top">
			<a class="top-button"><?php echo setIcon('arrow_up'); ?></a>
		</div>
		<div class="overlay fade"></div>
		<?php wp_footer(); # include wordpress footer ?>
		<?php get_template_part('semplice_footer'); ?>

<?php
	$the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '1', 'post_type' => 'quotes' ) );

while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
    
   <section id="randomquote" class="brand-bg">
		<div class="container">
			<div class="row">
				<div class="text-center span10 offset1">
					<p class="lead">
						"<?php echo get_field('quote'); ?>"
					</p>
					<p><strong><?php echo get_field('tagline'); ?>.</strong></p>
				</div>
			</div>
			<div class="row">
				<a href="<?php echo get_field('cta_url'); ?>" class="cta outline light lg center"><?php echo get_field('cta_copy'); ?></a>
			</div>
		</div>
	</section>
<?php endwhile; ?>

<?php 
// Reset Post Data
wp_reset_query(); ?>
</div>
<footer id="main-footer">
	<div class="left-col">
		<div class="contain-left">
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) { ?>
				<div class="thelogo">
					<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</div>
				<?php } ?>
				
			<div class="span4">
				<p>
					<a class="tel" href="tel:+1-<?php echo $phone; ?>"><?php echo $phone; ?></a>
				</p>
				<p>
					<a class="email" href="mailto:<?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?>"><?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?></a>
				</p>
				<p>
					<?php echo nl2br($address); ?>
				</p>
				<div class="soc">
					<a class="socicon-facebook" href="<?php echo $facebook; ?>" target="_blank"></a>
					<a class="socicon-instagram" href="<?php echo $instagram; ?>" target="_blank"></a>
					<a class="socicon-twitter" href="<?php echo $twitter; ?>" target="_blank"></a>
				</div>

			</div>
			<div class="span4">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
			</div>
			<div class="span4">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
			</div>
		</div>
		<div class="friends">
			<p>Partners &amp; Friends</p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/friends.png" />
		</div>
		<div class="copy">
			<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?></p>
		</div>
	</div>
	<div class="right-col">
		<div class="contain-right">
			<?php echo do_shortcode($footerform); ?>
			<div class="visible-sm">
				<p>
					<a class="tel" href="tel:+1-<?php echo $phone; ?>"><?php echo $phone; ?></a>
				</p>
				<p>
					<a class="email" href="mailto:<?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?>"><?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?></a>
				</p>
			</div>
		</div>
	</div>
</footer>
<div id="form-overlay">
	<div class="leftbg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/overlay-bg.jpg);"></div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<?php if ( get_theme_mod( 'themeslug_logo' ) ) { ?>
				<div class="thelogo">
					<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</div>
				<?php } ?>
				<div class="close-button">
					<p>Close</p>
					<span class="first"> </span>
					<span class="second"> </span>
				</div>
		</div>
		</div>
		<div class="row content">
			<div class="span5">
				<p class="pretext">Give us a call or shoot us a text</p>
				<a class="item" href="tel:+1-<?php echo $phone; ?>"><?php echo $phone; ?></a>
				
				<p class="pretext">Send us an email</p>
				<a class="item" href="mailto:<?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?>"><?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?></a>
				<p class="pretext">Drop on by</p>
				<p class="item"><?php echo nl2br($address); ?></p>
			</div>
			<div class="span1">&nbsp;</div>
			<div class="span5">
				<?php echo do_shortcode($footerform); ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_template_part('javascripts'); ?>
	</body>
</html>