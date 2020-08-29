# Docker Compose LEMP Stack

Forked from [stevenliebregt](https://github.com/stevenliebregt/docker-compose-lemp-stack) - this repo is mainly for me to get the knack of GitHub.

This repository contains a little `docker-compose` configuration to start a `LEMP (Linux, Nginx, MariaDB, PHP)` stack.

## Details

The following versions are used.

* PHP 7.4 (FPM)
* Nginx (latest)
* MariaDB 10.3.9

## Configuration

The Nginx configuration can be found in `config/nginx/`.

You can also set the following environment variables, for example in the included `.env` file:

| Key | Description | Default |
|-----|-------------|---------|
|APP_NAME|The name used when creating a container.|`lemp`|
|MYSQL_ROOT_PASSWORD|The MySQL root password used when creating the container.|`supertrickypassword`|
|PORT|External HTTP port to bind to Nginx.|`80`|
|SECURE_PORT|External HTTPS port to bind to Nginx.|`443`|

## Usage

To use it, simply follow the following steps:

##### Clone this repository.

Clone this repository with the following command: `git clone https://github.com/jade-doggerel/docker-compose-lemp-stack.git`.

##### Start the server.

Start the server using the following command inside the directory you just cloned: `docker-compose up -d`.

##### Add files.

Drop your website into the `/html/` directory.

## Entering the containers

You can use the following command to enter a container:

Where `{CONTAINER_NAME}` is one of:

`docker exec -ti {CONTAINER_NAME} /bin/bash`

* `{APP_NAME}-php`
* `{APP_NAME}-nginx`
* `{APP_NAME}-mariadb`
