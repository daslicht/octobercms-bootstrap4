<?php 

namespace Daslicht\Contact\Models;

use Model;

class ContactSettings extends Model {
    
    public $implement = ['System.Behaviors.SettingsModel'];
    
    /*
     * Key under which out setting is saved in teh database
     */
    public $settingsCode = 'daslicht_contact_settings';
    
    public $settingsFields = 'fields.yaml';
    
}