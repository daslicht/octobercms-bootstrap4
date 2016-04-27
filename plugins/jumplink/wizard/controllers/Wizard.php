<?php namespace Jumplink\Wizard\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use ApplicationException;
use Backend\Classes\Controller;
use Jumplink\Wizard\Settings;

/*
https://octobercms.com/docs/backend/controllers-ajax#introduction
backend/[author name]/[plugin name]/[controller name]/[action name]
*/

class Wizard extends Controller {
 
    public $implement = ['Backend.Behaviors.FormController'];
    public $formConfig = 'form_config.yaml'; 
    //public $layout = 'form-with-sidebar';
     
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Jumplink.Wizard', 'wizard', 'settings');
        $this->bodyClass = 'compact-container';
       
    }

    
    public function doit()    
    {
          return 'hello world !';
    }
    
    public function index()    
    {
          return $this->makePartial('partial',['foo' => 'bar']) ;
    }


}
