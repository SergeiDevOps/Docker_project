
# Docker LEMP Stack (Nginx + PHP + MySQL + phpMyAdmin)

The project deploys a local environment for PHP applications using:

•  Docker Compose (v3.9)

•  Nginx 1.27 (alpine) - web server

 PHP (custom assembly) -- service for executing site scripts

•  MySQL 8.0 – database

•  phpMyAdmin 5.2 - base management service

The stack is suitable for local development of PHP projects.
 
 # Composition of services
 
 nginx2

• Image: nginx: 1.27-alpine

• Port: 127.0.0.1: 80 → 80

• Configuration: ./vhost.conf

• Site root: ./www

 php2

• Collected from ./images/php

• Works with code from ./www

 mysql2

• Image: mysql: 8.0

• Uses .env for environment variables

• Data is stored in volume mysql _ data

• Added healthcheck

 phpmyadmin2

• Image: phpmyadmin: 5.2

• Available on port 1500

• Connects to mysql2
 
 # Project structure

├── docker-compose.yml

├── .env

├── vhost.conf

├── www/

└── images/

└── php/

└── Dockerfile
 
 # Environment Variables (.env)

Example .env file:

MYSQL_ROOT_PASSWORD=root

MYSQL_DATABASE=app

MYSQL_USER=user

MYSQL_PASSWORD=password
 
 # How to run

1 ️Clone Repository

git clone https://github.com/your-username/your-repo.git

cd your-repo

2 ️Start containers

docker compose up -d –build

3 ️Check operation

•  Web site: http://localhost

•  phpMyAdmin: http://localhost:1500
 
 # Stopping

docker compose down

Also delete the database volume:

docker compose down -v
 
 # Features

• Nginx is only available locally (127.0.0.1)

• MySQL is protected within the docker network

• Separate network2 used

• MySQL data is saved between restarts
 
 # Requirements

• Docker 24+

• Docker Compose v2+

# Verifying version:

docker –version

docker compose version
 
 # License

MIT
