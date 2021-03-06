#!/bin/sh

set -e

# ### CONFIGURE NIGINX ###

# replace variables in default.conf
NGINX_CONF="/data/conf/default.conf"
sed -i "s~%PHP_SERVICE%~${PHP_STACK_SERVICE}_php~g" "$NGINX_CONF"

# ### CONFIGURE SIMPLESAMLPHP ###

# get admin password
MY_PASSWORD=admin
if [ -f "$SSP_ADMIN_PASS" ]
then
	MY_PASSWORD=`cat $SSP_ADMIN_PASS`
fi

# replace variables in authsources.php
SSP_AUTH="/data/src/simplesamlphp/config/authsources.php"
sed -i "s~%SSP_LDAP_HOST%~$SSP_LDAP_HOST~g" "$SSP_AUTH"
sed -i "s~%SSP_LDAP_PORT%~$SSP_LDAP_PORT~g" "$SSP_AUTH"
sed -i "s~%SSP_LDAP_DOMAIN%~$SSP_LDAP_DOMAIN~g" "$SSP_AUTH"

# replace variables in config.php
SSP_CONF="/data/src/simplesamlphp/config/config.php"
sed -i "s~%SSP_BASEURL%~$SSP_BASEURL~g" "$SSP_CONF"
sed -i "s~%SSP_ADMIN_PASS%~$MY_PASSWORD~g" "$SSP_CONF"
sed -i "s~%SSP_CONTACT_NAME%~$SSP_CONTACT_NAME~g" "$SSP_CONF"
sed -i "s~%SSP_CONTACT_EMAIL%~$SSP_CONTACT_EMAIL~g" "$SSP_CONF"
sed -i "s~%SSP_THEME%~$SSP_THEME~g" "$SSP_CONF"

# ### CREATE CERTIFICATES ###

cd /data/src/simplesamlphp/cert

openssl req -new -x509 -days 3652 -nodes -out server.crt -keyout server.pem -subj "/C=NL/ST=Utrecht/L=Utrecht/O=SURF/CN=www.surf.nl"
chmod 644 server.pem

if [ -f "/data/save/server.crt" ]
then
	cp -a /data/save/server.crt /data/src/simplesamlphp/cert
else
	cp -a /data/src/simplesamlphp/cert/server.crt /data/save
fi

if [ -f "/data/save/server.pem" ]
then
	cp -a /data/save/server.pem /data/src/simplesamlphp/cert
else
	cp -a /data/src/simplesamlphp/cert/server.pem /data/save
fi

exec "$@"
