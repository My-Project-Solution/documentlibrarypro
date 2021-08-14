<?php 
/* Shortcode to display the document library for a specific post based on the Slug. The Post slug and Category Slug must match */
  $slug = get_post( $optional_id )->post_name;
	echo do_shortcode('[doc_library doc_category="'.$slug.'"]');
