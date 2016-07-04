
<div id="footer">
			<div id="footer-content" class="clearfix">
				<div id="footer-widgets" class="clearfix">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
					<?php endif; ?>
				</div> <!-- end #footer-widgets -->
				<p id="copyright"> <a href="http://www.paystubdirect.com">PayStub Direct</a></p>
			</div> <!-- end #footer-content -->
		</div> <!-- end #footer -->
	</div> <!-- end #container -->



	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); 



	
?>
<div id="downloadsd" style="    position: fixed;    float: right;    top: 300px;    background-color: white;    padding: 10px;    border-radius: 10px;    border-top-left-radius: 0;    border-bottom-left-radius: 0px;    font-size: 14pt;    "><a href="http://www.paycheckstubonline.com/download-my-stub/" style="    color: rgba(7, 142, 7, 0.92);">My stubs</a></div>
</body>
</html>