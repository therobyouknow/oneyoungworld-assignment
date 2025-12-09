https://gemini.google.com/share/f87d0b788c17

Ongoing troubleshooting.

With this code below, I'm getting these errors, when I run PHPUnit, do you know why?

robdaviswork@192 code % ddev phpunit --filter 'OywRestClientTest*'
PHPUnit 11.5.46 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.23

EEE                                                                 3 / 3 (100%)

Time: 00:00.023, Memory: 6.00 MB

There were 3 errors:

1) Drupal\Tests\oyw_salesforce\Unit\OywRestClientTest::testIsInit
Prophecy\Exception\Doubler\ClassNotFoundException: Cannot prophesize class Drupal\salesforce\SalesforceClientSettings, because it cannot be found.

/var/www/html/vendor/phpspec/prophecy/src/Prophecy/Prophet.php:96
/var/www/html/vendor/phpspec/prophecy-phpunit/src/ProphecyTrait.php:59
/var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php:62

2) Drupal\Tests\oyw_salesforce\Unit\OywRestClientTest::testGetPicklistValues
Prophecy\Exception\Doubler\ClassNotFoundException: Cannot prophesize class Drupal\salesforce\SalesforceClientSettings, because it cannot be found.

/var/www/html/vendor/phpspec/prophecy/src/Prophecy/Prophet.php:96
/var/www/html/vendor/phpspec/prophecy-phpunit/src/ProphecyTrait.php:59
/var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php:62

3) Drupal\Tests\oyw_salesforce\Unit\OywRestClientTest::testApiCallIsShortCircuited
Prophecy\Exception\Doubler\ClassNotFoundException: Cannot prophesize class Drupal\salesforce\SalesforceClientSettings, because it cannot be found.

/var/www/html/vendor/phpspec/prophecy/src/Prophecy/Prophet.php:96
/var/www/html/vendor/phpspec/prophecy-phpunit/src/ProphecyTrait.php:59
/var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php:62

ERRORS!
Tests: 3, Assertions: 0, Errors: 3, PHPUnit Deprecations: 1.
Failed to run phpunit --filter OywRestClientTest*: exit status 2




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

This is a very common issue in Drupal unit testing, especially when dealing with classes from contributed modules.

The error message:

> `Prophecy\Exception\Doubler\ClassNotFoundException: Cannot prophesize class Drupal\salesforce\SalesforceClientSettings, because it cannot be found.`

This clearly indicates that the PHP class `Drupal\salesforce\SalesforceClientSettings` cannot be loaded when PHPUnit runs your unit test.

### 🐛 Why the Class Cannot Be Found

In Drupal, unit tests run in a minimal environment that only loads the code from your **custom module** and the **required core components** for PHPUnit's `UnitTestCase`. It **does not** automatically load the code from other modules, even if they are installed and present in your site's codebase (like the `salesforce` module).

You are trying to create a mock (using Prophecy) for a class that your test runner does not know exists:

```php
// Line 62 in your file:
$settings = $this->prophesize('Drupal\salesforce\SalesforceClientSettings'); 
```

### ✅ The Solution: Define Dependencies in Your `*.info.yml`

To fix this, you need to explicitly tell PHPUnit that your unit test depends on the `salesforce` module's code being available for the test run.

You must add the `salesforce` module to the `dependencies` key in your module's `oyw_salesforce.info.yml` file under a special section for tests.

1.  **Locate your module's `.info.yml` file:**

      * `web/modules/custom/oyw_salesforce/oyw_salesforce.info.yml`

2.  **Add the necessary `test_dependencies` block:**

    Open the file and ensure it contains the following section:

    ```yaml
    # oyw_salesforce.info.yml

    # ... (other stuff like name, type, core_version_requirement, etc.)

    # Required for Unit Tests that use classes from other modules
    # such as Drupal\salesforce\SalesforceClientSettings.
    test_dependencies:
      - salesforce:salesforce
    ```

      * The format is `[module_project_name]:[module_machine_name]`. Since the module is called `salesforce`, you use `salesforce:salesforce`.

### 📝 Explanation

When PHPUnit runs unit tests for a module, it checks the `test_dependencies` section of the module's `.info.yml` file. If a dependency is listed, the test runner will ensure that the necessary class files (like `Drupal\salesforce\SalesforceClientSettings` in the `salesforce` module) are properly autoloaded, making them available to be mocked (`prophesize()`) in your test.

After making this change, your tests should run successfully:

```bash
ddev phpunit --filter 'OywRestClientTest*'
```

Would you like me to clarify anything about the role of `test_dependencies` in Drupal unit testing?



I've got the salesforce dependency, this is what my info.yml file looks like:

name: 'oyw_salesforce'
type: module
description: 'a custom Drupal 11 module that calls Salesforce to populate options for a list field.'
package: Custom
core_version_requirement: ^11
dependencies:
  - salesforce:salesforce


But I still get the same error.


That's frustrating\! You've correctly identified and attempted the most common fix. However, the dependency mechanism you've used (`dependencies`) is primarily for **runtime** dependencies (ensuring the module is installed when your site runs).

For **PHPUnit unit tests**, the specific section is `test_dependencies`, but sometimes that isn't enough, or the test runner is configured in a way that skips that section for Unit Tests.

Let's look at two other potential solutions that are necessary when `test_dependencies` isn't working for Unit Tests, which is a common quirk in Drupal's test setup.

### 1\. The `test_dependencies` Fix (Double Check)

First, just to be absolutely certain, ensure you have used the correct key: **`test_dependencies`**.

If your `oyw_salesforce.info.yml` looks like this:

```yaml
name: 'oyw_salesforce'
type: module
# ...
core_version_requirement: ^11
dependencies:
  - salesforce:salesforce
```

You are using the **wrong key** for unit tests. You need to use the dedicated key for test dependencies.

**Corrected `oyw_salesforce.info.yml`:**

```yaml
name: 'oyw_salesforce'
type: module
description: 'a custom Drupal 11 module that calls Salesforce to populate options for a list field.'
package: Custom
core_version_requirement: ^11

# This is the runtime dependency
dependencies:
  - salesforce:salesforce

# 👇 You MUST add this section for PHPUnit Unit Tests!
test_dependencies:
  - salesforce:salesforce
```

If you confirm your `.info.yml` now has the `test_dependencies` key and the error persists, then we move to the next solution, which is the most robust way to handle external dependencies in Unit Tests.

-----

### 2\. The Robust Solution: Unit Test `bootstrap.php`

For complex dependencies, or when you are testing an interaction with an external module, the most reliable way to ensure the necessary classes are loaded for a **Unit Test** is to adjust the PHPUnit configuration itself, using a dedicated `bootstrap.php` file for your module.

This forces the autoloader to load the specific namespace/path of the dependent module (`salesforce`).

#### Step A: Create a Dedicated `bootstrap.php`

Create a file named `tests/bootstrap.php` inside your module's directory:

  * `/web/modules/custom/oyw_salesforce/tests/bootstrap.php`

Add the following code to it:

```php
<?php

// Find the base path for your Drupal installation.
$root = dirname(__DIR__, 4); 

// The name of the module that contains the missing class.
$module_name = 'salesforce';

// The path where the module's src directory is located (e.g., /web/modules/contrib/salesforce/src).
$module_src_dir = $root . '/web/modules/contrib/' . $module_name . '/src';

// Register the namespace with the autoloader.
if (file_exists($module_src_dir)) {
    // Determine the namespace: Drupal\module_name
    $namespace = 'Drupal\\' . $module_name;

    // Use the Drupal Autoloading mechanism to register the path.
    // This assumes your test is being run via the standard Drupal PHPUnit runner.
    \Composer\Autoload\ClassLoader::getLoader()->addPsr4($namespace . '\\', $module_src_dir);
}

// Optionally, you might need to call the Drupal test bootstrap file 
// if you are running the test directly, but ddev's wrapper often handles this.
// require $root . '/core/tests/bootstrap.php';

```

#### Step B: Clear the Cache

Since you are running DDEV, you must clear your Symfony and Drupal caches to ensure the test runner picks up the updated `.info.yml` and any changes to the environment:

```bash
ddev drush cr
```

Then, try running your unit test again:

```bash
ddev phpunit --filter 'OywRestClientTest*'
```

By explicitly registering the `Drupal\salesforce` namespace with the autoloader, you ensure that `Drupal\salesforce\SalesforceClientSettings` is found when Prophecy tries to load it for mocking.