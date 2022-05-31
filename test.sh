#!/usr/bin/env sh

set -x

bin/console doctrine:schema:drop --force
bin/console doctrine:schema:update  --force

composer require doctrine/doctrine-bundle:2.5.7 --no-scripts
bin/console cache:clear -e test
php bin/phpunit

composer require doctrine/doctrine-bundle:^2.6 --no-scripts
bin/console cache:clear -e test
php bin/phpunit