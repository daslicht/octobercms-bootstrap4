<?php namespace Jumplink\Wizard\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use ApplicationException;
use Backend\Classes\Controller;
/*
https://octobercms.com/docs/backend/controllers-ajax#introduction
backend/[author name]/[plugin name]/[controller name]/[action name]
*/

class Wizard extends Controller {
 
    public $implement = ['Backend.Behaviors.FormController'];
    public $formConfig = 'form_config.yaml'; 
    
    public function __construct()
    {
        parent::__construct();
        //BackendMenu::setContext('Jumplink.Wizard', 'wizard', 'settings');
    }

    
    public function doit()    // <=== Action method
    {
          return 'hello world !';
    }

}
