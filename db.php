<?php
/**
 * Date: 07.08.18
 * @author Isaenko Alexey <info@oiplug.com>
 */
require 'config.php';

global $link;

if ( empty( $link ) ) {
	$link = mysqli_connect( 'localhost', 'root', '', 'antip' );
	mysqli_set_charset( $link, 'utf8' );
}



// eof
