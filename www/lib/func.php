<?php

function debug($msg, $options = null, $return = false) {
    return \Common\Util::debug($msg, $options, $return);
}

function plog($msg, $return = false) {
    return \Common\Util::debug($msg, array('dismiss' => false), $return);
}

function clog($msg, $newline = true, $return = false) {
    return \Common\Util::debug($msg, array('newline' => $newline, 'dismiss' => false), $return);
}

function get($field, $data = null, $default = null) {
    return \Common\Util::get($field, $data, $default);
}

function br2nl($text) {
    return \Common\Util::br2nl($text);
}

function array_delete($array, $items) {
    return array_diff($array, is_array($items) ? $items : array($items));
}

// 변수 또는 배열의 이름과 값을 얻어냄. print_r() 함수의 변형
function print_pre($value) { 
    echo "<pre style='font-family:돋움; font-size:9pt;'>",print_r($value, true),"</pre>";
}

?>