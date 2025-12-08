<?php

// credit: https://gemini.google.com/share/186e6fb44de2
// and: https://www.tothenew.com/blog/how-to-run-phpunit-tests-efficiently-in-drupal/

namespace Drupal\Tests\oyw_salesforce\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\oyw_salesforce\OywRestClient;
use Prophecy\PhpUnit\ProphecyTrait; // Recommended Drupal mocking library.

/**
 * Unit tests for the OywRestClient class.
 *
 * @group oyw_salesforce
 */
class OywRestClientTest extends UnitTestCase {

  // Use the ProphecyTrait for easier mocking.
  use ProphecyTrait;

  /**
   * The client to test.
   *
   * @var \Drupal\oyw_salesforce\OywRestClient
   */
  protected $client;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // The OywRestClient extends RestClient and has no constructor of its own.
    // The parent RestClient has a constructor that relies on external services.
    // Since OywRestClient is an *implementation* for testing, we can use 
    // PHPUnit's mocking facilities to mock the parent class, or simply ignore
    // the constructor if we only need to test OywRestClient's specific methods.
    // Since the class under test is a mock/test client itself, we can safely
    // instantiate it directly for the purpose of testing its methods.
    
    // However, the cleanest way to unit test is to mock the required
    // dependencies of the parent class, if any are strictly required for the 
    // test *runner* but not the method under test. 
    // Since we only care about getPicklistValues, we will create a mock
    // that uses the real implementation of getPicklistValues, but ignores
    // all other methods (including the parent constructor/dependencies).

    // Create a mock builder for OywRestClient. We must mock an internal method 
    // or the parent RestClient's dependencies to allow instantiation.
    // Because OywRestClient extends RestClient, which requires a Guzzle Client
    // and a Logger in its constructor, we must provide them, even if mocked.
    
    // Create prophecies (mocks) for the required dependencies.
    $guzzle_client = $this->prophesize('GuzzleHttp\ClientInterface');
    $logger = $this->prophesize('Psr\Log\LoggerInterface');

    // To allow the RestClient constructor to run without errors, we need a 
    // Salesforce Settings service and a Token service, which are dependencies 
    // of the RestClient constructor in the salesforce module.
    $settings = $this->prophesize('Drupal\salesforce\SalesforceClientSettings');
    $token_service = $this->prophesize('Drupal\salesforce\SalesforceAuthProvider\SalesforceAuthProviderInterface');
    
    // The class under test is an extension of RestClient, whose apiCall is 
    // explicitly short-circuited in OywRestClient.
    // We can instantiate it by providing mocked dependencies for the parent 
    // constructor.
    $this->client = new OywRestClient(
      $guzzle_client->reveal(),
      $logger->reveal(),
      $settings->reveal(),
      $token_service->reveal()
    );
  }

  /**
   * Tests the isInit() method returns TRUE.
   */
  public function testIsInit() {
    $this->assertTrue($this->client->isInit(), 'The isInit() method returns TRUE.');
  }

  /**
   * Tests the getPicklistValues() method extracts the correct values.
   *
   * The logic for this method is entirely self-contained (uses an internal
   * JSON string and logic), so we are primarily testing that the JSON
   * parsing and array transformation work as expected.
   */
  public function testGetPicklistValues() {
    $expected_values = ['Male', 'Female', 'Other'];
    
    // The method takes arbitrary strings for $name, $field_name, and 
    // $record_type, but the returned data is hardcoded inside the method.
    $result = $this->client->getPicklistValues('Account', 'Gender__c');

    $this->assertIsArray($result, 'The result is an array.');
    $this->assertCount(3, $result, 'The result contains 3 values.');
    $this->assertEquals($expected_values, $result, 'The extracted picklist values match the expected array.');
  }

  /**
   * Tests the apiCall method is a short-circuit.
   *
   * As per the class implementation, the method is empty. This test ensures
   * that calling it does not throw an error.
   */
  public function testApiCallIsShortCircuited() {
    // The apiCall method should execute without errors, as it's an empty override.
    try {
      $this->client->apiCall('/test/path', ['param' => 'value'], 'POST');
      $this->expectNotToPerformAssertions(); // Indicate success is that no exception was thrown.
    } catch (\Throwable $e) {
      $this->fail('The apiCall method threw an exception: ' . $e->getMessage());
    }
  }

}