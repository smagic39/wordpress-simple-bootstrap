			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
          <hr />
          <div id="widget-footer" class="vertical-nav clearfix row">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
            <?php endif; ?>
          </div>
					
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->

		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>