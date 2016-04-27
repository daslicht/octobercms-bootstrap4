<?php namespace Jumplink\Wizard;

use Backend;
use System\Classes\PluginBase;



/*https://octobercms.com/docs/plugin/components#component-assets*/

/**
 * wizard Plugin Information File
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
            'name'        => 'wizard',
            'description' => 'Wizard Plugin',
            'author'      => 'Marc Wensauer',
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
        return [
            '\Jumplink\Wizard\Components\Wizard' => 'wizard'
        ];
    }
    
    public function registerSettings(){
        return [
            'settings' => [
                'label'       => 'Wizard',
                'description' => 'Wizard Setting',
                'category'    => 'Jumplink',
                'icon'        => 'icon-bar-chart-o',
                //'class'       => 'Jumplink\Wizard\Models\settings',
                'url'       =>  Backend::url('jumplink/wizard/wizard'),
                'order'       => 1
            ]
        ];
    }
   
}
