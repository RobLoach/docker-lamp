#!/bin/bash

# Enable PHP modules
php5enmod mcrypt

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/bin --version=1.0.0-alpha8
