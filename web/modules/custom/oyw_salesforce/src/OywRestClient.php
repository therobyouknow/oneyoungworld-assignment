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
 * Test Salesforce REST client.
 *
 * @see tests/modules/salesforce_test_rest_client
 */
class OywRestClient extends RestClient {

  /*
public function __construct(ClientInterface $http_client, ConfigFactoryInterface $config_factory, StateInterface $state, CacheBackendInterface $cache, Json $json, TimeInterface $time, SalesforceAuthProviderPluginManagerInterface $authManager) {
  parent::__construct($http_client,  $config_factory,  $state,  $cache,  $json,  $time,  $authManager);
}
  */


  /**
   *
   * 
   */
  public function getPicklistValues($name, $record_type, $field_name) {
    $this->apiCall("ui-api/object-info/$name/picklist-values/$record_type/$field_name"); 
  }
}
