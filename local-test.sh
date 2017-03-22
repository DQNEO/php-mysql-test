#!/bin/bash

# you need to run mysql in advance (docker is recommended)

export DB_DSN="mysql:dbname=mysql;host=127.0.0.1"
export DB_USER="root"
export DB_PASS="pass"

./vendor/bin/phpunit
