<?php namespace Jumplink\Wizard\Components;

use Cms\Classes\ComponentBase;
use Jumplink\Wizard\Models\WizardSettings;

class Wizard extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Wizard Component',
            'description' => 'Wizard Component'
        ];
    }

    public function defineProperties()
    {
        return [
            'wizardsettings' => [
                'description'       => 'Wizard Component Settings',
                'title'             => 'Wizard Component Settings',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '',
                'validationMessage' => 'This is the Validation Message.'
            ]
        ];
    }
    
    public function onRender(){
         /* Using persisted properties */
         $settings = WizardSettings::instance();
         $this->page['wizardsettings'] = $settings->wizardsettings;
    }
    
    function onInit()
    {
         // \ChromePhp::log('onInit before AJAX');
    }
    
       
}