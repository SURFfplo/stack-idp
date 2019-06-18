#!/bin/bash

# defaults
SERVICE=idp
VERSION=0.1
NETWORK=dev-net
PORT=57002

# input with four arguments: go.sh SERVICE VERSION NETWORK PORT
if [ "$1" != "" ]; then
        SERVICE=$1
fi
if [ "$2" != "" ]; then
        VERSION=$2
fi
if [ "$3" != "" ]; then
        NETWORK=$3
fi
if [ "$4" != "" ]; then
        PORT=$4
fi

# reuse input
export STACK_SERVICE=$SERVICE
export STACK_VERSION=$VERSION
export STACK_NETWORK=$NETWORK
export STACK_PORT=$PORT

if [ $NETWORK == "dev-net" ]; then
	export STACK_URL=https://idp.dev.dlo.surf.nl
fi
if [ $NETWORK == "test-net" ]; then
	export STACK_URL=https://idp.test.dlo.surf.nl
fi
if [ $NETWORK == "exp-net" ]; then
	export STACK_URL=https://idp.experimenteer.dlo.surf.nl
fi

# init
./init.sh

# prepare
./prepare.sh

# go
docker stack deploy -c docker-compose.yml $STACK_SERVICE
