#!/bin/bash
rm -rf output
mkdir -p output/conf/rpc/services
mkdir -p output/conf/vendor
mkdir -p output/conf/sfnp
mkdir -p output/conf/lib
mkdir -p output/conf/app/sdsdata
mkdir -p output/php
#mkdir -p output/webserver


cp -r conf/* output/conf/
cp -r php/* output/php/

#cp -r webserver/* output/webserver/

chmod -R 755 output/conf
#chmod -R 755 output/webserver
cd output

find ./ -name .git -exec rm -rf {} \;
#tar zcf RpcConf.tar.gz conf
#rm -rf conf

#echo 'DONE'
