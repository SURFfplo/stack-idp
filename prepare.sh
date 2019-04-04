#!/bin/bash

# todo
# - two variables: network + containername

# create nfs mount
mkdir -p /mnt/nfs/nfsdlo/dev-net/idp-0.1/html
mkdir -p /mnt/nfs/nfsdlo/dev-net/idp-0.1/conf

# write data
cp -a ./html/* /mnt/nfs/nfsdlo/dev-net/idp-0.1/html
cp -a ./conf/* /mnt/nfs/nfsdlo/dev-net/idp-0.1/conf
