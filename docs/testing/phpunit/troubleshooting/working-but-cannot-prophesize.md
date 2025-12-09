
Tried this first: https://gemini.google.com/share/a81dc572f8d6

This conversation helped me advance: https://gemini.google.com/share/d3420ed0f14f



robdaviswork@192 code % git status
On branch main
Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        new file:   .ddev/addon-metadata/ddev-drupal-contrib/manifest.yaml
        new file:   .ddev/commands/host/core-version
        new file:   .ddev/commands/web/eslint
        new file:   .ddev/commands/web/expand-composer-json
        new file:   .ddev/commands/web/nightwatch
        new file:   .ddev/commands/web/phpcbf
        new file:   .ddev/commands/web/phpcs
        new file:   .ddev/commands/web/phpstan
        new file:   .ddev/commands/web/phpunit
        new file:   .ddev/commands/web/poser
        new file:   .ddev/commands/web/stylelint
        new file:   .ddev/commands/web/symlink-project
        new file:   .ddev/config.contrib.yaml
        new file:   docs/testing/phpunit/ddev-phpunit-setup.txt
        new file:   web/modules/custom/oneyoungworld_assignment/.ddev
        new file:   web/modules/custom/oneyoungworld_assignment/.editorconfig
        new file:   web/modules/custom/oneyoungworld_assignment/.gitattributes
        new file:   web/modules/custom/oneyoungworld_assignment/.gitignore
        new file:   web/modules/custom/oneyoungworld_assignment/.vscode
        new file:   web/modules/custom/oneyoungworld_assignment/composer.json
        new file:   web/modules/custom/oneyoungworld_assignment/composer.lock
        new file:   web/modules/custom/oneyoungworld_assignment/config
        new file:   web/modules/custom/oneyoungworld_assignment/data
        new file:   web/modules/custom/oneyoungworld_assignment/docs
        new file:   web/modules/custom/oneyoungworld_assignment/tools

robdaviswork@192 code % git status
On branch main
Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        new file:   .ddev/addon-metadata/ddev-drupal-contrib/manifest.yaml
        new file:   .ddev/commands/host/core-version
        new file:   .ddev/commands/web/eslint
        new file:   .ddev/commands/web/expand-composer-json
        new file:   .ddev/commands/web/nightwatch
        new file:   .ddev/commands/web/phpcbf
        new file:   .ddev/commands/web/phpcs
        new file:   .ddev/commands/web/phpstan
        new file:   .ddev/commands/web/phpunit
        new file:   .ddev/commands/web/poser
        new file:   .ddev/commands/web/stylelint
        new file:   .ddev/commands/web/symlink-project
        new file:   .ddev/config.contrib.yaml
        new file:   docs/testing/phpunit/ddev-phpunit-setup.txt
        new file:   web/modules/custom/oneyoungworld_assignment/.ddev
        new file:   web/modules/custom/oneyoungworld_assignment/.editorconfig
        new file:   web/modules/custom/oneyoungworld_assignment/.gitattributes
        new file:   web/modules/custom/oneyoungworld_assignment/.gitignore
        new file:   web/modules/custom/oneyoungworld_assignment/.vscode
        new file:   web/modules/custom/oneyoungworld_assignment/composer.json
        new file:   web/modules/custom/oneyoungworld_assignment/composer.lock
        new file:   web/modules/custom/oneyoungworld_assignment/config
        new file:   web/modules/custom/oneyoungworld_assignment/data
        new file:   web/modules/custom/oneyoungworld_assignment/docs
        new file:   web/modules/custom/oneyoungworld_assignment/tools

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        docs/troubleshooting-general/

robdaviswork@192 code % git add .
robdaviswork@192 code % git commit -am "setting up ddev phpunit in the hope that I can run PHPUnit from there..."
[main f5008f5] setting up ddev phpunit in the hope that I can run PHPUnit from there...
warning: unable to access 'web/modules/custom/oneyoungworld_assignment/.gitattributes': Too many levels of symbolic links
warning: unable to access 'web/modules/custom/oneyoungworld_assignment/.gitattributes': Too many levels of symbolic links
 26 files changed, 713 insertions(+)
 create mode 100644 .ddev/addon-metadata/ddev-drupal-contrib/manifest.yaml
 create mode 100755 .ddev/commands/host/core-version
 create mode 100755 .ddev/commands/web/eslint
 create mode 100755 .ddev/commands/web/expand-composer-json
 create mode 100755 .ddev/commands/web/nightwatch
 create mode 100755 .ddev/commands/web/phpcbf
 create mode 100755 .ddev/commands/web/phpcs
 create mode 100755 .ddev/commands/web/phpstan
 create mode 100755 .ddev/commands/web/phpunit
 create mode 100755 .ddev/commands/web/poser
 create mode 100755 .ddev/commands/web/stylelint
 create mode 100755 .ddev/commands/web/symlink-project
 create mode 100644 .ddev/config.contrib.yaml
 create mode 100644 docs/testing/phpunit/ddev-phpunit-setup.txt
 create mode 100644 docs/troubleshooting-general/1-to-do/gitignore-error.md
 create mode 120000 web/modules/custom/oneyoungworld_assignment/.ddev
 create mode 120000 web/modules/custom/oneyoungworld_assignment/.editorconfig
 create mode 120000 web/modules/custom/oneyoungworld_assignment/.gitattributes
 create mode 120000 web/modules/custom/oneyoungworld_assignment/.gitignore
 create mode 120000 web/modules/custom/oneyoungworld_assignment/.vscode
 create mode 120000 web/modules/custom/oneyoungworld_assignment/composer.json
 create mode 120000 web/modules/custom/oneyoungworld_assignment/composer.lock
 create mode 120000 web/modules/custom/oneyoungworld_assignment/config
 create mode 120000 web/modules/custom/oneyoungworld_assignment/data
 create mode 120000 web/modules/custom/oneyoungworld_assignment/docs
 create mode 120000 web/modules/custom/oneyoungworld_assignment/tools
robdaviswork@192 code % git push origin main
warning: unable to access 'web/modules/custom/oneyoungworld_assignment/.gitattributes': Too many levels of symbolic links
Enumerating objects: 51, done.
Counting objects: 100% (51/51), done.
Delta compression using up to 8 threads
Compressing objects: 100% (27/27), done.
Writing objects: 100% (43/43), 11.14 KiB | 3.71 MiB/s, done.
Total 43 (delta 8), reused 0 (delta 0), pack-reused 0 (from 0)
remote: warning: object ef13b7879e3a9e3f2e025868eaef86b74414a789: gitattributesSymlink: .gitattributes is a symlink
remote: warning: object ef13b7879e3a9e3f2e025868eaef86b74414a789: gitignoreSymlink: .gitignore is a symlink
remote: Resolving deltas: 100% (8/8), completed with 4 local objects.
To github.com:therobyouknow/oneyoungworld-assignment.git
   19c4dd3..f5008f5  main -> main
robdaviswork@192 code % ddev phpunit --filter 'OywRestClientTest*'
PHP Warning:  Class "Drupal\TestTools\PhpUnitCompatibility\PhpUnit12\TestCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php on line 12

Warning: Class "Drupal\TestTools\PhpUnitCompatibility\PhpUnit12\TestCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php on line 12
PHP Fatal error:  During class fetch: Uncaught RuntimeException: The autoloader expected class "Drupal\Tests\PhpUnitCompatibilityTrait" to be defined in file "/var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php". The file was found but the class was not in it, the class name or namespace probably has a typo. in /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php:360
Stack trace:
#0 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(317): Symfony\Component\ErrorHandler\DebugClassLoader->checkClass()
#1 /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php(36): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#2 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(306): include('...')
#3 /var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php(17): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#4 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(116): require_once('...')
#5 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(49): PHPUnit\Runner\TestSuiteLoader->loadSuiteClassFile()
#6 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(237): PHPUnit\Runner\TestSuiteLoader->load()
#7 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(258): PHPUnit\Framework\TestSuite->addTestFile()
#8 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(113): PHPUnit\Framework\TestSuite->addTestFiles()
#9 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(58): PHPUnit\TextUI\Configuration\TestSuiteBuilder->testSuiteFromPath()
#10 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(389): PHPUnit\TextUI\Configuration\TestSuiteBuilder->build()
#11 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(196): PHPUnit\TextUI\Application->buildTestSuite()
#12 /var/www/html/vendor/phpunit/phpunit/phpunit(104): PHPUnit\TextUI\Application->run()
#13 /var/www/html/vendor/bin/phpunit(122): include('...')
#14 {main} in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36

Fatal error: During class fetch: Uncaught RuntimeException: The autoloader expected class "Drupal\Tests\PhpUnitCompatibilityTrait" to be defined in file "/var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php". The file was found but the class was not in it, the class name or namespace probably has a typo. in /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php:360
Stack trace:
#0 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(317): Symfony\Component\ErrorHandler\DebugClassLoader->checkClass()
#1 /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php(36): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#2 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(306): include('...')
#3 /var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php(17): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#4 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(116): require_once('...')
#5 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(49): PHPUnit\Runner\TestSuiteLoader->loadSuiteClassFile()
#6 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(237): PHPUnit\Runner\TestSuiteLoader->load()
#7 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(258): PHPUnit\Framework\TestSuite->addTestFile()
#8 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(113): PHPUnit\Framework\TestSuite->addTestFiles()
#9 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(58): PHPUnit\TextUI\Configuration\TestSuiteBuilder->testSuiteFromPath()
#10 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(389): PHPUnit\TextUI\Configuration\TestSuiteBuilder->build()
#11 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(196): PHPUnit\TextUI\Application->buildTestSuite()
#12 /var/www/html/vendor/phpunit/phpunit/phpunit(104): PHPUnit\TextUI\Application->run()
#13 /var/www/html/vendor/bin/phpunit(122): include('...')
#14 {main} in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36
Failed to run phpunit --filter OywRestClientTest*: exit status 255
robdaviswork@192 code % ddev restart
Restarting project oneyoungworld-assignment... 
 Container ddev-oneyoungworld-assignment-db  Stopped 
 Container ddev-oneyoungworld-assignment-web  Stopped 
 Container ddev-oneyoungworld-assignment-web  Stopped 
 Container ddev-oneyoungworld-assignment-db  Stopped 
 Container ddev-oneyoungworld-assignment-db  Removed 
 Container ddev-oneyoungworld-assignment-web  Removed 
 Network ddev-oneyoungworld-assignment_default  Removed 
Using custom config.*.yaml configuration: 
  - /Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code/.ddev/config.contrib.yaml
 
Custom configuration is updated on restart.
If you don't see your custom configuration taking effect, run 'ddev restart'. 
Building project images.......
Project images built in 4s. 
 Network ddev-oneyoungworld-assignment_default  Created 
 Container ddev-oneyoungworld-assignment-db  Created 
 Container ddev-oneyoungworld-assignment-web  Created 
 Container ddev-oneyoungworld-assignment-db  Started 
 Container ddev-oneyoungworld-assignment-web  Started 
Starting Mutagen sync process...
Mutagen sync flush completed in 1s.
For details on sync status 'ddev mutagen st oneyoungworld-assignment -l' 
Waiting for containers to become ready: [web db] 
Starting ddev-router if necessary... 
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100  4069  100  4069    0     0  11391      0 --:--:-- --:--:-- --:--:-- 11397
************************************************************************************************************************
WARNING: The list of project files and folders has been derived here, because the environment variable PROJECT_FILES is empty.
Array
(
    [2] => .ddev
    [3] => .editorconfig
    [5] => .gitattributes
    [6] => .gitignore
    [7] => .vscode
    [8] => composer.json
    [9] => composer.lock
    [10] => config
    [11] => data
    [12] => docs
    [15] => tools
)

This may not be accurate and to avoid this warning, at the start of your customized composer script execute the following command:

export PROJECT_FILES=$(ls -A)

See change record https://www.drupal.org/node/3500320 for more details
************************************************************************************************************************

Creating symlinks in web/modules/custom/oneyoungworld_assignment/ pointing back to /var/www/html/ for the following files and folders:
.ddev
.editorconfig
.gitattributes
.gitignore
.vscode
composer.json
composer.lock
config
data
docs
tools
Restarted oneyoungworld-assignment 
Your project can be reached at https://oneyoungworld-assignment.ddev.site
See 'ddev describe' for alternate URLs. 
robdaviswork@192 code % ddev phpunit --filter 'OywRestClientTest*'
PHP Warning:  Class "Drupal\TestTools\PhpUnitCompatibility\PhpUnit12\TestCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php on line 12

Warning: Class "Drupal\TestTools\PhpUnitCompatibility\PhpUnit12\TestCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php on line 12
PHP Fatal error:  During class fetch: Uncaught RuntimeException: The autoloader expected class "Drupal\Tests\PhpUnitCompatibilityTrait" to be defined in file "/var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php". The file was found but the class was not in it, the class name or namespace probably has a typo. in /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php:360
Stack trace:
#0 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(317): Symfony\Component\ErrorHandler\DebugClassLoader->checkClass()
#1 /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php(36): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#2 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(306): include('...')
#3 /var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php(17): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#4 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(116): require_once('...')
#5 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(49): PHPUnit\Runner\TestSuiteLoader->loadSuiteClassFile()
#6 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(237): PHPUnit\Runner\TestSuiteLoader->load()
#7 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(258): PHPUnit\Framework\TestSuite->addTestFile()
#8 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(113): PHPUnit\Framework\TestSuite->addTestFiles()
#9 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(58): PHPUnit\TextUI\Configuration\TestSuiteBuilder->testSuiteFromPath()
#10 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(389): PHPUnit\TextUI\Configuration\TestSuiteBuilder->build()
#11 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(196): PHPUnit\TextUI\Application->buildTestSuite()
#12 /var/www/html/vendor/phpunit/phpunit/phpunit(104): PHPUnit\TextUI\Application->run()
#13 /var/www/html/vendor/bin/phpunit(122): include('...')
#14 {main} in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36

Fatal error: During class fetch: Uncaught RuntimeException: The autoloader expected class "Drupal\Tests\PhpUnitCompatibilityTrait" to be defined in file "/var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php". The file was found but the class was not in it, the class name or namespace probably has a typo. in /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php:360
Stack trace:
#0 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(317): Symfony\Component\ErrorHandler\DebugClassLoader->checkClass()
#1 /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php(36): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#2 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(306): include('...')
#3 /var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php(17): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#4 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(116): require_once('...')
#5 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(49): PHPUnit\Runner\TestSuiteLoader->loadSuiteClassFile()
#6 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(237): PHPUnit\Runner\TestSuiteLoader->load()
#7 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(258): PHPUnit\Framework\TestSuite->addTestFile()
#8 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(113): PHPUnit\Framework\TestSuite->addTestFiles()
#9 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(58): PHPUnit\TextUI\Configuration\TestSuiteBuilder->testSuiteFromPath()
#10 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(389): PHPUnit\TextUI\Configuration\TestSuiteBuilder->build()
#11 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(196): PHPUnit\TextUI\Application->buildTestSuite()
#12 /var/www/html/vendor/phpunit/phpunit/phpunit(104): PHPUnit\TextUI\Application->run()
#13 /var/www/html/vendor/bin/phpunit(122): include('...')
#14 {main} in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36
Failed to run phpunit --filter OywRestClientTest*: exit status 255
robdaviswork@192 code % ddev restart
Restarting project oneyoungworld-assignment... 
 Container ddev-oneyoungworld-assignment-db  Stopped 
 Container ddev-oneyoungworld-assignment-web  Stopped 
 Container ddev-oneyoungworld-assignment-web  Stopped 
 Container ddev-oneyoungworld-assignment-db  Stopped 
 Container ddev-oneyoungworld-assignment-db  Removed 
 Container ddev-oneyoungworld-assignment-web  Removed 
 Network ddev-oneyoungworld-assignment_default  Removed 
Using custom config.*.yaml configuration: 
  - /Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code/.ddev/config.contrib.yaml
 
Custom configuration is updated on restart.
If you don't see your custom configuration taking effect, run 'ddev restart'. 
Building project images....
Project images built in 1s. 
 Network ddev-oneyoungworld-assignment_default  Created 
 Container ddev-oneyoungworld-assignment-web  Created 
 Container ddev-oneyoungworld-assignment-db  Created 
 Container ddev-oneyoungworld-assignment-db  Started 
 Container ddev-oneyoungworld-assignment-web  Started 
Starting Mutagen sync process...
Mutagen sync flush completed in 2s.
For details on sync status 'ddev mutagen st oneyoungworld-assignment -l' 
Waiting for containers to become ready: [web db] 
Starting ddev-router if necessary... 
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100  4069  100  4069    0     0  83688      0 --:--:-- --:--:-- --:--:-- 84770
************************************************************************************************************************
WARNING: The list of project files and folders has been derived here, because the environment variable PROJECT_FILES is empty.
Array
(
    [2] => .ddev
    [3] => .editorconfig
    [5] => .gitattributes
    [6] => .gitignore
    [7] => .vscode
    [8] => composer.json
    [9] => composer.lock
    [10] => config
    [11] => data
    [12] => docs
    [15] => tools
)

This may not be accurate and to avoid this warning, at the start of your customized composer script execute the following command:

export PROJECT_FILES=$(ls -A)

See change record https://www.drupal.org/node/3500320 for more details
************************************************************************************************************************

Creating symlinks in web/modules/custom/oneyoungworld_assignment/ pointing back to /var/www/html/ for the following files and folders:
.ddev
.editorconfig
.gitattributes
.gitignore
.vscode
composer.json
composer.lock
config
data
docs
tools
Restarted oneyoungworld-assignment 
Your project can be reached at https://oneyoungworld-assignment.ddev.site
See 'ddev describe' for alternate URLs. 
robdaviswork@192 code % ddev composer require --dev phpunit/phpunit
The "cweagans/composer-patches" plugin was not loaded as it is not listed in allow-plugins and is not required by the root package anymore.
./composer.json has been updated
The "cweagans/composer-patches" plugin was not loaded as it is not listed in allow-plugins and is not required by the root package anymore.
Running composer update phpunit/phpunit
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 0 installs, 31 updates, 2 removals
  - Removing php-parallel-lint/php-parallel-lint (v1.4.0)
  - Removing cweagans/composer-patches (1.7.3)
  - Downgrading drupal/core-composer-scaffold (11.2.9 => 11.2.8): Extracting archive
  - Downgrading drupal/core-project-message (11.2.9 => 11.2.8): Extracting archive
  - Downgrading drupal/core-recipe-unpack (11.2.9 => 11.2.8): Extracting archive
  - Upgrading symfony/polyfill-php84 (v1.32.0 => v1.33.0): Extracting archive
  - Upgrading symfony/polyfill-iconv (v1.32.0 => v1.33.0): Extracting archive
  - Upgrading symfony/polyfill-mbstring (v1.32.0 => v1.33.0): Extracting archive
  - Upgrading symfony/polyfill-intl-normalizer (v1.32.0 => v1.33.0): Extracting archive
  - Upgrading symfony/polyfill-intl-grapheme (v1.32.0 => v1.33.0): Extracting archive
  - Upgrading symfony/polyfill-ctype (v1.32.0 => v1.33.0): Extracting archive
  - Downgrading symfony/string (v7.3.8 => v7.3.4): Extracting archive
  - Downgrading symfony/console (v7.3.8 => v7.3.6): Extracting archive
  - Downgrading symfony/yaml (v7.3.8 => v7.3.5): Extracting archive
  - Downgrading symfony/validator (v7.3.8 => v7.3.7): Extracting archive
  - Downgrading symfony/serializer (v7.3.8 => v7.3.5): Extracting archive
  - Downgrading symfony/routing (v7.3.8 => v7.3.6): Extracting archive
  - Downgrading symfony/http-foundation (v7.3.8 => v7.3.7): Extracting archive
  - Downgrading symfony/psr-http-message-bridge (v7.3.8 => v7.3.0): Extracting archive
  - Upgrading symfony/polyfill-intl-idn (v1.32.0 => v1.33.0): Extracting archive
  - Downgrading symfony/mime (v7.3.8 => v7.3.4): Extracting archive
  - Downgrading symfony/http-kernel (v7.3.8 => v7.3.7): Extracting archive
  - Downgrading symfony/filesystem (v7.3.8 => v7.3.6): Extracting archive
  - Downgrading symfony/dependency-injection (v7.3.8 => v7.3.6): Extracting archive
  - Downgrading revolt/event-loop (v1.0.8 => v1.0.7): Extracting archive
  - Downgrading php-tuf/composer-stager (v2.0.2 => v2.0.1): Extracting archive
  - Downgrading drupal/core (11.2.9 => 11.2.8): Extracting archive
  - Downgrading drupal/core-recommended (11.2.9 => 11.2.8)
  - Downgrading nikic/php-parser (v5.7.0 => v5.6.2): Extracting archive
  - Downgrading psy/psysh (v0.12.16 => v0.12.15): Extracting archive
  - Downgrading theseer/tokenizer (2.0.1 => 1.3.1): Extracting archive
  - Downgrading phpunit/php-code-coverage (12.5.1 => 12.5.0): Extracting archive
  - Downgrading phpunit/phpunit (12.5.2 => 12.5.1): Extracting archive
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
69 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^12.5 for phpunit/phpunit
robdaviswork@192 code % rm web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php
robdaviswork@192 code % ddev composer dump-autoload
Generating autoload files
Generated autoload files
robdaviswork@192 code % ddev phpunit --filter 'OywRestClientTest*'                  
PHP Fatal error:  Trait "Drupal\Tests\PhpUnitCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36

Fatal error: Trait "Drupal\Tests\PhpUnitCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36
Failed to run phpunit --filter OywRestClientTest*: exit status 255
robdaviswork@192 code % ddev phpunit --version
PHPUnit 12.5.1 by Sebastian Bergmann and contributors.

robdaviswork@192 code % ddev composer install
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Nothing to install, update or remove
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
69 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
  * Homepage: https://www.drupal.org/project/drupal
  * Support:
    * docs: https://www.drupal.org/docs/user_guide/en/index.html
    * chat: https://www.drupal.org/node/314178
robdaviswork@192 code % rm -Rf vendor
robdaviswork@192 code % rm -Rf composer.lock 
robdaviswork@192 code % ddev composer install
No composer.lock file present. Updating dependencies to latest instead of installing from lock file. See https://getcomposer.org/install for more information.
Loading composer repositories with package information
Updating dependencies
Lock file operations: 130 installs, 0 updates, 0 removals
  - Locking asm89/stack-cors (v2.3.0)
  - Locking behat/mink (v1.13.0)
  - Locking chi-teck/drupal-code-generator (4.2.0)
  - Locking commerceguys/addressing (v2.2.4)
  - Locking composer/installers (v2.3.0)
  - Locking composer/semver (3.4.4)
  - Locking consolidation/annotated-command (4.10.4)
  - Locking consolidation/config (3.2.0)
  - Locking consolidation/filter-via-dot-access-data (2.0.3)
  - Locking consolidation/log (3.1.1)
  - Locking consolidation/output-formatters (4.7.0)
  - Locking consolidation/robo (5.1.1)
  - Locking consolidation/site-alias (4.1.2)
  - Locking consolidation/site-process (5.4.2)
  - Locking dflydev/dot-access-data (v3.0.3)
  - Locking doctrine/annotations (2.0.2)
  - Locking doctrine/collections (2.4.0)
  - Locking doctrine/deprecations (1.1.5)
  - Locking doctrine/instantiator (2.0.0)
  - Locking doctrine/lexer (2.1.1)
  - Locking drupal/address (2.0.4)
  - Locking drupal/core (11.2.9)
  - Locking drupal/core-composer-scaffold (11.2.9)
  - Locking drupal/core-dev (8.0.0-beta15)
  - Locking drupal/core-project-message (11.2.9)
  - Locking drupal/core-recipe-unpack (11.2.9)
  - Locking drupal/core-recommended (11.2.9)
  - Locking drupal/dynamic_entity_reference (3.2.1)
  - Locking drupal/key (1.20.0)
  - Locking drupal/salesforce (5.1.2)
  - Locking drupal/typed_data (2.1.1)
  - Locking drush/drush (13.7.0)
  - Locking egulias/email-validator (4.0.4)
  - Locking firebase/php-jwt (v6.11.1)
  - Locking grasmash/expander (3.0.1)
  - Locking grasmash/yaml-cli (3.2.1)
  - Locking guzzlehttp/guzzle (7.9.3)
  - Locking guzzlehttp/promises (2.2.0)
  - Locking guzzlehttp/psr7 (2.7.1)
  - Locking laravel/prompts (v0.3.8)
  - Locking league/container (4.2.5)
  - Locking lusitanian/oauth (v0.8.11)
  - Locking masterminds/html5 (2.9.0)
  - Locking mck89/peast (v1.17.4)
  - Locking messageagency/force.com-toolkit-for-php (1.0.2)
  - Locking myclabs/deep-copy (1.13.4)
  - Locking nikic/php-parser (v5.7.0)
  - Locking pear/archive_tar (1.5.0)
  - Locking pear/console_getopt (v1.4.3)
  - Locking pear/pear-core-minimal (v1.10.16)
  - Locking pear/pear_exception (v1.0.2)
  - Locking phar-io/manifest (2.0.4)
  - Locking phar-io/version (3.2.1)
  - Locking phootwork/collection (v3.2.3)
  - Locking phootwork/lang (v3.2.3)
  - Locking php-tuf/composer-stager (v2.0.2)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.6.5)
  - Locking phpdocumentor/type-resolver (1.12.0)
  - Locking phpowermove/docblock (v4.0)
  - Locking phpspec/prophecy (v1.24.0)
  - Locking phpspec/prophecy-phpunit (v2.4.0)
  - Locking phpstan/phpdoc-parser (2.3.0)
  - Locking phpunit/php-code-coverage (12.5.1)
  - Locking phpunit/php-file-iterator (6.0.0)
  - Locking phpunit/php-invoker (6.0.0)
  - Locking phpunit/php-text-template (5.0.0)
  - Locking phpunit/php-timer (8.0.0)
  - Locking phpunit/phpunit (12.5.2)
  - Locking psr/cache (3.0.0)
  - Locking psr/container (2.0.2)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.3)
  - Locking psr/http-factory (1.1.0)
  - Locking psr/http-message (2.0)
  - Locking psr/log (3.0.2)
  - Locking psy/psysh (v0.12.16)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking revolt/event-loop (v1.0.8)
  - Locking sebastian/cli-parser (4.2.0)
  - Locking sebastian/comparator (7.1.3)
  - Locking sebastian/complexity (5.0.0)
  - Locking sebastian/diff (7.0.0)
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
  - Locking symfony/console (v7.3.8)
  - Locking symfony/css-selector (v7.4.0)
  - Locking symfony/dependency-injection (v7.3.8)
  - Locking symfony/deprecation-contracts (v3.6.0)
  - Locking symfony/error-handler (v7.3.6)
  - Locking symfony/event-dispatcher (v7.3.3)
  - Locking symfony/event-dispatcher-contracts (v3.6.0)
  - Locking symfony/filesystem (v7.3.8)
  - Locking symfony/finder (v7.3.5)
  - Locking symfony/http-foundation (v7.3.8)
  - Locking symfony/http-kernel (v7.3.8)
  - Locking symfony/mailer (v7.3.5)
  - Locking symfony/mime (v7.3.8)
  - Locking symfony/phpunit-bridge (v8.0.0)
  - Locking symfony/polyfill-ctype (v1.32.0)
  - Locking symfony/polyfill-iconv (v1.32.0)
  - Locking symfony/polyfill-intl-grapheme (v1.32.0)
  - Locking symfony/polyfill-intl-idn (v1.32.0)
  - Locking symfony/polyfill-intl-normalizer (v1.32.0)
  - Locking symfony/polyfill-mbstring (v1.32.0)
  - Locking symfony/polyfill-php81 (v1.33.0)
  - Locking symfony/polyfill-php83 (v1.33.0)
  - Locking symfony/polyfill-php84 (v1.32.0)
  - Locking symfony/process (v7.3.4)
  - Locking symfony/psr-http-message-bridge (v7.3.8)
  - Locking symfony/routing (v7.3.8)
  - Locking symfony/serializer (v7.3.8)
  - Locking symfony/service-contracts (v3.6.1)
  - Locking symfony/string (v7.3.8)
  - Locking symfony/translation-contracts (v3.6.1)
  - Locking symfony/validator (v7.3.8)
  - Locking symfony/var-dumper (v7.3.5)
  - Locking symfony/var-exporter (v7.3.4)
  - Locking symfony/yaml (v7.3.8)
  - Locking theseer/tokenizer (2.0.1)
  - Locking twig/twig (v3.21.1)
  - Locking webmozart/assert (1.12.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 130 installs, 0 updates, 0 removals
  - Installing composer/installers (v2.3.0): Extracting archive
  - Installing drupal/core-composer-scaffold (11.2.9): Extracting archive
  - Installing drupal/core-project-message (11.2.9): Extracting archive
  - Installing drupal/core-recipe-unpack (11.2.9): Extracting archive
  - Installing symfony/css-selector (v7.4.0): Extracting archive
  - Installing behat/mink (v1.13.0): Extracting archive
  - Installing symfony/polyfill-php84 (v1.32.0): Extracting archive
  - Installing doctrine/deprecations (1.1.5): Extracting archive
  - Installing doctrine/collections (2.4.0): Extracting archive
  - Installing commerceguys/addressing (v2.2.4): Extracting archive
  - Installing symfony/polyfill-iconv (v1.32.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.32.0): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.32.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.32.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.32.0): Extracting archive
  - Installing symfony/string (v7.3.8): Extracting archive
  - Installing symfony/deprecation-contracts (v3.6.0): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing symfony/service-contracts (v3.6.1): Extracting archive
  - Installing symfony/console (v7.3.8): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing consolidation/log (3.1.1): Extracting archive
  - Installing doctrine/instantiator (2.0.0): Extracting archive
  - Installing drupal/core-dev (8.0.0-beta15)
  - Installing twig/twig (v3.21.1): Extracting archive
  - Installing symfony/yaml (v7.3.8): Extracting archive
  - Installing symfony/var-exporter (v7.3.4): Extracting archive
  - Installing symfony/var-dumper (v7.3.5): Extracting archive
  - Installing symfony/translation-contracts (v3.6.1): Extracting archive
  - Installing symfony/polyfill-php83 (v1.33.0): Extracting archive
  - Installing symfony/validator (v7.3.8): Extracting archive
  - Installing symfony/serializer (v7.3.8): Extracting archive
  - Installing symfony/routing (v7.3.8): Extracting archive
  - Installing symfony/http-foundation (v7.3.8): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing symfony/psr-http-message-bridge (v7.3.8): Extracting archive
  - Installing symfony/process (v7.3.4): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.32.0): Extracting archive
  - Installing symfony/mime (v7.3.8): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.6.0): Extracting archive
  - Installing symfony/event-dispatcher (v7.3.3): Extracting archive
  - Installing doctrine/lexer (2.1.1): Extracting archive
  - Installing egulias/email-validator (4.0.4): Extracting archive
  - Installing symfony/mailer (v7.3.5): Extracting archive
  - Installing symfony/error-handler (v7.3.6): Extracting archive
  - Installing symfony/http-kernel (v7.3.8): Extracting archive
  - Installing symfony/finder (v7.3.5): Extracting archive
  - Installing symfony/filesystem (v7.3.8): Extracting archive
  - Installing symfony/dependency-injection (v7.3.8): Extracting archive
  - Installing revolt/event-loop (v1.0.8): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.1.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing psr/cache (3.0.0): Extracting archive
  - Installing php-tuf/composer-stager (v2.0.2): Extracting archive
  - Installing pear/pear_exception (v1.0.2): Extracting archive
  - Installing pear/console_getopt (v1.4.3): Extracting archive
  - Installing pear/pear-core-minimal (v1.10.16): Extracting archive
  - Installing pear/archive_tar (1.5.0): Extracting archive
  - Installing mck89/peast (v1.17.4): Extracting archive
  - Installing masterminds/html5 (2.9.0): Extracting archive
  - Installing guzzlehttp/psr7 (2.7.1): Extracting archive
  - Installing guzzlehttp/promises (2.2.0): Extracting archive
  - Installing guzzlehttp/guzzle (7.9.3): Extracting archive
  - Installing sebastian/diff (7.0.0): Extracting archive
  - Installing doctrine/annotations (2.0.2): Extracting archive
  - Installing composer/semver (3.4.4): Extracting archive
  - Installing asm89/stack-cors (v2.3.0): Extracting archive
  - Installing drupal/core (11.2.9): Extracting archive
  - Installing drupal/core-recommended (11.2.9)
  - Installing messageagency/force.com-toolkit-for-php (1.0.2): Extracting archive
  - Installing lusitanian/oauth (v0.8.11): Extracting archive
  - Installing firebase/php-jwt (v6.11.1): Extracting archive
  - Installing drupal/typed_data (2.1.1): Extracting archive
  - Installing drupal/key (1.20.0): Extracting archive
  - Installing drupal/dynamic_entity_reference (3.2.1): Extracting archive
  - Installing drupal/address (2.0.4): Extracting archive
  - Installing dflydev/dot-access-data (v3.0.3): Extracting archive
  - Installing consolidation/output-formatters (4.7.0): Extracting archive
  - Installing drupal/salesforce (5.1.2): Extracting archive
  - Installing nikic/php-parser (v5.7.0): Extracting archive
  - Installing psy/psysh (v0.12.16): Extracting archive
  - Installing league/container (4.2.5): Extracting archive
  - Installing laravel/prompts (v0.3.8): Extracting archive
  - Installing grasmash/yaml-cli (3.2.1): Extracting archive
  - Installing grasmash/expander (3.0.1): Extracting archive
  - Installing consolidation/config (3.2.0): Extracting archive
  - Installing consolidation/site-alias (4.1.2): Extracting archive
  - Installing consolidation/site-process (5.4.2): Extracting archive
  - Installing symfony/polyfill-php81 (v1.33.0): Extracting archive
  - Installing phootwork/lang (v3.2.3): Extracting archive
  - Installing phootwork/collection (v3.2.3): Extracting archive
  - Installing phpowermove/docblock (v4.0): Extracting archive
  - Installing consolidation/annotated-command (4.10.4): Extracting archive
  - Installing consolidation/robo (5.1.1): Extracting archive
  - Installing consolidation/filter-via-dot-access-data (2.0.3): Extracting archive
  - Installing chi-teck/drupal-code-generator (4.2.0): Extracting archive
  - Installing drush/drush (13.7.0): Extracting archive
  - Installing webmozart/assert (1.12.1): Extracting archive
  - Installing phpstan/phpdoc-parser (2.3.0): Extracting archive
  - Installing phpdocumentor/reflection-common (2.2.0): Extracting archive
  - Installing phpdocumentor/type-resolver (1.12.0): Extracting archive
  - Installing phpdocumentor/reflection-docblock (5.6.5): Extracting archive
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
  - Installing theseer/tokenizer (2.0.1): Extracting archive
  - Installing sebastian/lines-of-code (4.0.0): Extracting archive
  - Installing sebastian/complexity (5.0.0): Extracting archive
  - Installing phpunit/php-code-coverage (12.5.1): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.4): Extracting archive
  - Installing myclabs/deep-copy (1.13.4): Extracting archive
  - Installing phpunit/phpunit (12.5.2): Extracting archive
  - Installing phpspec/prophecy (v1.24.0): Extracting archive
  - Installing phpspec/prophecy-phpunit (v2.4.0): Extracting archive
  - Installing symfony/phpunit-bridge (v8.0.0): Extracting archive
16 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
69 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
robdaviswork@192 code % ddev phpunit --filter 'OywRestClientTest*'
PHP Warning:  Class "Drupal\TestTools\PhpUnitCompatibility\PhpUnit12\TestCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php on line 12

Warning: Class "Drupal\TestTools\PhpUnitCompatibility\PhpUnit12\TestCompatibilityTrait" not found in /var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php on line 12
PHP Fatal error:  During class fetch: Uncaught RuntimeException: The autoloader expected class "Drupal\Tests\PhpUnitCompatibilityTrait" to be defined in file "/var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php". The file was found but the class was not in it, the class name or namespace probably has a typo. in /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php:360
Stack trace:
#0 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(317): Symfony\Component\ErrorHandler\DebugClassLoader->checkClass()
#1 /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php(36): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#2 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(306): include('...')
#3 /var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php(17): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#4 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(116): require_once('...')
#5 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(49): PHPUnit\Runner\TestSuiteLoader->loadSuiteClassFile()
#6 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(237): PHPUnit\Runner\TestSuiteLoader->load()
#7 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(258): PHPUnit\Framework\TestSuite->addTestFile()
#8 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(113): PHPUnit\Framework\TestSuite->addTestFiles()
#9 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(58): PHPUnit\TextUI\Configuration\TestSuiteBuilder->testSuiteFromPath()
#10 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(389): PHPUnit\TextUI\Configuration\TestSuiteBuilder->build()
#11 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(196): PHPUnit\TextUI\Application->buildTestSuite()
#12 /var/www/html/vendor/phpunit/phpunit/phpunit(104): PHPUnit\TextUI\Application->run()
#13 /var/www/html/vendor/bin/phpunit(122): include('...')
#14 {main} in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36

Fatal error: During class fetch: Uncaught RuntimeException: The autoloader expected class "Drupal\Tests\PhpUnitCompatibilityTrait" to be defined in file "/var/www/html/web/core/tests/Drupal/Tests/PhpUnitCompatibilityTrait.php". The file was found but the class was not in it, the class name or namespace probably has a typo. in /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php:360
Stack trace:
#0 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(317): Symfony\Component\ErrorHandler\DebugClassLoader->checkClass()
#1 /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php(36): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#2 /var/www/html/vendor/symfony/error-handler/DebugClassLoader.php(306): include('...')
#3 /var/www/html/web/modules/custom/oyw_salesforce/tests/src/Unit/OywRestClientTest.php(17): Symfony\Component\ErrorHandler\DebugClassLoader->loadClass()
#4 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(116): require_once('...')
#5 /var/www/html/vendor/phpunit/phpunit/src/Runner/TestSuiteLoader.php(49): PHPUnit\Runner\TestSuiteLoader->loadSuiteClassFile()
#6 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(237): PHPUnit\Runner\TestSuiteLoader->load()
#7 /var/www/html/vendor/phpunit/phpunit/src/Framework/TestSuite.php(258): PHPUnit\Framework\TestSuite->addTestFile()
#8 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(113): PHPUnit\Framework\TestSuite->addTestFiles()
#9 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Configuration/TestSuiteBuilder.php(58): PHPUnit\TextUI\Configuration\TestSuiteBuilder->testSuiteFromPath()
#10 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(389): PHPUnit\TextUI\Configuration\TestSuiteBuilder->build()
#11 /var/www/html/vendor/phpunit/phpunit/src/TextUI/Application.php(196): PHPUnit\TextUI\Application->buildTestSuite()
#12 /var/www/html/vendor/phpunit/phpunit/phpunit(104): PHPUnit\TextUI\Application->run()
#13 /var/www/html/vendor/bin/phpunit(122): include('...')
#14 {main} in /var/www/html/web/core/tests/Drupal/Tests/UnitTestCase.php on line 36
Failed to run phpunit --filter OywRestClientTest*: exit status 255
robdaviswork@192 code % ddev phpunit --version                    
PHPUnit 12.5.2 by Sebastian Bergmann and contributors.

robdaviswork@192 code % ddev composer remove phpunit/phpunit --dev
./composer.json has been updated
Running composer update phpunit/phpunit
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Writing lock file
Installing dependencies from lock file (including require-dev)
Nothing to install, update or remove
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
69 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Removal failed, phpunit/phpunit is still present, it may be required by another package. See `composer why phpunit/phpunit`.
Composer [remove phpunit/phpunit --dev] failed, composer command failed: exit status 2. stderr=
robdaviswork@192 code % ddev composer require drupal/core-dev --dev --with-all-dependencies
./composer.json has been updated
Running composer update drupal/core-dev --with-all-dependencies
Loading composer repositories with package information
Updating dependencies
Lock file operations: 54 installs, 22 updates, 0 removals
  - Locking behat/mink-browserkit-driver (v2.3.0)
  - Locking brick/math (0.14.1)
  - Locking colinodell/psr-testlogger (v1.3.1)
  - Locking composer/ca-bundle (1.5.10)
  - Locking composer/class-map-generator (1.7.0)
  - Locking composer/composer (2.9.2)
  - Locking composer/metadata-minifier (1.0.0)
  - Locking composer/pcre (3.3.2)
  - Locking composer/spdx-licenses (1.5.9)
  - Locking composer/xdebug-handler (3.0.5)
  - Locking dealerdirect/phpcodesniffer-composer-installer (v1.2.0)
  - Locking drupal/coder (8.3.31)
  - Upgrading drupal/core-composer-scaffold (11.2.9 => 11.3.0-rc1)
  - Upgrading drupal/core-dev (8.0.0-beta15 => 11.2.9)
  - Locking google/protobuf (v4.33.2)
  - Locking justinrainbow/json-schema (6.6.3)
  - Locking lullabot/mink-selenium2-driver (v1.7.4)
  - Locking lullabot/php-webdriver (v2.0.7)
  - Locking marc-mabe/php-enum (v4.7.2)
  - Locking mglaman/phpstan-drupal (2.0.10)
  - Locking micheh/phpcs-gitlab (2.1.0)
  - Locking mikey179/vfsstream (v1.6.12)
  - Locking nyholm/psr7-server (1.1.0)
  - Locking open-telemetry/api (1.7.1)
  - Locking open-telemetry/context (1.4.0)
  - Locking open-telemetry/exporter-otlp (1.3.3)
  - Locking open-telemetry/gen-otlp-protobuf (1.8.0)
  - Locking open-telemetry/sdk (1.10.0)
  - Locking open-telemetry/sem-conv (1.37.0)
  - Locking php-http/discovery (1.20.0)
  - Locking php-http/guzzle7-adapter (1.1.0)
  - Locking php-http/httplug (2.4.1)
  - Locking php-http/promise (1.3.1)
  - Locking phpstan/extension-installer (1.4.3)
  - Locking phpstan/phpstan (2.1.33)
  - Locking phpstan/phpstan-deprecation-rules (2.0.3)
  - Locking phpstan/phpstan-phpunit (2.0.10)
  - Downgrading phpunit/php-code-coverage (12.5.1 => 11.0.11)
  - Downgrading phpunit/php-file-iterator (6.0.0 => 5.1.0)
  - Downgrading phpunit/php-invoker (6.0.0 => 5.0.1)
  - Downgrading phpunit/php-text-template (5.0.0 => 4.0.1)
  - Downgrading phpunit/php-timer (8.0.0 => 7.0.1)
  - Downgrading phpunit/phpunit (12.5.2 => 11.5.46)
  - Locking ramsey/collection (2.1.1)
  - Locking ramsey/uuid (4.9.1)
  - Locking react/promise (v3.3.0)
  - Downgrading sebastian/cli-parser (4.2.0 => 3.0.2)
  - Locking sebastian/code-unit (3.0.3)
  - Locking sebastian/code-unit-reverse-lookup (4.0.1)
  - Downgrading sebastian/comparator (7.1.3 => 6.3.2)
  - Downgrading sebastian/complexity (5.0.0 => 4.0.1)
  - Downgrading sebastian/diff (7.0.0 => 6.0.2)
  - Downgrading sebastian/environment (8.0.3 => 7.2.1)
  - Downgrading sebastian/exporter (7.0.2 => 6.3.2)
  - Downgrading sebastian/global-state (8.0.2 => 7.0.2)
  - Downgrading sebastian/lines-of-code (4.0.0 => 3.0.1)
  - Downgrading sebastian/object-enumerator (7.0.0 => 6.0.1)
  - Downgrading sebastian/object-reflector (5.0.0 => 4.0.1)
  - Downgrading sebastian/recursion-context (7.0.1 => 6.0.3)
  - Downgrading sebastian/type (6.0.3 => 5.1.3)
  - Downgrading sebastian/version (6.0.0 => 5.0.2)
  - Locking seld/jsonlint (1.11.0)
  - Locking seld/phar-utils (1.2.1)
  - Locking seld/signal-handler (2.0.2)
  - Locking sirbrillig/phpcs-variable-analysis (v2.13.0)
  - Locking slevomat/coding-standard (8.22.1)
  - Locking squizlabs/php_codesniffer (3.13.5)
  - Locking symfony/browser-kit (v7.4.0)
  - Locking symfony/dom-crawler (v7.4.1)
  - Locking symfony/lock (v7.4.1)
  - Locking symfony/polyfill-php73 (v1.33.0)
  - Locking symfony/polyfill-php80 (v1.33.0)
  - Locking symfony/polyfill-php82 (v1.33.0)
  - Locking tbachert/spi (v1.0.5)
  - Downgrading theseer/tokenizer (2.0.1 => 1.3.1)
  - Locking webflo/drupal-finder (1.3.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 54 installs, 22 updates, 0 removals
  - Downloading drupal/core-composer-scaffold (11.3.0-rc1)
  - Downloading phpstan/phpstan (2.1.33)
  - Downloading squizlabs/php_codesniffer (3.13.5)
  - Downloading dealerdirect/phpcodesniffer-composer-installer (v1.2.0)
  - Downloading composer/ca-bundle (1.5.10)
  - Downloading composer/class-map-generator (1.7.0)
  - Downloading symfony/lock (v7.4.1)
  - Downloading symfony/dom-crawler (v7.4.1)
  - Downloading symfony/browser-kit (v7.4.0)
  - Downloading phpunit/phpunit (11.5.46)
  - Downloading phpstan/phpstan-phpunit (2.0.10)
  - Downloading brick/math (0.14.1)
  - Downloading open-telemetry/api (1.7.1)
  - Downloading open-telemetry/sdk (1.10.0)
  - Downloading google/protobuf (v4.33.2)
  - Downloading open-telemetry/exporter-otlp (1.3.3)
  - Downloading justinrainbow/json-schema (6.6.3)
  - Downloading composer/composer (2.9.2)
  - Downloading colinodell/psr-testlogger (v1.3.1)
  - Downloading behat/mink-browserkit-driver (v2.3.0)
  - Upgrading drupal/core-composer-scaffold (11.2.9 => 11.3.0-rc1): Extracting archive
  - Installing php-http/discovery (1.20.0): Extracting archive
  - Installing phpstan/phpstan (2.1.33): Extracting archive
  - Installing phpstan/extension-installer (1.4.3): Extracting archive
tbachert/spi contains a Composer plugin which is currently not in your allow-plugins config. See https://getcomposer.org/allow-plugins
Do you trust "tbachert/spi" to execute code and wish to enable it now? (writes "allow-plugins" to composer.json) [y,n,d,?] y
  - Installing tbachert/spi (v1.0.5): Extracting archive
  - Installing squizlabs/php_codesniffer (3.13.5): Extracting archive
  - Installing dealerdirect/phpcodesniffer-composer-installer (v1.2.0): Extracting archive
  - Installing composer/ca-bundle (1.5.10): Extracting archive
  - Installing composer/pcre (3.3.2): Extracting archive
  - Installing composer/class-map-generator (1.7.0): Extracting archive
  - Installing composer/metadata-minifier (1.0.0): Extracting archive
  - Installing composer/spdx-licenses (1.5.9): Extracting archive
  - Installing composer/xdebug-handler (3.0.5): Extracting archive
  - Installing symfony/lock (v7.4.1): Extracting archive
  - Installing symfony/dom-crawler (v7.4.1): Extracting archive
  - Installing symfony/browser-kit (v7.4.0): Extracting archive
  - Downgrading sebastian/version (6.0.0 => 5.0.2): Extracting archive
  - Downgrading sebastian/type (6.0.3 => 5.1.3): Extracting archive
  - Downgrading sebastian/recursion-context (7.0.1 => 6.0.3): Extracting archive
  - Downgrading sebastian/object-reflector (5.0.0 => 4.0.1): Extracting archive
  - Downgrading sebastian/object-enumerator (7.0.0 => 6.0.1): Extracting archive
  - Downgrading sebastian/global-state (8.0.2 => 7.0.2): Extracting archive
  - Downgrading sebastian/exporter (7.0.2 => 6.3.2): Extracting archive
  - Downgrading sebastian/environment (8.0.3 => 7.2.1): Extracting archive
  - Downgrading sebastian/diff (7.0.0 => 6.0.2): Extracting archive
  - Downgrading sebastian/comparator (7.1.3 => 6.3.2): Extracting archive
  - Installing sebastian/code-unit (3.0.3): Extracting archive
  - Downgrading sebastian/cli-parser (4.2.0 => 3.0.2): Extracting archive
  - Downgrading phpunit/php-timer (8.0.0 => 7.0.1): Extracting archive
  - Downgrading phpunit/php-text-template (5.0.0 => 4.0.1): Extracting archive
  - Downgrading phpunit/php-invoker (6.0.0 => 5.0.1): Extracting archive
  - Downgrading phpunit/php-file-iterator (6.0.0 => 5.1.0): Extracting archive
  - Downgrading theseer/tokenizer (2.0.1 => 1.3.1): Extracting archive
  - Downgrading sebastian/lines-of-code (4.0.0 => 3.0.1): Extracting archive
  - Downgrading sebastian/complexity (5.0.0 => 4.0.1): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (4.0.1): Extracting archive
  - Downgrading phpunit/php-code-coverage (12.5.1 => 11.0.11): Extracting archive
  - Downgrading phpunit/phpunit (12.5.2 => 11.5.46): Extracting archive
  - Installing phpstan/phpstan-phpunit (2.0.10): Extracting archive
  - Installing php-http/promise (1.3.1): Extracting archive
  - Installing php-http/httplug (2.4.1): Extracting archive
  - Installing php-http/guzzle7-adapter (1.1.0): Extracting archive
  - Installing symfony/polyfill-php82 (v1.33.0): Extracting archive
  - Installing ramsey/collection (2.1.1): Extracting archive
  - Installing brick/math (0.14.1): Extracting archive
  - Installing ramsey/uuid (4.9.1): Extracting archive
  - Installing open-telemetry/sem-conv (1.37.0): Extracting archive
  - Installing open-telemetry/context (1.4.0): Extracting archive
  - Installing open-telemetry/api (1.7.1): Extracting archive
  - Installing nyholm/psr7-server (1.1.0): Extracting archive
  - Installing open-telemetry/sdk (1.10.0): Extracting archive
  - Installing google/protobuf (v4.33.2): Extracting archive
  - Installing open-telemetry/gen-otlp-protobuf (1.8.0): Extracting archive
  - Installing open-telemetry/exporter-otlp (1.3.3): Extracting archive
  - Installing mikey179/vfsstream (v1.6.12): Extracting archive
  - Installing micheh/phpcs-gitlab (2.1.0): Extracting archive
  - Installing webflo/drupal-finder (1.3.1): Extracting archive
  - Installing phpstan/phpstan-deprecation-rules (2.0.3): Extracting archive
  - Installing mglaman/phpstan-drupal (2.0.10): Extracting archive
  - Installing lullabot/php-webdriver (v2.0.7): Extracting archive
  - Installing lullabot/mink-selenium2-driver (v1.7.4): Extracting archive
  - Installing marc-mabe/php-enum (v4.7.2): Extracting archive
  - Installing justinrainbow/json-schema (6.6.3): Extracting archive
  - Installing slevomat/coding-standard (8.22.1): Extracting archive
  - Installing sirbrillig/phpcs-variable-analysis (v2.13.0): Extracting archive
  - Installing drupal/coder (8.3.31): Extracting archive
  - Installing symfony/polyfill-php80 (v1.33.0): Extracting archive
  - Installing symfony/polyfill-php73 (v1.33.0): Extracting archive
  - Installing seld/signal-handler (2.0.2): Extracting archive
  - Installing seld/phar-utils (1.2.1): Extracting archive
  - Installing seld/jsonlint (1.11.0): Extracting archive
  - Installing react/promise (v3.3.0): Extracting archive
  - Installing composer/composer (2.9.2): Extracting archive
  - Installing colinodell/psr-testlogger (v1.3.1): Extracting archive
  - Installing behat/mink-browserkit-driver (v2.3.0): Extracting archive
  - Upgrading drupal/core-dev (8.0.0-beta15 => 11.2.9)
8 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
94 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
phpstan/extension-installer: Extensions installed
> composer/composer: installed
> composer/pcre: installed
> mglaman/phpstan-drupal: installed
> phpstan/phpstan-deprecation-rules: installed
> phpstan/phpstan-phpunit: installed
PHP CodeSniffer Config installed_paths set to ../../drupal/coder/coder_sniffer,../../sirbrillig/phpcs-variable-analysis,../../slevomat/coding-standard
No security vulnerability advisories found.
Using version ^11.2 for drupal/core-dev
robdaviswork@192 code % ddev composer remove phpunit/phpunit --dev 
phpunit/phpunit is not required in your composer.json and has not been removed
./composer.json has been updated
Running composer update phpunit/phpunit
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Writing lock file
Installing dependencies from lock file (including require-dev)
Nothing to install, update or remove
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
94 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
phpstan/extension-installer: Extensions installed
No security vulnerability advisories found.
Removal failed, phpunit/phpunit is still present, it may be required by another package. See `composer why phpunit/phpunit`.
Composer [remove phpunit/phpunit --dev] failed, composer command failed: exit status 2. stderr=
robdaviswork@192 code % ddev composer require drupal/core-dev --dev --with-all-dependencies
./composer.json has been updated
Running composer update drupal/core-dev --with-all-dependencies
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Writing lock file
Installing dependencies from lock file (including require-dev)
Nothing to install, update or remove
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
94 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
phpstan/extension-installer: Extensions installed
No security vulnerability advisories found.
Using version ^11.2 for drupal/core-dev
robdaviswork@192 code % ddev phpunit --filter 'OywRestClientTest*' 
PHPUnit 11.5.46 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.23

EEE                                                                 3 / 3 (100%)

Time: 00:00.022, Memory: 6.00 MB

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
robdaviswork@192 code % 