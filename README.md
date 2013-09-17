# developer.pemiluapi.org

The PemiluAPI developer website.

## Installation

1. Clone this project
1. Dowload Composer

    ```bash
    $ wget http://getcomposer.org/composer.phar
    ```
1. Install the framework's dependencies

    ```bash
    $ php composer.phar install
    ```
1. Laravel requires one set of permissions to be configured - folders within `app/storage` require write access by the web server
1. Point your web server document root to `public` directory
1. I assume you will setup an virtual host, open file `bootstrap/start.php` and change 'developer.pemiluapi.local' on line 31 to your machine name
1. Copy file `app/config/database.php` to `app/config/local/database.php` then modify the later to match your database setup
1. Run migrations

	```bash
    $ php artisan -env=local migrate
    ```
1. I assume you will setup an virtual host, open file `bootstrap/start.php` and change 'developer.pemiluapi.local' on line 31 to your machine name
