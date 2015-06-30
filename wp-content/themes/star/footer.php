<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package footer
 */
?>

			</div>
		</div><!-- #content -->
	</div>
	
	<div class="quote">
		<div class="grid grid-pad">
			<div class="widget-1 col-2-3">
				<?php dynamic_sidebar( 'quote' ); ?>
			</div>
		
			<div class="cta col-1-3">
				<a href="http://lucid-build.com/staging/jamak/contact" class="btn-cta">CONTACT US</a>
			</div>
		</div>
	</div>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="grid grid-pad">
			<div class="col-1-3">
				<?php dynamic_sidebar( 'customer-services' ); ?>
			</div>
			
			<div class="col-1-3">
				<?php dynamic_sidebar( 'about-us' ); ?>
			</div>
			
			<div class="social col-1-3">
				<?php dynamic_sidebar( 'social-media' ); ?>
			</div>
		</div>
		
		<div class="copyright col-1-1">
			<?php dynamic_sidebar( 'copyright' ); ?>
		</div>
	</footer>
	
	<div id="top-wrap">
		<a class="top" href="#"><i class="icon-chevron-up"></i></a>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
	   $(document).ready(function(){	
			if ($(window).width() > 599) {
 			   $(window).bind('scroll', function() {
 			   		var navHeight = $('.site-header').height() + 112;
 					 if ($(window).scrollTop() > navHeight) {
 						 $('.capa-nav').addClass('fixed');
 						 $('body').css({ paddingTop: '40px' });
 					 }
 					 else {
 						 $('.capa-nav').removeClass('fixed');
 						 $('body').css({ paddingTop: '0px' });
 					 }
 				});
			}
			else {
				 $('body').css({ paddingTop: '0px' });
			}
			
			$(window).scroll(function(){
	            if ($(this).scrollTop() > 100) {
	                $('#top-wrap').fadeIn();
	            } else {
	                $('#top-wrap').fadeOut();
	            }
	        });

	        $('.top').click(function(){
	            $("html, body").animate({ scrollTop: 0 }, 600);
	            return false;
	        });
			
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});
		});
	</script>
		
	<?php wp_footer(); ?>
	
	</body>
</html>
	