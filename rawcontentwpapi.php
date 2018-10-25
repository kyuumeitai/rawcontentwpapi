<?php
/*
   Plugin Name: Raw content in WP REST API
   Plugin URI: http://alex.acunaviera.com/
   Version: 0.1
   Author: Álex Acuña Viera
   Description: exposes raw content
   Text Domain: copesaplugin
   License: GPLv3
  */

	add_action( 'rest_api_init', 'create_api_posts_raw_content' );

	function create_api_posts_raw_content() {
			register_rest_field( 'post', 'raw', array(
						'get_callback'    => 'get_post_content_row',
						'schema'          => null,
					)
			);
	};

	function get_post_content_row( $object ) {
    $post_content = $object['content']['raw'];
    return  $post_content ;
	};