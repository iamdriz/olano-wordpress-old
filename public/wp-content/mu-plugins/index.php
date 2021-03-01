<?php

function hide_core_theme($themes) {
    unset($themes['nacore']);
    return $themes;
}
add_action('wp_prepare_themes_for_js', 'hide_core_theme');

?>