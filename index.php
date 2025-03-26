<?php
/*
*Plugin Name: Crud
 * Plugin Name: Simple Crud System
 * Description: A simple plugin to manage pages with CRUD and DataTables.
 * Version: 1.0
 * Author: Ruhul Siddkki


*/
define("MY_PLUGIN_PATH", plugin_dir_path(__FILE__));

add_action('admin_menu', 'my_custom_menu_page');
function my_custom_menu_page()
{
    // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page('Simple CRUD', 'Simple CRUD', 'manage_options', 'simple-crud', 'callback_func_output', 'dashicons-welcome-widgets-menus', 10);
    add_submenu_page(
        'simple-crud',
        'Student List',
        'Student List',
        'manage_options',
        'simple-crud',
        'callback_func_output',
    );

    add_submenu_page('simple-crud', 'Student Add', 'Student Add', 'manage_options', 'student-add', 'callback_student_add');
}
function callback_func_output()
{
    require_once MY_PLUGIN_PATH . '/views/student-list.php';
}
function callback_student_add()
{
    require_once MY_PLUGIN_PATH . '/views/student-add.php';
}
