#!/bin/bash
echo "Running BeforeInstall script for WordPress"

# Update system packages
sudo apt update -y

# Stop Apache service
sudo systemctl stop apache2


