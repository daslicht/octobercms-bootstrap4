<?php namespace Daslicht\Contact\Components;

use Cms\Classes\ComponentBase;

class Contact extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of todo items allowed',
                'title'             => 'Max items',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.'
            ]
        ];
    }
    
    /*
     * Called when you open the Page in the browser , not admin !
     */
    public function onRender(){
         \ChromePhp::log('plugins/daslicht/contact Contact.php, onRender');
    }
    


}