#!/bin/bash

# init
./init.sh

# prepare
./prepare.sh

# go
docker stack deploy -c docker-compose.yml idp
