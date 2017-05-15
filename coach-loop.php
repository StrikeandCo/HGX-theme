<?php $loop = new WP_Query( array( 'post_type' => 'coaches', 'posts_per_page' => -1 ) ); ?>

<?php
  //Variables for various fields
  $coach_image = get_field( "coach_image" );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php
  //Variables for various fields
  $coach_image = get_field( "coach_image" );
  $coach_name = get_field("coach_name");
  $coach_title = get_field("coach_title");
  $coach_bio = get_field("coach_bio");
  $certifications = get_field("certifications");
  $coach_name_shrt = str_replace([' ', '.'], '', $coach_name);
  $circle_thumb = wp_get_attachment_image_url($coach_image, 'Coach - round thumbnail' );
  $full_image = wp_get_attachment_image_url($coach_image, 'Coach - expanded overlay image');
  
//begin UI
?>

<div class="coach">
<a href="#<?php echo $coach_name_shrt; ?>" data-open="<?php echo $coach_name_shrt; ?>">
  <img src="<?php echo $circle_thumb; ?>" /><br>
  <span class="name"><?php echo $coach_name; ?></span><br>
  <span class="title"><?php echo $coach_title; ?></span>
</a>

</div>
<div class="full-bio" id="<?php echo $coach_name_shrt; ?>">
  <div class="coach-contain">
    <img class="image-full" src="<?php echo $full_image; ?>" />
    <div class="content">
      <p class="name"><span class="bigtext"><?php echo $coach_name; ?></span> <span class="title"><?php echo $coach_title; ?></span>
      <?php if( !empty($certifications)) { ?>
        <p class="certs"><?php echo $certifications; ?>  
      <?php } ?>
      <p class="bio"><?php echo $coach_bio; ?>
    </div>
    <div class="close-btn">
      <p>CLOSE</p><div class="x">&nbsp;</div>
    </div>
  </div>
</div>  
<?php endwhile; wp_reset_query(); 
  
  
//and now a little javascript magic  
?>

  
<script>
$ = jQuery;
var screensize = document.documentElement.clientWidth;
$(document).ready(function(){
  $('.coach a').each(function() {
    var id = $(this).attr('data-open');
    var coachBio = $('#' + id);
    $(this).click(function(e){  
      screensize = document.documentElement.clientWidth;
      if(screensize < 768) {
        coachBio.addClass('active');
      } else {
        coachBio.fadeIn().addClass('active');
        setTimeout(function() {coachBio.removeAttr('style');}, 300);
        $('body').css('overflow-y', 'hidden');
      }
      e.preventDefault;
      return false;
    });
    //get out of it
    $('.close-btn').click(function(){
      screensize = document.documentElement.clientWidth;
      if(screensize < 768) {
        coachBio.removeClass('active');
      } else {
        coachBio.fadeOut();
        setTimeout(function() {coachBio.removeClass('active').removeAttr('style');}, 300); 
      }
      $('body').css('overflow-y', 'scroll');     
    });
  });
  $(window).resize(function(){
    screensize = document.documentElement.clientWidth;
    if(screensize < 768) {
      if ($('.full-bio').hasClass('active') === true) {
        $('body').css('overflow-y', 'scroll'); 
      }
    }
  });
});
</script>
