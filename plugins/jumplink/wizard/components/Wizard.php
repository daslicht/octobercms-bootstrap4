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
    
    /*
     * Called when you open the Page in the browser , not admin !
     */
    public function onRender(){
         
         \ChromePhp::log('Wizard Component Settings, onRender');

         /* Using persisted properties */
         $settings = WizardSettings::instance();
         $this->page['wizardsettings'] = $settings->wizardsettings;
    }
    
    function onInit()
    {
        // This code will be executed before
        // an AJAX request is handled.
         \ChromePhp::log('onInit before AJAX');
    }
    
    function onDoit()
    {
       
        // $email = post('email');
        // $name = post('name');
        // $message = post('message');
        // \ChromePhp::log(  $email,  $name, $message);

        return [
            // "foo" => "done!",
           
            // "result" => $this->renderPartial('contact::result',[
            //      "test" => "OK!"
            // ])
        ];
        // $content = $this->renderPartial('component-partial.htm', [
        //     'name' => 'John Smith'
        // ]);
    }
       
}