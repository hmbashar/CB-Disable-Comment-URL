<?php 
/**
 * Plugin Name: CB Disable Comment URL
 * Plugin URI: https://wordpress.org/plugins/cb-disable-comment-url/
 * Description: This plugin removes the URL field from the WordPress comment form.
 * Version: 1.1.0
 * Author: Md Abul Bashar
 * Author URI: https://facebook.com/hmbashar
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Removes the URL field from the comment form fields.
 *
 * @param array $fields The default comment form fields.
 * @return array Modified comment form fields without the URL field.
 */
function cb_disable_comment_url($fields) {
    unset($fields['url']);
    return $fields;
}

// Hook the function to the 'comment_form_default_fields' filter to modify the comment form fields.
add_filter('comment_form_default_fields', 'cb_disable_comment_url');

