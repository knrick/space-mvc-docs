## Environment Configuration

It is often helpful to have different configuration values based on the environment where the application is
		running. For example, you may wish to use a different cache driver locally than you do on your production
		server.

To make this a cinch, Space MVC utilizes the [DotEnv](https://github.com/vlucas/phpdotenv) PHP library
		by Vance Lucas. In a fresh Space MVC installation, the root directory of your application will
        contain a .env .example file. If you install Space MVC via Composer, this
		file will automatically be renamed to .env. Otherwise, you should rename the file manually.


Your .env file should not be committed to your application's source control, since each developer / server
        using your application could require a
		different environment configuration. Furthermore, this would be a security risk in the event an intruder gains
		access to your source control repository, since any sensitive credentials would get exposed.


If you are developing with a team, you may wish to continue including a .env.example file
		with your application. By putting place-holder values in the example configuration file, other developers on
		your team can clearly see which environment variables are needed to run your application. You may also create a
		.env.testing
		file. This file will override the env
		file when running PHPUnit tests or executing Artisan commands with the --env=testing option.

Any variable in your .env file can be overridden by external environment variables such as server-level or system-level environment variables.
    
	
<a name="environment-variable-types"></a>

### Environment Variable Types

All variables in your .env files are parsed as strings, so some reserved values have been created
        to allow you to return a wider range of types from the env()
		function:


| .env Value | env() Value |
| --- | --- |
| true | (bool) true |
| (true) | (bool) true |
| false | (bool) false |
| (false) |(bool) false |
| empty | (string) '' |
| (empty) | (string) '' |
| null | (null) null |
| (null) | (null) null |

If you need to define an environment variable with a value that contains spaces, you may do so by enclosing the
		value in double quotes.
```php
APP_NAME="My Application"
```
<a name="retrieving-environment-configuration"></a>
### Retrieving Environment Configuration
All of the variables listed in this file will be loaded into the $_ENV PHP super-global when your application receives a request.
		However, you may use the env helper to retrieve values from these variables
		in your configuration files. In fact, if you review the Space MVC configuration files, you will notice several of
		the options already using this helper:
```php
'debug' => env('APP_DEBUG', false),
```
The second value passed to the env function is the "default value". This value
		will be used if no environment variable exists for the given key.
<a name="determining-the-current-environment"></a>
### Determining The Current Environment
The current application environment is determined via the APP_ENV variable from your .env file. You may access this value via the environment method on the App <a
			href="/docs/5.7/facades">facade</a>:
```php
$environment = App::environment();
```
You may also pass arguments to the environment method to check if the
		environment matches a given value. The method will return true if the environment matches any of the given values:
```php
if (App::environment('local')) {
 // The environment is local
}

if (App::environment(['local', 'staging'])) {
 // The environment is either local OR staging...
}
```
The current application environment detection can be overridden by a server-level APP_ENV environment variable. This can
		be useful when you need to share the same application for different environment configurations, so you can set
		up a given host to match a given environment in your server's configurations.
<a name="hiding-environment-variables-from-debug"></a>
