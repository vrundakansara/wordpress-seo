<?php
/**
 * @package WPSEO\Admin\ImageAltCheck
 */
/**
 * Class with functionality to check images for missing Alt Attribute Text
 */
class WPSEO_Image_Alt_Checker {

	/**
	 * Load Page
	 */
	public function get_images_without_alt() {
		$query_images_args = array(
			'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
		);
		$query_images = new WP_Query( $query_images_args );
		$images = array();
		foreach ( $query_images->posts as $image ) {
			$altText = get_post_meta( $image->ID, '_wp_attachment_image_alt', true );
			if( strlen( $altText ) === 0 ) {
				$imgObj = array(
					'id' => $image->ID,
					'url' => wp_get_attachment_thumb_url( $image->ID )
				);
				$images[]= $imgObj;
			}
		}

		return $images;
	}
}
