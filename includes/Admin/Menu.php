<?php

namespace Includes\Admin;

class Menu
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    public function admin_menu()
    {
        $parent_slug = 'plugin-menu';
        $capability = 'manage_options';
        add_menu_page(
            __('Vue Wordpress', ' plugin-template'),
            __('Vue Wordpress', ' plugin-template'),
            $capability,
            $parent_slug,
            [$this, 'addressbook'],
            'dashicons-menu',
            115
        );

        add_submenu_page(
            $parent_slug,
            __('Vue Wordpress', ' plugin-template'),
            __('Vue Wordpress', ' plugin-template'),
            $capability,
            $parent_slug,
            [$this, 'addressbook']
        );

        add_submenu_page(
            $parent_slug,
            __('Settings', ' github-assistant'),
            __('Settings', ' github-assistant'),
            $capability,
            'plugin-submenu',
            [$this, 'settings']
        );
    }

    public function plugin_page()
    {
        echo '<div id="app"></div>';
    }

    public function settings()
    {
        echo '<h1>This is Submenu page.</h1>';
    }

    public function addressbook()
    {
        echo '<div id="app"></div>';
    }

}