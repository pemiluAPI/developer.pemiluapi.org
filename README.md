# developer.pemiluapi.org

The PemiluAPI developer website.

## Installation

The steps below assume you are working on a Ubuntu machine.

### Apache2, MySQL and PHP5

1. Install Apache2

    ```bash
	$ sudo apt-get install -y apache2
	```
1. Enable `mod_rewrite`

	```bash
	$ sudo a2enmod rewrite
	$ sudo service apache2 restart
	```
1. Install MySQL

	```bash
	$ sudo apt-get install mysql-server
	```

1. Install PHP5

    ```bash
    $ sudo apt-get install -y php5 libapache2-mod-php5 php5-cli php5-curl php5-mcrypt php5-mysql
	```

### Application

1. Install Git

	```bash
	$ sudo apt-get install -y git
	```

1. Clone this project

	```bash
	$ git clone https://github.com/pemiluAPI/developer.pemiluapi.org.git
	```

1. Go to the project directory and download Composer

    ```bash
    $ cd developer.pemiluapi.org
    $ wget http://getcomposer.org/composer.phar
    ```
1. Install the framework's dependencies

    ```bash
    $ php composer.phar install
    ```

1. Set the `public` directory as the `DocumentRoot`. Modify the `/etc/apache2/sites-available/default` file as follow

	```
	DocumentRoot /var/www/developer.pemiluapi.org/public
	<Directory /var/www/developer.pemiluapi.org/public>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride all
        Order allow,deny
        allow from all
    </Directory>
	```

Please note that your modification need may vary depending on your Apache2 setup.

1. Restart Apache2

	```bash
	$ sudo service apache2 restart
	```

1. Laravel requires one set of permissions to be configured - folders within `app/storage` require write access by the web server
1. Point your web server document root to `public` directory
1. I assume you will setup an virtual host, open file `bootstrap/start.php` and change 'developer.pemiluapi.local' on line 31 to your machine name
1. Modify `app/config/database.php` then modify the later to match your database setup
1. Run migrations and seed the database

	```bash
    $ php artisan migrate
    $ php artisan db:seed
    ```
1. I assume you will setup an virtual host, open file `bootstrap/start.php` and change 'developer.pemiluapi.local' on line 31 to your machine name
1. Change `host` value in `app/config/pemiluapi.php` to match your PemiluAPI installation.
