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
    
    function onInit()
    {
        // This code will be executed before
        // an AJAX request is handled.
         \ChromePhp::log('onInit before AJAX');
    }
    
    function onDoit()
    {
        \ChromePhp::log(post('test'));
        
        /*
         * Which is the correct location for my component partials ?
         * the result.htm is currently preset at:
         * /plugins/daslicht/contact/result.htm 
         * /plugins/daslicht/contact/partials/result.htm 
         * /plugins/daslicht/contact/components/result.htm 
         * /plugins/daslicht/contact/components/contact/result.htm 
         * But I still get 'partial not found ?!'
         * 
         */
        return [
            "foo" => "done!",
            "result" => $this->renderPartial('contact::result')
        ];
    }
       
}