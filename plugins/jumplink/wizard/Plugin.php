<?php namespace Jumplink\Wizard;

use Backend;
use System\Classes\PluginBase;

/**
 * wizard Plugin Information File
 */
class Wizard extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'wizard',
            'description' => 'Wizard Plugin',
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
        return [
            '\Jumplink\Wizard\Components\Wizard' => 'wizard'
        ];
    }
    
    public function registerSettings(){
        return [
            'settings' => [
                'label'       => 'Wizard',
                'description' => 'Wizard Setting',
                'icon'        => 'icon-bar-chart-o',
                'class'       => 'Jumplink\Wizard\Models\wizardsettings',
                'order'       => 1
            ]
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
