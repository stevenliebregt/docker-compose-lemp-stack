FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y git zip
