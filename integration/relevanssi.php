<?php
/**
 * Relevanssi index attachment Metabox.io
 * Expand searches of the Relevanssi plugin to find the attachments name of the Metabox 'File Advanced" field associated with the post parent.
 * 
 */

add_filter( 'relevanssi_content_to_index', 'rlv_index_attachment_names', 10, 2 );
function rlv_index_attachment_names( $content, $post_id ) {
	if ($post_id->post_type == "your_post_type") {
	  $files = rwmb_meta( '_your_meta_file_advanced' );
		foreach ( $files as $file ) {
			$content .= ' ' . $file['title'];
	  }
	}
	return $content;
}
