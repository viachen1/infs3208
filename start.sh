#!/bin/bash
rm -rf mysql_data
chmod -R 777 ../pengxu
docker-compose up --force-recreate &
