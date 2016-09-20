<?php
/**
 * EA Starter
 *
 * @package      EAStarter
 * @since        1.0.0
 * @copyright    Copyright (c) 2014, Contributors to EA Genesis Child project
 * @license      GPL-2.0+
 */

ea_structural_wrap( 'site-inner', 'close' );
echo '</div>';

tha_footer_before();
echo '<footer class="site-footer" role="contentinfo">';
ea_structural_wrap( 'footer' );
tha_footer_top();

echo '<p>Copyright &copy; ' . date( 'Y' ) . '</p>';

tha_footer_bottom();
ea_structural_wrap( 'footer', 'close' );
echo '</footer>';
tha_footer_after();

echo '</div>';
tha_body_bottom();
wp_footer();

echo '</body></html>';
