<?php
/**
 * Created by PhpStorm.
 * User: Zakhar
 * Date: 15.09.2018
 * Time: 15:46
 */

function project_path() {
    return dirname( __FILE__ );
}

/**
 * @return string
 *
 */
function project_url() {
    $project_part = 'http://' . $_SERVER['HTTP_HOST'];
    $project_part .= str_replace( dirname($_SERVER['DOCUMENT_ROOT'] ), '', project_path() );

    return $project_part;
}

/**
 * Собираем страницу.
 */
function init() {
    if ( empty( $_GET['page'] ) ) {
        $file = 'main';
    } else {
        $file = $_GET['page'];
    }

include 'templates/header.php';

    if ( ! file_exists( 'templates/' . $file . '.php' ) ) {
        $file = '404';
    }
    include 'templates/' . $file . '.php';

include 'templates/footer.php';
}


function get_template( $file, $data = array() ) {
    $path = project_path() . '/templates/' . $file . '.php';


    $out = '';
    if ( file_exists( $path ) ) {
        ob_start();
        include $path;
        $out = ob_get_clean();
    }

    return $out;
}

/**
 * Вывод шаблона с учетом переданных в него данных.
 *
 * @param       $file
 * @param array $data
 */
function the_template( $file, $data = array() ) {
    echo get_template( $file, $data );
}

/**
 * Формируем DOM меню
 * @param $data
 * @return array|string
 */
function menu($data) {

    $out = array();
    foreach ( $data as $key => $item ) {
        $out[] = '<li><a class="navmenu" href="?page=' . $key . '">' . $item['caption'] . '</a></li>';
    }

    $out = implode( "\n", $out );

    $out = '<div class="menu">'
        .'<ul>'
        . $out . '</ul></div>';

    return $out;
}

// EOF