FROM ubuntu:20.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt update

RUN apt install -y php7.4
RUN apt install -y apache2
RUN apt install -y php libapache2-mod-php
RUN apt install -y php-cli
RUN apt install -y php-cgi

RUN cd ~
RUN apt install curl
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN cd /
RUN apt-get install php-curl -y
EXPOSE 8080/tcp