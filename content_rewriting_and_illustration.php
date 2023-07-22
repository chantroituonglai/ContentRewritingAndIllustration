<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContentRewritingAndIllustration extends App_Module_Base
{
    public function __construct()
    {
        parent::__construct();

        /**
         * Register your module activation function here
         */
        register_activation_hook(CONTENTREWRITINGANDILLUSTRATION_MODULE_NAME, [ $this, 'activate' ]);

        /**
         * Register your module deactivation function here
         */
        register_deactivation_hook(CONTENTREWRITINGANDILLUSTRATION_MODULE_NAME, [ $this, 'deactivate' ]);

        /**
         * Register your module uninstallation function here
         */
        register_uninstall_hook(CONTENTREWRITINGANDILLUSTRATION_MODULE_NAME, [ $this, 'uninstall' ]);

        /**
         * Register the module in the menu
         */
        $this->register_menu();
    }

    /**
     * This function will be triggered when the module is activated
     */
    public function activate()
    {
        // Create tables, default data, etc.
    }

    /**
     * This function will be triggered when the module is deactivated
     */
    public function deactivate()
    {
        // Remove tables, default data, etc.
    }

    /**
     * This function will be triggered when the module is uninstalled
     */
    public function uninstall()
    {
        // Remove all module data
    }

    /**
     * Register the module in the menu
     */
    private function register_menu()
    {
        $CI = &get_instance();

        $CI->app_menu->add_sidebar_menu_item('content_rewriting_and_illustration', [
            'name'     => _l('content_rewriting_and_illustration'), // The name of the module
            'icon'     => 'fa fa-pencil', // The icon of the module
            'href'     => admin_url('content_rewriting_and_illustration'), // The URL of the module
            'position' => 5, // The position of the module in the menu
        ]);

        $CI->app_menu->add_sidebar_children_item('content_rewriting_and_illustration', [
            'slug'     => 'ai_articles', // The slug of the child menu
            'name'     => _l('ai_articles'), // The name of the child menu
            'href'     => admin_url('content_rewriting_and_illustration/ai_articles'), // The URL of the child menu
            'position' => 10, // The position of the child menu
        ]);

        $CI->app_menu->add_sidebar_children_item('content_rewriting_and_illustration', [
            'slug'     => 'article_image_urls', // The slug of the child menu
            'name'     => _l('article_image_urls'), // The name of the child menu
            'href'     => admin_url('content_rewriting_and_illustration/article_image_urls'), // The URL of the child menu
            'position' => 20, // The position of the child menu
        ]);

        $CI->app_menu->add_sidebar_children_item('content_rewriting_and_illustration', [
            'slug'     => 'connected_websites', // The slug of the child menu
            'name'     => _l('connected_websites'), // The name of the child menu
            'href'     => admin_url('content_rewriting_and_illustration/connected_websites'), // The URL of the child menu
            'position' => 30, // The position of the child menu
        ]);
    }

}
