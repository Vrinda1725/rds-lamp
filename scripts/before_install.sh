#!/bin/bash
echo "Running BeforeInstall script for WordPress"

# Update system packages
sudo apt update -y

# Stop Apache service
sudo systemctl stop apache2

# Backup existing WordPress installation (optional)
if [ -d "/var/www" ]; then
  sudo tar -czf /var/www_backup_$(date +%F-%T).tar.gz /var/www
  sudo rm -rf /var/www/*
fi
