
		<footer class="clearfix" id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<div class="wrap clearfix">

			    <!-- Links -->
			    <nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
				    <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>

					    <?php
						    wp_nav_menu(
							    array(
								    'theme_location' => 'footer-menu',
								    'container'      => false,
								    'menu_id'        => 'links',
								    'menu_class'     => 'footer-menu',
								    'depth'          => '1'
							    )
						    );
					    ?>

				    <?php else : ?>

						<ul id="links">
							<?php wp_list_pages( 'title_li=&depth=1' ); ?>
						</ul>

			    	<?php endif; ?>
				</nav>

			    <!-- Copyright -->
				<p class="copyright">
    				<?php if ( get_theme_mod( 'footer_text_setting' ) ):
                             $scripted_footer_text = get_theme_mod( 'footer_text_setting' );
                             echo wp_kses( $scripted_footer_text, array(
                                'p' => array(),
                                'a' => array(
                                        'href' => array(),
                                        'class' => array()
                                    )
                            ) );
                           else :
                                $scripted_styled_theme_link = esc_attr('http://styledthemes.com/');
                              printf(__( 'Copyright &copy; %1$s. Scripted theme by %2$s', 'scripted' ),date_i18n( 'Y' ),'<a href="'.$scripted_styled_theme_link.'" target="_blank">' . __( 'Styled Themes', 'scripted' ) . '</a>');
                            endif; 
                    ?>
				</p>

			</div>
		</footer>

		<!--Sidebar-->
		<?php get_sidebar( 'sidebar' ); ?>

		<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74129840-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>