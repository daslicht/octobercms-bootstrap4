<?php namespace Daslicht\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * contact Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'contact',
            'description' => 'No description provided yet...',
            'author'      => 'daslicht',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        // ladybug_dump('test');
        \ChromePhp::log('Hello console!');
        return [
            '\Daslicht\Contact\Components\Contact' => 'contact'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    // public function registerPermissions()
    // {
    //     return []; // Remove this line to activate

    //     return [
    //         'daslicht.contact.some_permission' => [
    //             'tab' => 'contact',
    //             'label' => 'Some permission'
    //         ],
    //     ];
    // }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    // public function registerNavigation()
    // {
    //     return []; // Remove this line to activate

    //     return [
    //         'contact' => [
    //             'label'       => 'contact',
    //             'url'         => Backend::url('daslicht/contact/mycontroller'),
    //             'icon'        => 'icon-leaf',
    //             'permissions' => ['daslicht.contact.*'],
    //             'order'       => 500,
    //         ],
    //     ];
    // }


}
