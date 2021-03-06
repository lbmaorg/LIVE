<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sidebar Right
 *
 *
 * @file           sidebar-right.php
 * @package        Responsive
 * @author         Gerard Greenidge
 * @copyright      2003 - 2014 EDUNOW INC.
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive-child/sidebar-right.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
	<div id="right-sidebar-widgets" class="grid col-220 fit">
		<?php responsive_widgets(); // above widgets hook ?>

		<?php if ( !dynamic_sidebar( 'right-sidebar' ) ) : ?>
			<div class="widget-wrapper">

				<div class="widget-title"><h3><?php _e( 'In Archive', 'responsive' ); ?></h3></div>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>

			</div><!-- end of .widget-wrapper -->
		<?php endif; //end of right-sidebar ?>

		<?php responsive_widgets_end(); // after widgets hook ?>
	</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>