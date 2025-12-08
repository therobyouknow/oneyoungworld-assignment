<?php

namespace Drupal\oyw_salesforce;

use Drupal\Component\Utility\Random;
use Drupal\salesforce\Rest\RestClient;
use Drupal\salesforce\Rest\RestResponse;
use Drupal\salesforce\Rest\RestResponseDescribe;
use Drupal\salesforce\SelectQueryInterface;
use Drupal\salesforce\SelectQueryResult;
use Drupal\salesforce\SFID;
use GuzzleHttp\Psr7\Response;

/**
 *
 */
class SalesforceFieldValues {
}


/*


● Create a new class called "SalesforceFieldValues" that is run by the "options_allowed_values" hook, which populates the values for the "field_gender" field 
○ The class should call the "getPicklistValues" client method like so: 
$client->getPicklistValues('field_gender', "['Contact', 'Gender__c']") 




*/