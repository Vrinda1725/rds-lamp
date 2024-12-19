#!/bin/bash
echo "Running AfterInstall script for WordPress"

# Set ownership and permissions
sudo chown www-data:www-data /var/www
sudo chmod 755 /var/www

# Verify wp-config.php exists
if [ ! -f "/var/www/wp-config.php" ]; then
  echo "wp-config.php not found, creating it"
  cp /var/www/wp-config-sample.php /var/www/wp-config.php
  echo "Updating database configuration in wp-config.php"
  sudo sed -i "s/database_name_here/wordpressdb/" /var/www/wp-config.php
  sudo sed -i "s/username_here/admin1/" /var/www/wp-config.php
  sudo sed -i "s/password_here/vrinda17251/" /var/www/wp-config.php
  sudo sed -i "s/localhost/wordpressdb.c9weuc2gabac.eu-north-1.rds.amazonaws.com:3306/" /var/www/wp-config.php
fi

