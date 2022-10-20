#!/bin/bash
rm -rf mysql_data
chmod -R 777 ../infs3208
docker-compose up --force-recreate &
