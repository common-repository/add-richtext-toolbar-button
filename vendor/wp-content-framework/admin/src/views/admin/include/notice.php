<?php
/**
 * WP_Framework_Admin Views Admin Include Notice
 *
 * @version 0.0.32
 * @author Technote
 * @copyright Technote All Rights Reserved
 * @license http://www.opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @link https://technote.space
 */

use WP_Framework_Presenter\Interfaces\Presenter;

if ( ! defined( 'WP_CONTENT_FRAMEWORK' ) ) {
	return;
}
/** @var Presenter $instance */
/** @var array $messages */
?>
<?php if ( ! empty( $messages ) ): ?>
	<?php foreach ( $messages as $group => $m1 ): ?>
		<?php foreach ( $m1 as $class => $m2 ): ?>
            <div class="<?php $instance->h( $class ); ?> <?php $instance->id(); ?>-admin-message">
                <ul>
					<?php foreach ( $m2 as list( $m, $escape ) ): ?>
                        <li><p><?php $instance->h( $m, true, true, $escape ); ?></p></li>
					<?php endforeach; ?>
                </ul>
            </div>
		<?php endforeach; ?>
	<?php endforeach; ?>
<?php endif; ?>