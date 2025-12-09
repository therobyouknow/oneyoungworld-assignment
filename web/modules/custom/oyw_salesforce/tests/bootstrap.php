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