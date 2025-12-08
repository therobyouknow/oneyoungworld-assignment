<?php

namespace Drupal\oyw_salesforce;



/**
 *
 */
class SalesforceFieldValues {

  public static function getPicklistValues() {
    $client = \Drupal::service('oyw_salesforce.oyw_rest_client');
    //$options = $client->getPicklistValues('field_gender', "['Contact', 'Gender__c']");

  
  $options = [
    1 => 'male',
    2 => 'female',
    3 => 'other 1',
    4 => 'other 2',
  ];

    return $options;
  }
}


/*


$Door = \Drupal::service('custom_service.door')


● Create a new class called "SalesforceFieldValues" that is run by the "options_allowed_values" hook, which populates the values for the "field_gender" field 
○ The class should call the "getPicklistValues" client method like so: 
$client->getPicklistValues('field_gender', "['Contact', 'Gender__c']") 


$client->getPicklistValues('field_gender', "['Contact', 'Gender__c']") 

*/