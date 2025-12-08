robdaviswork@192 oneyoungworld-assignment % mkdir code
robdaviswork@192 oneyoungworld-assignment % cd code
robdaviswork@192 code % ddev config
Creating a new DDEV project config in the current directory (/Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code) 
Once completed, your configuration will be written to /Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code/.ddev/config.yaml
 
Project name (code): oneyoungworld-assignment

The docroot is the directory from which your site is served.
This is a relative path from your project root at /Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code
 
Leave docroot empty (hit <RETURN>) to use the location shown in parentheses.
Or specify a custom path if your index.php is in a different directory.
Or use '.' (a dot) to explicitly set it to the project root.
 
Docroot Location (project root): web
Created docroot at /Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code/web 
 
Found a php codebase at /Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code/web. 
Project Type [backdrop, cakephp, craftcms, drupal, drupal6, drupal7, drupal8, drupal9, drupal10, drupal11, generic, laravel, magento, magento2, php, shopware6, silverstripe, symfony, typo3, wordpress] (php): drupal11
No settings.php file exists, creating one 
Configuration complete. You may now run 'ddev start'. 
robdaviswork@192 code % ddev composer create-project drupal/recommended-project .
The index.php or index.html does not yet exist at this path:
/Users/robdaviswork/2-work/06-work-search/2-job-applications/1-open/08-interview-prep-or-assignment-work/one-young-world/3-test/code/web/index.*
You may get 403 errors 'permission denied' from the browser until it does.
Ignore if a later action (like `ddev composer create-project`) will create it.

Building project images......
Project images built in 3s.
 Network ddev-oneyoungworld-assignment_default  Created
 Container ddev-oneyoungworld-assignment-web  Created
 Container ddev-oneyoungworld-assignment-db  Created
 Container ddev-oneyoungworld-assignment-web  Started
 Container ddev-oneyoungworld-assignment-db  Started
Starting Mutagen sync process...
Mutagen sync flush completed in 1s.
For details on sync status 'ddev mutagen st oneyoungworld-assignment -l'
Waiting for containers to become ready: [web db]
Starting ddev-router if necessary...
 Container ddev-router  Created
 Container ddev-router  Started
Executing Composer command: [composer create-project --no-plugins --no-scripts --no-install drupal/recommended-project /tmp/vlDPoq]

Creating a "drupal/recommended-project" project at "/tmp/vlDPoq"
Installing drupal/recommended-project (11.2.8)
Plugins have been disabled.
  - Installing drupal/recommended-project (11.2.8): Extracting archive
Created project in /tmp/vlDPoq
Moving install to Composer root
Executing Composer command: [composer install]

Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 64 installs, 0 updates, 0 removals
  - Installing composer/installers (v2.3.0): Extracting archive
  - Installing drupal/core-composer-scaffold (11.2.8): Extracting archive
  - Installing drupal/core-project-message (11.2.8): Extracting archive
  - Installing drupal/core-recipe-unpack (11.2.8): Extracting archive
  - Installing symfony/polyfill-iconv (v1.33.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.33.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.33.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.6.0): Extracting archive
  - Installing twig/twig (v3.21.1): Extracting archive
  - Installing symfony/yaml (v7.3.5): Extracting archive
  - Installing symfony/var-exporter (v7.3.4): Extracting archive
  - Installing symfony/var-dumper (v7.3.5): Extracting archive
  - Installing symfony/translation-contracts (v3.6.1): Extracting archive
  - Installing symfony/polyfill-php83 (v1.33.0): Extracting archive
  - Installing symfony/validator (v7.3.7): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.33.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.33.0): Extracting archive
  - Installing symfony/string (v7.3.4): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing symfony/service-contracts (v3.6.1): Extracting archive
  - Installing symfony/polyfill-php84 (v1.33.0): Extracting archive
  - Installing symfony/serializer (v7.3.5): Extracting archive
  - Installing symfony/routing (v7.3.6): Extracting archive
  - Installing symfony/http-foundation (v7.3.7): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing symfony/psr-http-message-bridge (v7.3.0): Extracting archive
  - Installing symfony/process (v7.3.4): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.33.0): Extracting archive
  - Installing symfony/mime (v7.3.4): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.6.0): Extracting archive
  - Installing symfony/event-dispatcher (v7.3.3): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing doctrine/deprecations (1.1.5): Extracting archive
  - Installing doctrine/lexer (2.1.1): Extracting archive
  - Installing egulias/email-validator (4.0.4): Extracting archive
  - Installing symfony/mailer (v7.3.5): Extracting archive
  - Installing symfony/error-handler (v7.3.6): Extracting archive
  - Installing symfony/http-kernel (v7.3.7): Extracting archive
  - Installing symfony/finder (v7.3.5): Extracting archive
  - Installing symfony/filesystem (v7.3.6): Extracting archive
  - Installing symfony/dependency-injection (v7.3.6): Extracting archive
  - Installing symfony/console (v7.3.6): Extracting archive
  - Installing revolt/event-loop (v1.0.7): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.1.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing psr/cache (3.0.0): Extracting archive
  - Installing php-tuf/composer-stager (v2.0.1): Extracting archive
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
  - Installing drupal/core (11.2.8): Extracting archive
  - Installing drupal/core-recommended (11.2.8)
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
40 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
Scaffolding files for drupal/core:
  - Copy [project-root]/.editorconfig from assets/scaffold/files/editorconfig
  - Copy [project-root]/.gitattributes from assets/scaffold/files/gitattributes
  - Copy [project-root]/recipes/README.txt from assets/scaffold/files/recipes.README.txt
  - Copy [web-root]/.csslintrc from assets/scaffold/files/csslintrc
  - Copy [web-root]/.eslintignore from assets/scaffold/files/eslintignore
  - Copy [web-root]/.eslintrc.json from assets/scaffold/files/eslintrc.json
  - Copy [web-root]/.ht.router.php from assets/scaffold/files/ht.router.php
  - Copy [web-root]/.htaccess from assets/scaffold/files/htaccess
  - Copy [web-root]/example.gitignore from assets/scaffold/files/example.gitignore
  - Copy [web-root]/index.php from assets/scaffold/files/index.php
  - Copy [web-root]/INSTALL.txt from assets/scaffold/files/drupal.INSTALL.txt
  - Copy [web-root]/README.md from assets/scaffold/files/drupal.README.md
  - Copy [web-root]/robots.txt from assets/scaffold/files/robots.txt
  - Copy [web-root]/update.php from assets/scaffold/files/update.php
  - Copy [web-root]/sites/README.txt from assets/scaffold/files/sites.README.txt
  - Copy [web-root]/sites/development.services.yml from assets/scaffold/files/development.services.yml
  - Copy [web-root]/sites/example.settings.local.php from assets/scaffold/files/example.settings.local.php
  - Copy [web-root]/sites/example.sites.php from assets/scaffold/files/example.sites.php
  - Copy [web-root]/sites/default/default.services.yml from assets/scaffold/files/default.services.yml
  - Copy [web-root]/sites/default/default.settings.php from assets/scaffold/files/default.settings.php
  - Copy [web-root]/modules/README.txt from assets/scaffold/files/modules.README.txt
  - Copy [web-root]/profiles/README.txt from assets/scaffold/files/profiles.README.txt
  - Copy [web-root]/themes/README.txt from assets/scaffold/files/themes.README.txt
  * Homepage: https://www.drupal.org/project/drupal
  * Support:
    * docs: https://www.drupal.org/docs/user_guide/en/index.html
    * chat: https://www.drupal.org/node/314178

ddev composer create-project was successful.
robdaviswork@192 code % ddev start

Upgraded DDEV v1.24.10 is available!
Please visit https://github.com/ddev/ddev/releases/tag/v1.24.10
to get the upgrade.
For upgrade help see
https://ddev.readthedocs.io/en/stable/users/install/ddev-upgrade/

Starting oneyoungworld-assignment...
Building project images....
Project images built in 1s.
 Container ddev-oneyoungworld-assignment-db  Recreate
 Container ddev-oneyoungworld-assignment-web  Recreate
 Container ddev-oneyoungworld-assignment-db  Recreated
 Container ddev-oneyoungworld-assignment-web  Recreated
 Container ddev-oneyoungworld-assignment-web  Started
 Container ddev-oneyoungworld-assignment-db  Started
Starting Mutagen sync process...
Mutagen sync flush completed in 1s.
For details on sync status 'ddev mutagen st oneyoungworld-assignment -l'
Waiting for containers to become ready: [web db]
Starting ddev-router if necessary...
Successfully started oneyoungworld-assignment
Your project can be reached at https://oneyoungworld-assignment.ddev.site
See 'ddev describe' for alternate URLs.
robdaviswork@192 code % 
robdaviswork@192 code % ddev composer require drush/drush
./composer.json has been updated
Running composer update drush/drush
Loading composer repositories with package information
Updating dependencies
Lock file operations: 21 installs, 0 updates, 0 removals
  - Locking chi-teck/drupal-code-generator (4.2.0)
  - Locking consolidation/annotated-command (4.10.4)
  - Locking consolidation/config (3.2.0)
  - Locking consolidation/filter-via-dot-access-data (2.0.3)
  - Locking consolidation/log (3.1.1)
  - Locking consolidation/output-formatters (4.7.0)
  - Locking consolidation/robo (5.1.1)
  - Locking consolidation/site-alias (4.1.2)
  - Locking consolidation/site-process (5.4.2)
  - Locking dflydev/dot-access-data (v3.0.3)
  - Locking drush/drush (13.7.0)
  - Locking grasmash/expander (3.0.1)
  - Locking grasmash/yaml-cli (3.2.1)
  - Locking laravel/prompts (v0.3.8)
  - Locking league/container (4.2.5)
  - Locking nikic/php-parser (v5.6.2)
  - Locking phootwork/collection (v3.2.3)
  - Locking phootwork/lang (v3.2.3)
  - Locking phpowermove/docblock (v4.0)
  - Locking psy/psysh (v0.12.15)
  - Locking symfony/polyfill-php81 (v1.33.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 21 installs, 0 updates, 0 removals
  - Downloading consolidation/log (3.1.1)
  - Downloading psy/psysh (v0.12.15)
  - Downloading laravel/prompts (v0.3.8)
  - Downloading consolidation/config (3.2.0)
  - Downloading consolidation/site-alias (4.1.2)
  - Downloading consolidation/output-formatters (4.7.0)
  - Downloading consolidation/annotated-command (4.10.4)
  - Downloading consolidation/robo (5.1.1)
  - Downloading consolidation/filter-via-dot-access-data (2.0.3)
  - Downloading drush/drush (13.7.0)
  - Installing consolidation/log (3.1.1): Extracting archive
  - Installing nikic/php-parser (v5.6.2): Extracting archive
  - Installing psy/psysh (v0.12.15): Extracting archive
  - Installing league/container (4.2.5): Extracting archive
  - Installing laravel/prompts (v0.3.8): Extracting archive
  - Installing dflydev/dot-access-data (v3.0.3): Extracting archive
  - Installing grasmash/yaml-cli (3.2.1): Extracting archive
  - Installing grasmash/expander (3.0.1): Extracting archive
  - Installing consolidation/config (3.2.0): Extracting archive
  - Installing consolidation/site-alias (4.1.2): Extracting archive
  - Installing consolidation/site-process (5.4.2): Extracting archive
  - Installing symfony/polyfill-php81 (v1.33.0): Extracting archive
  - Installing phootwork/lang (v3.2.3): Extracting archive
  - Installing phootwork/collection (v3.2.3): Extracting archive
  - Installing phpowermove/docblock (v4.0): Extracting archive
  - Installing consolidation/output-formatters (4.7.0): Extracting archive
  - Installing consolidation/annotated-command (4.10.4): Extracting archive
  - Installing consolidation/robo (5.1.1): Extracting archive
  - Installing consolidation/filter-via-dot-access-data (2.0.3): Extracting archive
  - Installing chi-teck/drupal-code-generator (4.2.0): Extracting archive
  - Installing drush/drush (13.7.0): Extracting archive
5 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package doctrine/annotations is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
43 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^13.7 for drush/drush
robdaviswork@192 code % 

robdaviswork@192 code % ddev drush site:install          
 You are about to:
 * DROP all tables in your 'db' database.


 ┌ Do you want to continue? ────────────────────────────────────┐
 │ Yes                                                          │
 └──────────────────────────────────────────────────────────────┘

 [notice] Starting Drupal installation. This takes a while.
 [notice] Performed install task: install_select_language
 [notice] Performed install task: install_select_profile
 [notice] Performed install task: install_load_profile
 [notice] Performed install task: install_verify_requirements
 [notice] Performed install task: install_verify_database_ready
 [notice] Performed install task: install_base_system
 [notice] Performed install task: install_bootstrap_full
 [notice] Performed install task: install_profile_modules
 [notice] Performed install task: install_profile_themes
 [notice] Performed install task: install_install_profile
 [notice] Performed install task: install_configure_form
 [notice] Performed install task: install_finished
 [success] Installation complete. (Admin)
 [success] User name: admin  User password: [redacted]
robdaviswork@192 code % 
