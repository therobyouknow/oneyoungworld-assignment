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
   * Mock a query result for test_mapping.
   *
   * @see modules/salesforce_mapping/tests/modules/salesforce_mapping_test/config/install/salesforce_mapping.salesforce_mapping.test_mapping.yml
   */
  public function getPicklistValues($name, $record_t, $field_name) {
    $this->apiCall("ui-api/object-info/$name/picklist-values/$record_t ype/$field_name"); 
  }
}
