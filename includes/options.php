<?php
/*
 * Register settings
 */
function custom_register_settings()
{
    register_setting(
        'general',
        'custom_options_creator_name'
    );
    register_setting(
        'general',
        'custom_options_creator_url'
    );
    add_settings_section(
        'site-guide',
        'Site created by',
        '__return_false',
        'general'
    );
    add_settings_field(
        'creator_name',
        'Creator Name',
        'custom_options_creator_name',
        'general',
        'site-guide'
    );
    add_settings_field(
        'creator_url',
        'Creator URL',
        'custom_options_creator_url',
        'general',
        'site-guide'
    );
}

/*
 * Print settings field content
 */
function custom_options_creator_name()
{
  echo '<input type="text" name="custom_options_creator_name" value="'.get_option('custom_options_creator_name').'" />';
}

function custom_options_creator_url()
{
  echo '<input type="text" name="custom_options_creator_url" value="'.get_option('custom_options_creator_url').'" />';
}
