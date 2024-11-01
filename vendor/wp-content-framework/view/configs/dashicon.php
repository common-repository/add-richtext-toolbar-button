<?php
/**
 * WP_Framework_View Configs Filter
 *
 * @version 0.0.3
 * @author Technote
 * @copyright Technote All Rights Reserved
 * @license http://www.opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
 * @link https://technote.space
 */

if ( ! defined( 'WP_CONTENT_FRAMEWORK' ) ) {
	exit;
}

return [

	'available' => [
//		'admin-appearance',
//		'admin-collapse',
//		'admin-comments',
//		'admin-customizer',
//		'admin-generic',
//		'admin-home',
//		'admin-links',
//		'admin-media',
//		'admin-multisite',
//		'admin-network',
//		'admin-page',
//		'admin-plugins',
//		'admin-post',
//		'admin-settings',
//		'admin-site-alt',
//		'admin-site-alt2',
//		'admin-site-alt3',
//		'admin-site',
//		'admin-tools',
//		'admin-users',
//		'album',
//		'align-center',
//		'align-full-width',
//		'align-left',
//		'align-none',
//		'align-pull-left',
//		'align-pull-right',
//		'align-right',
//		'align-wide',
//		'analytics',
//		'archive',
//		'arrow-down-alt',
//		'arrow-down-alt2',
//		'arrow-down',
//		'arrow-left-alt',
//		'arrow-left-alt2',
//		'arrow-left',
//		'arrow-right-alt',
//		'arrow-right-alt2',
//		'arrow-right',
//		'arrow-up-alt',
//		'arrow-up-alt2',
//		'arrow-up',
//		'art',
//		'awards',
//		'backup',
//		'block-default',
//		'book-alt',
//		'book',
//		'buddicons-activity',
//		'buddicons-bbpress-logo',
//		'buddicons-buddypress-logo',
//		'buddicons-community',
//		'buddicons-forums',
//		'buddicons-friends',
//		'buddicons-groups',
//		'buddicons-pm',
//		'buddicons-replies',
//		'buddicons-topics',
//		'buddicons-tracking',
//		'building',
//		'businessman',
//		'button',
//		'calendar-alt',
//		'calendar',
//		'camera',
//		'carrot',
//		'cart',
//		'category',
//		'chart-area',
//		'chart-bar',
//		'chart-line',
//		'chart-pie',
//		'clipboard',
//		'clock',
//		'cloud-saved',
//		'cloud-upload',
//		'cloud',
//		'columns',
//		'controls-back',
//		'controls-forward',
//		'controls-pause',
//		'controls-play',
//		'controls-repeat',
//		'controls-skipback',
//		'controls-skipforward',
//		'controls-volumeoff',
//		'controls-volumeon',
//		'cover-image',
//		'dashboard',
//		'desktop',
//		'dismiss',
//		'download',
//		'edit',
//		'editor-aligncenter',
//		'editor-alignleft',
//		'editor-alignright',
//		'editor-bold',
//		'editor-break',
//		'editor-code',
//		'editor-contract',
//		'editor-customchar',
//		'editor-expand',
//		'editor-help',
//		'editor-indent',
//		'editor-insertmore',
//		'editor-italic',
//		'editor-justify',
//		'editor-kitchensink',
//		'editor-ltr',
//		'editor-ol-rtl',
//		'editor-ol',
//		'editor-outdent',
//		'editor-paragraph',
//		'editor-paste-text',
//		'editor-paste-word',
//		'editor-quote',
//		'editor-removeformatting',
//		'editor-rtl',
//		'editor-spellcheck',
//		'editor-strikethrough',
//		'editor-table',
//		'editor-textcolor',
//		'editor-ul',
//		'editor-underline',
//		'editor-unlink',
//		'editor-video',
//		'ellipsis',
//		'email-alt',
//		'email-alt2',
//		'email',
//		'embed-audio',
//		'embed-generic',
//		'embed-photo',
//		'embed-post',
//		'embed-video',
//		'excerpt-view',
//		'exit',
//		'external',
//		'facebook-alt',
//		'facebook',
//		'feedback',
//		'filter',
//		'flag',
//		'format-aside',
//		'format-audio',
//		'format-chat',
//		'format-gallery',
//		'format-image',
//		'format-quote',
//		'format-status',
//		'format-video',
//		'forms',
//		'googleplus',
//		'grid-view',
//		'groups',
//		'hammer',
//		'heading',
//		'heart',
//		'hidden',
//		'html',
//		'id-alt',
//		'id',
//		'image-crop',
//		'image-filter',
//		'image-flip-horizontal',
//		'image-flip-vertical',
//		'image-rotate-left',
//		'image-rotate-right',
//		'image-rotate',
//		'images-alt',
//		'images-alt2',
//		'index-card',
//		'info-outline',
//		'info',
//		'insert-after',
//		'insert-before',
//		'insert',
//		'instagram',
//		'laptop',
//		'layout',
//		'leftright',
//		'lightbulb',
//		'list-view',
//		'location-alt',
//		'location',
//		'lock',
//		'marker',
//		'media-archive',
//		'media-audio',
//		'media-code',
//		'media-default',
//		'media-document',
//		'media-interactive',
//		'media-spreadsheet',
//		'media-text',
//		'media-video',
//		'megaphone',
//		'menu-alt',
//		'menu',
//		'microphone',
//		'migrate',
//		'minus',
//		'money',
//		'move',
//		'nametag',
//		'networking',
//		'no-alt',
//		'no',
//		'palmtree',
//		'paperclip',
//		'performance',
//		'phone',
//		'playlist-audio',
//		'playlist-video',
//		'plus-alt',
//		'plus-light',
//		'plus',
//		'portfolio',
//		'post-status',
//		'pressthis',
//		'products',
//		'randomize',
//		'redo',
//		'rest-api',
//		'rss',
//		'saved',
//		'schedule',
//		'screenoptions',
//		'search',
//		'share-alt',
//		'share-alt2',
//		'share',
//		'shield-alt',
//		'shield',
//		'shortcode',
//		'slides',
//		'smartphone',
//		'smiley',
//		'sort',
//		'sos',
//		'star-empty',
//		'star-filled',
//		'star-half',
//		'sticky',
//		'store',
//		'table-col-after',
//		'table-col-before',
//		'table-col-delete',
//		'table-row-after',
//		'table-row-before',
//		'table-row-delete',
//		'tablet',
//		'tag',
//		'tagcloud',
//		'testimonial',
//		'text',
//		'thumbs-down',
//		'thumbs-up',
//		'tickets-alt',
//		'tickets',
//		'tide',
//		'translation',
//		'trash',
//		'twitter',
//		'undo',
//		'universal-access-alt',
//		'universal-access',
//		'unlock',
//		'update',
//		'upload',
//		'vault',
//		'video-alt',
//		'video-alt2',
//		'video-alt3',
//		'visibility',
//		'warning',
//		'welcome-add-page',
//		'welcome-comments',
//		'welcome-learn-more',
//		'welcome-view-site',
//		'welcome-widgets-menus',
//		'welcome-write-blog',
//		'wordpress-alt',
//		'wordpress',
//		'yes-alt',
//		'yes',

		'menu',
		'admin-site',
		'dashboard',
		'admin-media',
		'admin-page',
		'admin-comments',
		'admin-appearance',
		'admin-plugins',
		'admin-users',
		'admin-tools',
		'admin-settings',
		'admin-network',
		'admin-generic',
		'admin-home',
		'admin-collapse',
		'filter',
		'admin-customizer',
		'admin-multisite',
		'admin-links',
		'format-links',
		'admin-post',
		'format-standard',
		'format-image',
		'format-gallery',
		'format-audio',
		'format-video',
		'format-chat',
		'format-status',
		'format-aside',
		'format-quote',
		'welcome-write-blog',
		'welcome-edit-page',
		'welcome-add-page',
		'welcome-view-site',
		'welcome-widgets-menus',
		'welcome-comments',
		'welcome-learn-more',
		'image-crop',
		'image-rotate',
		'image-rotate-left',
		'image-rotate-right',
		'image-flip-vertical',
		'image-flip-horizontal',
		'image-filter',
		'undo',
		'redo',
		'editor-bold',
		'editor-italic',
		'editor-ul',
		'editor-ol',
		'editor-quote',
		'editor-alignleft',
		'editor-aligncenter',
		'editor-alignright',
		'editor-insertmore',
		'editor-spellcheck',
		'editor-distractionfree',
		'editor-expand',
		'editor-contract',
		'editor-kitchensink',
		'editor-underline',
		'editor-justify',
		'editor-textcolor',
		'editor-paste-word',
		'editor-paste-text',
		'editor-removeformatting',
		'editor-video',
		'editor-customchar',
		'editor-outdent',
		'editor-indent',
		'editor-help',
		'editor-strikethrough',
		'editor-unlink',
		'editor-rtl',
		'editor-break',
		'editor-code',
		'editor-paragraph',
		'editor-table',
		'align-left',
		'align-right',
		'align-center',
		'align-none',
		'lock',
		'unlock',
		'calendar',
		'calendar-alt',
		'visibility',
		'hidden',
		'post-status',
		'edit',
		'post-trash',
		'trash',
		'sticky',
		'external',
		'arrow-up',
		'arrow-down',
		'arrow-left',
		'arrow-right',
		'arrow-up-alt',
		'arrow-down-alt',
		'arrow-left-alt',
		'arrow-right-alt',
		'arrow-up-alt2',
		'arrow-down-alt2',
		'arrow-left-alt2',
		'arrow-right-alt2',
		'leftright',
		'sort',
		'randomize',
		'list-view',
		'excerpt-view',
		'grid-view',
		'hammer',
		'art',
		'migrate',
		'performance',
		'universal-access',
		'universal-access-alt',
		'tickets',
		'nametag',
		'clipboard',
		'heart',
		'megaphone',
		'schedule',
		'wordpress',
		'wordpress-alt',
		'pressthis',
		'update',
		'screenoptions',
		'cart',
		'feedback',
		'cloud',
		'translation',
		'tag',
		'category',
		'archive',
		'tagcloud',
		'text',
		'media-archive',
		'media-audio',
		'media-code',
		'media-default',
		'media-document',
		'media-interactive',
		'media-spreadsheet',
		'media-text',
		'media-video',
		'playlist-audio',
		'playlist-video',
		'controls-play',
		'controls-pause',
		'controls-forward',
		'controls-skipforward',
		'controls-back',
		'controls-skipback',
		'controls-repeat',
		'controls-volumeon',
		'controls-volumeoff',
		'yes',
		'no',
		'no-alt',
		'plus',
		'plus-alt',
		'plus-alt2',
		'minus',
		'dismiss',
		'marker',
		'star-filled',
		'star-half',
		'star-empty',
		'flag',
		'info',
		'warning',
		'share',
		'share1',
		'share-alt',
		'share-alt2',
		'twitter',
		'rss',
		'email',
		'email-alt',
		'facebook',
		'facebook-alt',
		'networking',
		'googleplus',
		'location',
		'location-alt',
		'camera',
		'images-alt',
		'images-alt2',
		'video-alt',
		'video-alt2',
		'video-alt3',
		'vault',
		'shield',
		'shield-alt',
		'sos',
		'search',
		'slides',
		'analytics',
		'chart-pie',
		'chart-bar',
		'chart-line',
		'chart-area',
		'groups',
		'businessman',
		'id',
		'id-alt',
		'products',
		'awards',
		'forms',
		'testimonial',
		'portfolio',
		'book',
		'book-alt',
		'download',
		'upload',
		'backup',
		'clock',
		'lightbulb',
		'microphone',
		'desktop',
		'tablet',
		'smartphone',
		'phone',
		'smiley',
		'index-card',
		'carrot',
		'building',
		'store',
		'album',
		'palmtree',
		'tickets-alt',
		'money',
		'thumbs-up',
		'thumbs-down',
		'layout',
	],

];
