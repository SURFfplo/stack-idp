#!/bin/bash

# to the correct dir
mkdir -p src
cd src

# remove old version if it exists...
rm -rf simplesamlphp

# get simplesaml
ssp_version=1.17.6
ssp_hash=0e2fd641e8cba2966437fb64591e28a73fb90bae3bc97949c60a47a5b8c1e80e

wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v$ssp_version/simplesamlphp-$ssp_version.tar.gz
echo "$ssp_hash simplesamlphp-$ssp_version.tar.gz" | sha256sum -c -

tar xzf simplesamlphp-$ssp_version.tar.gz
rm simplesamlphp-$ssp_version.tar.gz

mv simplesamlphp-$ssp_version simplesamlphp


# to the correct dir
cd ..

# config
cp -a config_ssp/config/* src/simplesamlphp/config
cp -a config_ssp/metadata/* src/simplesamlphp/metadata
cp -a config_ssp/modules/* src/simplesamlphp/modules

# status
cp html/status.php src/simplesamlphp/www
