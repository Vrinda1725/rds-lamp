#!/bin/bash
echo "Running ValidateService script for WordPress"

# Check if Apache2 is running
if systemctl is-active --quiet apache2; then
  echo "Apache2 is running"
else
  echo "Apache2 is not running" >&2
  exit 1
fi

# Check WordPress accessibility
curl -I http://localhost | grep "200 OK" > /dev/null
if [ $? -eq 0 ]; then
  echo "WordPress is accessible"
else
  echo "WordPress validation failed" >&2
  exit 1
fi
