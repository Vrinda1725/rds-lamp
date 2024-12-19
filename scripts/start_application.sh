#!/bin/bash
echo "Running ApplicationStart script for WordPress"

# Start Apache service
sudo systemctl start apache2

# Enable Apache to start on boot
sudo systemctl enable apache2

# Reload Apache to apply changes
sudo systemctl reload apache2
