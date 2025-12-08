credit: https://drupal.stackexchange.com/q/299053/1082

```
robdaviswork@192 code % ddev composer require phpunit/phpunit
The package you required is recommended to be placed in require-dev (because it is tagged as "testing") but you did not use --dev.
Do you want to re-run the command with --dev? [yes]? yes
./composer.json has been updated
Running composer update phpunit/phpunit
Loading composer repositories with package information
Updating dependencies
Lock file operations: 23 installs, 0 updates, 0 removals
  - Locking myclabs/deep-copy (1.13.4)
  - Locking phar-io/manifest (2.0.4)
  - Locking phar-io/version (3.2.1)
  - Locking phpunit/php-code-coverage (12.5.0)
  - Locking phpunit/php-file-iterator (6.0.0)
  - Locking phpunit/php-invoker (6.0.0)
  - Locking phpunit/php-text-template (5.0.0)
  - Locking phpunit/php-timer (8.0.0)
  - Locking phpunit/phpunit (12.5.1)
  - Locking sebastian/cli-parser (4.2.0)
  - Locking sebastian/comparator (7.1.3)
  - Locking sebastian/complexity (5.0.0)
  - Locking sebastian/environment (8.0.3)
  - Locking sebastian/exporter (7.0.2)
  - Locking sebastian/global-state (8.0.2)
  - Locking sebastian/lines-of-code (4.0.0)
  - Locking sebastian/object-enumerator (7.0.0)
  - Locking sebastian/object-reflector (5.0.0)
  - Locking sebastian/recursion-context (7.0.1)
  - Locking sebastian/type (6.0.3)
  - Locking sebastian/version (6.0.0)
  - Locking staabm/side-effects-detector (1.0.5)
  - Locking theseer/tokenizer (1.3.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 23 installs, 0 updates, 0 removals
  - Downloading sebastian/version (6.0.0)
  - Downloading sebastian/type (6.0.3)
  - Downloading sebastian/recursion-context (7.0.1)
  - Downloading sebastian/object-reflector (5.0.0)
  - Downloading sebastian/object-enumerator (7.0.0)
  - Downloading sebastian/global-state (8.0.2)
  - Downloading sebastian/exporter (7.0.2)
  - Downloading sebastian/environment (8.0.3)
  - Downloading sebastian/comparator (7.1.3)
  - Downloading sebastian/cli-parser (4.2.0)
  - Downloading phpunit/php-timer (8.0.0)
  - Downloading phpunit/php-text-template (5.0.0)
  - Downloading phpunit/php-invoker (6.0.0)
  - Downloading phpunit/php-file-iterator (6.0.0)
  - Downloading theseer/tokenizer (1.3.1)
  - Downloading sebastian/lines-of-code (4.0.0)
  - Downloading sebastian/complexity (5.0.0)
  - Downloading phpunit/php-code-coverage (12.5.0)
  - Downloading phpunit/phpunit (12.5.1)
  - Installing staabm/side-effects-detector (1.0.5): Extracting archive
  - Installing sebastian/version (6.0.0): Extracting archive
  - Installing sebastian/type (6.0.3): Extracting archive
  - Installing sebastian/recursion-context (7.0.1): Extracting archive
  - Installing sebastian/object-reflector (5.0.0): Extracting archive
  - Installing sebastian/object-enumerator (7.0.0): Extracting archive
  - Installing sebastian/global-state (8.0.2): Extracting archive
  - Installing sebastian/exporter (7.0.2): Extracting archive
  - Installing sebastian/environment (8.0.3): Extracting archive
  - Installing sebastian/comparator (7.1.3): Extracting archive
  - Installing sebastian/cli-parser (4.2.0): Extracting archive
  - Installing phpunit/php-timer (8.0.0): Extracting archive
  - Installing phpunit/php-text-template (5.0.0): Extracting archive
  - Installing phpunit/php-invoker (6.0.0): Extracting archive
  - Installing phpunit/php-file-iterator (6.0.0): Extracting archive
  - Installing theseer/tokenizer (1.3.1): Extracting archive
  - Installing sebastian/lines-of-code (4.0.0): Extracting archive
  - Installing sebastian/complexity (5.0.0): Extracting archive
  - Installing phpunit/php-code-coverage (12.5.0): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.4): Extracting archive
  - Installing myclabs/deep-copy (1.13.4): Extracting archive
  - Installing phpunit/phpunit (12.5.1): Extracting archive
2 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
66 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^12.5 for phpunit/phpunit
robdaviswork@192 code % ddev composer require phpspec/prophecy-phpunit
./composer.json has been updated
Running composer update phpspec/prophecy-phpunit
Loading composer repositories with package information
Updating dependencies
Lock file operations: 8 installs, 0 updates, 0 removals
  - Locking doctrine/instantiator (2.0.0)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.6.5)
  - Locking phpdocumentor/type-resolver (1.12.0)
  - Locking phpspec/prophecy (v1.24.0)
  - Locking phpspec/prophecy-phpunit (v2.4.0)
  - Locking phpstan/phpdoc-parser (2.3.0)
  - Locking webmozart/assert (1.12.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 8 installs, 0 updates, 0 removals
  - Downloading phpdocumentor/type-resolver (1.12.0)
  - Downloading phpdocumentor/reflection-docblock (5.6.5)
  - Downloading phpspec/prophecy (v1.24.0)
  - Installing doctrine/instantiator (2.0.0): Extracting archive
  - Installing webmozart/assert (1.12.1): Extracting archive
  - Installing phpstan/phpdoc-parser (2.3.0): Extracting archive
  - Installing phpdocumentor/reflection-common (2.2.0): Extracting archive
  - Installing phpdocumentor/type-resolver (1.12.0): Extracting archive
  - Installing phpdocumentor/reflection-docblock (5.6.5): Extracting archive
  - Installing phpspec/prophecy (v1.24.0): Extracting archive
  - Installing phpspec/prophecy-phpunit (v2.4.0): Extracting archive
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
67 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^2.4 for phpspec/prophecy-phpunit
robdaviswork@192 code % ddev composer require symfony/phpunit-bridge
The package you required is recommended to be placed in require-dev (because it is tagged as "testing") but you did not use --dev.
Do you want to re-run the command with --dev? [yes]? yes
./composer.json has been updated
Running composer update symfony/phpunit-bridge
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking symfony/phpunit-bridge (v8.0.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Downloading symfony/phpunit-bridge (v8.0.0)
  - Installing symfony/phpunit-bridge (v8.0.0): Extracting archive
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
68 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^8.0 for symfony/phpunit-bridge
robdaviswork@192 code %    
```