
CREATE USER 'uslntldnoyw'@'localhost' IDENTIFIED BY 'password';

create DATABASE dslntldnoyw; GRANT ALL PRIVILEGES ON dslntldnoyw.* TO uslntldnoyw@localhost IDENTIFIED BY 'password';
FLUSH PRIVILEGES;

$databases['default']['default'] = array (
  'database' => 'dslntldnoyw',
  'username' => 'uslntldnoyw',
  'password' => 'password',
  'host' => 'localhost',
  'port' => '3306',
  'driver' => 'mysql',
);


on local:
ddev drush sql-dump > data/db.sql


on server:
./drush-dir/drush sql-drop -y
./drush-dir/drush sql-cli < ../databases/db.sql 
./drush-dir/drush cr