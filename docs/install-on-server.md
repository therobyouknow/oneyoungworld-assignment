

cd /var/www/00-2/oneyoungworld-assignment.solent.london/

mkdir -p settings/1/
mkdir -p live/assets/public/files

cd /var/www/00-2/oneyoungworld-assignment.solent.london/releases/0.1/code/web/sites/default
ln -s ../../../../../../deployment_environments/live/assets/public/files .
ln -s ../../../../../../settings/1/settings.local.php

ln -s tools/phpcomposer/composer.phar composer

./composer install

ln -s vendor/drush/drush/ drush-dir

e.g.
./drush-dir/drush status



In Settings.php line 172:
                                                   
  Missing $settings['hash_salt'] in settings.php.  
                                                   

- put this in settings.local.php