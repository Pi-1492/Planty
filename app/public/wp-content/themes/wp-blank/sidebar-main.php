<?php
/**
 * wp-blank WordPress Theme, ordasvit.com
 * wp-blank is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

if (!wp_blank_show_position_preview("sidebar_right", "span4 side_bar_single") && wp_blank_is_active_sidebar("sidebar_right")) { ?>
	<div class="span4 side_bar_single">
		<?php if (function_exists('dynamic_sidebar'))
			dynamic_sidebar('sidebar_right'); ?>
	</div>
<?php }
; ?>