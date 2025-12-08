<?php

namespace Drupal\oyw_salesforce;

/**
 * research: https://drupal.stackexchange.com/questions/242006/how-do-i-programmatically-update-the-allowed-values-of-a-list-field
 */
class SalesforceFieldValues {

  public static function getPicklistValues() {
    $client = \Drupal::service('oyw_salesforce.oyw_rest_client');
    $options = $client->getPicklistValues('field_gender', "['Contact', 'Gender__c']");

    return $options;
  }
}
