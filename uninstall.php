<?php

// If uninstall is not called from WordPress, exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

$setting_prefix = 'page_takeover_';

$settings = array(
    'background',
    'title',
    'title_font',
    'title_size',
    'title_color',
    'subtitle',
    'subtitle_font',
    'subtitle_size',
    'subtitle_color',
    'button',
    'button_url',
    'button_rel',
    'button_font',
    'button_size',
    'button_background',
    'button_color',
    'newsletter_url',
    'newsletter_input_font_family',
    'newsletter_input_font_size',
    'newsletter_input_bg_color',
    'newsletter_input_color',
    'newsletter_button_font_family',
    'newsletter_button_font_size',
    'newsletter_button_bg_color',
    'newsletter_button_color',
    'decline',
    'decline_font',
    'decline_size',
    'decline_color',
    'custom_content_before',
    'custom_content_after',
    'custom_css',
    'trigger_type',
    'trigger',
    'frequency',
    'placement',
    'status',
);

foreach ( $settings as $setting ) {
    delete_option( $setting_prefix . $setting );    
}
