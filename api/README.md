# API

##References:
* https://symfonycasts.com/tracks/symfony#api-development
* https://api-platform.com/docs/


## Setup
Activate the PHPStorm Symfony, PHP Toolbox, PHP Inspections EA Extended plugins.

### Local Setup
* Adjust in .env the DATABASE_URL, example: ``DATABASE_URL="mysql://user:password@127.0.0.1:3306/dbname?serverVersion=version-name-and-number"``
* Install composer and the Symfony client: [https://symfony.com/download](https://symfony.com/download)
* ``composer install``
* Only on first startup: ``php bin/console doctrine:database:create``
* Only on first startup: ``php bin/console doctrine:schema:create``
* Enable TLS `symfony server:ca:install`
* ``symfony serve (-d)`` or ``symfony server:start``
* Head out to [https://127.0.0.1:8000/api](https://127.0.0.1:8000/api)


## Relevant Commands

* ``php bin/console doctrine:database:create``
* ``php bin/console doctrine:schema:create``
* ``php bin/console make:entity``
* ``php bin/console make:migration``
* ``php bin/console doctrine:migrations:list``
* ``php bin/console doctrine:migrations:migrate``
* ``php bin/console debug:router``
* ``php bin/console debug:config api_platform``
* ``php bin/console doctrine:database:create --env=test``
* ``php bin/console doctrine:schema:create --env=test``
* ``php bin/console doctrine:schema:create --env=test``
* ``php bin/phpunit``
* ``php bin/console doctrine:fixtures:load (--append) (--env=dev/test)``