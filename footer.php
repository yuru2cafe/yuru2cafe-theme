<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yuru2Cafe
 */

?>
	</div><!-- .row -->
	<!-- Foundation Content Grid Close -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="row">
    <!-- Foundation Footer -->

		<div class="site-info">

	      <div class="large-12 columns">
	      <!-- Foundation Grid 12 Units  -->

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yuru2cafe' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'yuru2cafe' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'yuru2cafe' ), 'yuru2cafe', '<a href="http://ghichi.com" rel="designer">Ghichi Watanabe</a>' ); ?>
			</div><!-- .large-12 columns -->
			<!-- Foundation Grid 12 Units Close -->

		</div><!-- .site-info -->

		</div><!-- .row for footer -->	
		<!-- Foundation Footer Grid Close -->

	</footer><!-- #colophon -->
	
  <!-- close the off-canvas menu -->
  <a class="exit-off-canvas"></a>

  </div>
</div><!-- off-canvas close -->	
	
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Foundation Javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js-found/vendor/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js-found/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

</body>
</html>










