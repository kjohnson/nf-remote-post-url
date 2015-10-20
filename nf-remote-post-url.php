<?php
/*
Plugin Name: Ninja Forms - Webhooks Remote Post URL Filter
*/

add_action( 'nf_remote_post_url', 'my_nf_remote_post_url', 10, 2 );

function my_nf_remote_post_url( $remote_url, $action_id ){
    return str_replace( '&amp;', '&', $remote_url );
}
