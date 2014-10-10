		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package lawyeria-lite
		 */
		?>
		<footer id="footer">
			<div class="wrapper cf">
				<div class="footer-margin-left cf">
					<?php
						if ( is_active_sidebar( 'footer-sidebar' ) ) {
							dynamic_sidebar( 'footer-sidebar' );
						} else {
							echo '<div class="footer-box">'.__('The sidebar is not active.','lawyeria-lite').'</div>';
						}
					?>
				</div><!--/div .footer-margin-left .cf-->
				<div class="copyright">
					<?php
					if(get_theme_mod('cw_copyright')):
						echo get_theme_mod('cw_copyright');
					endif;
					?>
					<a href="http://themeisle.com/themes/lawyeria-lite/" target="_blank" rel="nofollow">Lawyeria Lite</a><?php _e(' powered by ','lawyeria-lite'); ?><a href="http://wordpress.org/" target="_blank" rel="nofollow"><?php _e('WordPress','lawyeria-lite'); ?></a>
				</div>
			</div><!--/div .wrapper .cf-->
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>
</html>
