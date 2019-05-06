#!/bin/bash

export STACK_NETWORK=dev-net
export STACK_SERVICE=idp
export STACK_VERSION=0.1

# init
./init.sh

# prepare
./prepare.sh

# go
docker stack deploy -c docker-compose.yml $STACK_SERVICE
