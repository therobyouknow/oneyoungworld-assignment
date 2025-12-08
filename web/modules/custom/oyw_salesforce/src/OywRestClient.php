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
class OywRestClient extends RestClient
{

  /**
   * {@inheritdoc}
   */
  public function isInit()
  {
    return TRUE;
  }


  /**
   *
   * 
   */
  public function getPicklistValues(string $name, string $field_name, string $record_type = '012000000000000AAA')
  {

    // would use this for a real salesforce developer instance
    // https://developer.salesforce.com/docs/atlas.en-us.uiapi.meta/uiapi/ui_api_resources_picklist_values.htm

    $this->apiCall("ui-api/object-info/$name/picklist-values/$record_type/$field_name");

    // credit: https://gemini.google.com/share/1d8089fdb0df (due to time constraints)
    // (used Gemini to setup json and array parsing code below)
    // original JSON from test doc

    /* start gemini */

    $json_string = '{
    "values": [
        {
            "attributes": null,
            "label": "Male",
            "validFor": [],
            "value": "Male"
        },
        {
            "attributes": null,
            "label": "Female",
            "validFor": [],
            "value": "Female"
        },
        {
            "attributes": null,
            "label": "Other",
            "validFor": [],
            "value": "Other"
        }
    ]
}';

    // 2. Decode the JSON string into a PHP variable.
    // The second argument 'true' tells json_decode to return associative arrays.
    // If 'true' is omitted, it will return objects (of class stdClass).
    $data_array = json_decode($json_string, true);

    // Example of accessing the data:
    //echo "The label of the first value is: " . $data_array['values'][0]['label'];

    // ----------------------------------------------------
    // 1. Initialize the new indexed array
    // This array will hold just the 'value' fields: ["Male", "Female", "Other"]
    $indexed_values_array = [];

    // 2. Use a foreach loop to iterate over the 'values' array inside the main structure
    // $item represents each inner array: {"attributes": null, "label": "Male", "value": "Male", ...}
    foreach ($data_array['values'] as $item) {
      // 3. Extract the specific 'value' and append it to the new indexed array
      $indexed_values_array[] = $item['value'];
    }

    /* end gemini */

    /*
    $options = [
      1 => 'male',
      2 => 'female',
      3 => 'other 1',
      4 => 'other 2',
      5 => 'other 3',
    ];
*/

    return $indexed_values_array;


    /*

{
"values": [
{
"attributes": null,
"label": "Male",
"validFor": [],
"value": "Male"
},
{
"attributes": null,
"label": "Female",
"validFor": [],
"value": "Female"
},
{
"attributes": null,
"label": "Other",
"validFor": [],
"value": "Other"
}
]
}


*/
  }

  /**
   * Short-circuit api calls.
   *
   * (got this from TestRestClient.php)
   */
  public function apiCall($path, $params = [], $method = 'GET', $returnObject = FALSE, array $headers = []) {}
}
