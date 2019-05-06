#!/bin/bash

# Run this script once to build secrets & configs

echo "Choose new simplesamlphp admin password:"
read sspadminpwd
printf $sspadminpwd | docker secret create idp_ssp_admin_password -
echo done...

