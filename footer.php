</div><!--class="wrapper"-->

<div id="footer">

	<div class="meta">
		<a href="http://wordpress.org"><img id="wp-logo" src="<?php bloginfo('template_directory'); ?>/images/wpmini-grey.png" alt="WordPress Icon">WordPress</a> | 
		<?php
			if(is_user_logged_in()) {
				echo '<a href="' . site_url('wp-admin') . '">Admin Panel</a> | ';
				wp_loginout();
			} else {
				wp_loginout();
			}
		?> |
		<a href="https://github.com/deplicator/Clean-and-Thrifty">Scouting Theme</a>
	</div>
</div>


</body>
</html>