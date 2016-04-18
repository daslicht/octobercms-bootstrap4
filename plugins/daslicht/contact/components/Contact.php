<?php namespace Daslicht\Contact\Components;

use Cms\Classes\ComponentBase;

use Daslicht\Contact\Models\ContactSettings;

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
            'mysetting' => [
                'description'       => 'This is just a test setting description',
                'title'             => 'My Setting',
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
         
         \ChromePhp::log('plugins/daslicht/contact Contact.php, onRender');
         
         /*
          * make Setting available in Templates,
          * now we can use it like this in teh template : {{ mysetting }}
          * see: ./contact/default.htm
          * The ComponentBase class has a page attribute that represents the rendered page.
          */
          
         /* Using properties */
         // $this->page['mysetting'] = $this->property('mysetting');
         
         /* Using persisted properties */
         $settings = ContactSettings::instance();
         $this->page['mysetting'] = $settings->mysetting;
    }
    


}


/*
        // Using properties
        //$this->page['code'] = $this->property('code');
        // Using settings
        $settings = GoogleAnalyticsSettings::instance();
        $this->page['code'] = $settings->code;

*/