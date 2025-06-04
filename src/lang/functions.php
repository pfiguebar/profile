<?php
function get_current_language() {
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
    return in_array($lang, ['es', 'en']) ? $lang : 'es';
}

function get_translation($key, $default = '') {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $default;
}

function get_lang_url($lang) {
    $current_url = $_SERVER['PHP_SELF'];
    $query = $_SERVER['QUERY_STRING'];
    
    // Eliminar el parámetro lang actual si existe
    $query = preg_replace('/&?lang=[^&]*/', '', $query);
    
    // Añadir el nuevo parámetro lang
    if ($query) {
        $query .= "&lang=$lang";
    } else {
        $query = "?lang=$lang";
    }
    
    return $current_url . $query;
}

function get_opposite_lang() {
    return get_current_language() === 'es' ? 'en' : 'es';
}

function get_opposite_lang_url() {
    return get_lang_url(get_opposite_lang());
}