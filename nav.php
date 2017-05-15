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
			
<header>
	<div class="container">
		<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
			<div class='site-logo'>
				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( ' name ', 'display ' ) ); ?>' rel='home'>
					<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>					</a>
			</div>
		<?php else : ?>
			<hgroup>
				<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
			</hgroup>
		<?php endif; ?>
		<nav>
			<div class="hidden-xs"><?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?><a href="<?php echo get_theme_mod( 'nav_cta_url'); ?>" class="cta outline"><?php echo get_theme_mod('nav_cta_label'); ?></a>

			</div>
			<div class="visible-xs"><?php wp_nav_menu( array( 'theme_location' => 'mobile-main-menu', 'menu_class' => 'menu', 'container' => 'ul' ) ); ?>
			<div class="contactstuff">
					<p>CONTACT</p>
					<p><a class="item" href="mailto:<?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?>"><?php echo get_theme_mod('company_email', 'hello@hgxfit'); ?></a></p>
					<p><a class="item" href="tel:+1-<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
				</div>
			</div>
			

			

		</nav>
		<div id="hamburger-icon" title="Menu" role="button">
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
  	</div>
	</div>
</header>