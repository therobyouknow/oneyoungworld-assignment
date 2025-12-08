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

  /**
   * {@inheritdoc}
   */
  public function isInit() {
    return TRUE;
  }

  /*
public function __construct(ClientInterface $http_client, ConfigFactoryInterface $config_factory, StateInterface $state, CacheBackendInterface $cache, Json $json, TimeInterface $time, SalesforceAuthProviderPluginManagerInterface $authManager) {
  parent::__construct($http_client,  $config_factory,  $state,  $cache,  $json,  $time,  $authManager);
}
  */


  /**
   *
   * 
   */
  public function getPicklistValues(string $name, string $field_name, string $record_type = '012000000000000AAA') {

// https://developer.salesforce.com/docs/atlas.en-us.uiapi.meta/uiapi/ui_api_resources_picklist_values.htm

    $this->apiCall("ui-api/object-info/$name/picklist-values/$record_type/$field_name"); 

      $options = [
    1 => 'male',
    2 => 'female',
    3 => 'other 1',
    4 => 'other 2',
    5 => 'other 3',
  ];

  return $options;
  }

 /**
  * Short-circuit api calls.
  *
  * (got this from TestRestClient.php)
  */
  public function apiCall($path, $params = [], $method = 'GET', $returnObject = FALSE, array $headers = []) {
  }
}
