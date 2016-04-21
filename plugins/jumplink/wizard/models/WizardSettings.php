<?php namespace Jumplink\Wizard\Models;

use Model;

class WizardSettings extends Model {
    
    public $implement = ['System.Behaviors.SettingsModel'];
    
    /*
     * Key under which out setting is saved in teh database
     */
    public $settingsCode = 'jumplink_wizard_settings';
    
    public $settingsFields = 'fields.yaml';

    public static function instance()
    {
    }

}