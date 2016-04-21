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
                'icon'        => 'icon-bar-chart-o',
                'class'       => 'Jumplink\Wizard\Models\wizardsettings',
                'order'       => 1
            ]
        ];
    }
   
}
