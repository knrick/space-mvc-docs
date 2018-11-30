## Server Requirements

The Space MVC framework has a few system requirements:

* PHP >= 7.0.0
* PDO PHP Extension
* PHP Memcached
* Mysql Database

## Installing Framework

You can install Space CRM quite easily using github and composer.

```bash
git clone https://github.com/space-mvc/space-mvc.git
```
```bash
composer install
```

## Web Server Configuration

## Apache
Space MVC includes a public/.htaccess file that is used to provide URLs without the index.php front controller in the path. Before serving Space MVC with Apache, be sure to enable the mod_rewrite module so the .htaccess file will be honored by the server.

If the .htaccess file that ships with Space MVC does not work with your Apache installation, try this alternative:

```
Options +FollowSymLinks -Indexes
    RewriteEngine On
    
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
```

## Nginx
If you are using Nginx, the following directive in your site configuration will direct all requests to the index.php front controller:

```php
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```