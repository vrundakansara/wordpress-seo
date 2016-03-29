<?php

/**
 * @package WPSEO\Admin
 */

if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();

} ?>

<div id="=check_image_alt_text_options" class="wrap">
	<h2><?php echo __( 'Images without an Alt Attribute:', 'wordpress-seo' ); ?></h2>
	<span>
		<p>
		<?php echo __( 'The alt attribute provides alternative information for an image if a user for some reason cannot view it. The following images do not have alternative attribute text associated with them:', 'wordpress-seo' ); ?>
		</p>
	</span><br /><br />
	<table class="widefat">
		<thead>
			<tr>
				<th><?php echo __( 'Image ID', 'wordpress-seo' ); ?></th>
				<th><?php echo __( 'Thumbnail', 'wordpress-seo' ); ?></th>
				<th><?php echo __( 'Manage', 'wordpress-seo' ); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$alt_checker = new WPSEO_Image_Alt_Checker();
		$images = $alt_checker->get_images_without_alt();
		foreach( $images as $key => $value ) { ?>
			<tr <?php echo ( $key % 2 === 0 ? 'class="alternate"' : '' ); ?>>
				<td>
					<?php echo $value['id']; ?>
				</td>
				<td>
					<img src="<?php echo $value['url']; ?>" alt="thumbnail of <?php echo $value['id']; ?>" />
				</td>
				<td>
					<a href="<?php echo admin_url(); ?>upload.php?item=<?php echo $value['id']; ?>"><?php echo __( 'Manage', 'wordpress-seo' ); ?></a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>
