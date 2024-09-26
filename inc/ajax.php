<?php 
/**
 * Всё для работы ajax - запросов
 * 
 * @package ASB Video
 */

/**
 * Получение калькулятора
*/
add_action( 'wp_ajax_calc_modal', 'calc_modal' ); 
add_action( 'wp_ajax_nopriv_calc_modal', 'calc_modal' );   

function calc_modal(){
    $res = ['success' => false];

    $rooms        = isset($_POST['rooms'])        ? (int) $_POST['rooms']         : null;
    $meters       = isset($_POST['meters'])       ? (int) $_POST['meters']        : null;
    $need_setting = isset($_POST['need_setting']) ? (bool) $_POST['need_setting'] : null;

    if(!$rooms || !$meters || !$need_setting){
        echo json_encode($res);
        die();
    }

    ob_start();

    get_template_part('template-parts/modals/modal', 'main', ['rooms' => $rooms, 'meters' => $meters, 'need_setting' => $need_setting]);
    
    $content = ob_get_contents();
 
    ob_end_clean();

    $res['modal'] = $content;
    $res['success'] = true;
    echo json_encode($res);
    die();
}