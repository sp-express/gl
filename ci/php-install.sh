#!/bin/bash

[[ ! -e /.dockerenv ]] && exit 0

set -xe

apk update && apk add bash \
&& apk add curl \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
