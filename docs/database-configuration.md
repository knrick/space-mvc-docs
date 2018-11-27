## Database : Configuration
<ul id="topic-list">
		<li><a href="/docs/database/configuration#default-connection">Default connection</a></li>
		<li><a href="/docs/database/configuration#multi-connections">Multi-connections</a></li>
		<li><a href="/docs/database/configuration#encoding">Setting the encoding</a></li>
	</ul>


Setup is very easy and straight-forward. There are essentially only two configuration points you must concern yourself with:
<ol>
		<li>Setting the model auto_load directory.</li>
		<li>Configuring your database connections.</li>
	</ol>


By setting the model auto_load directory, you are telling PHP where to look for your model classes. This means that you can have an app/folder structure of your choice as long as you have a real directory that holds your model classes. Each class should have it's own php file that is the same name of the class with a .php extension of course.


There are two ways you can initialize your configuration options. The easiest path is wrapping the calls in a closure which is sent through the Config initializer method. This is a neat and clean way to take advantage of PHP's new closure feature.


```php
 1 # inclue the ActiveRecord library
 2 require_once 'php-activerecord/ActiveRecord.php';
 3
 4 ActiveRecord\Config::initialize(function($cfg)
 5 {
 6   $cfg->set_model_directory('/path/to/your/model_directory');
 7   $cfg->set_connections(array('development' =>
 8     'mysql://username:password@localhost/database_name'));
 9 });

```

That's it! ActiveRecord takes care of the rest for you. It does not require that you map your table schema to yaml/xml files. It will query the database for this information and cache it so that it does not make multiple calls to the database for a single schema.


If you aren't feeling fancy, you can drop the closure and access the ActiveRecord\Config singleton directly.


```php
1 $cfg = ActiveRecord\Config::instance();
2 $cfg->set_model_directory('/path/to/your/model_directory');
3 $cfg->set_connections(array('development' =>
4   'mysql://username:password@localhost/database_name'));

```

	<h4 id="default-connections">Default connection


The development connection is the default by convention. You can change this by setting a new default connection based off of one of the connections you passed to set_connections.


```php
 1 $connections = array(
 2   'development' => 'mysql://username:password@localhost/development',
 3   'production' => 'mysql://username:password@localhost/production',
 4   'test' => 'mysql://username:password@localhost/test'
 5 );
 6
 7 # must issue a "use" statement in your closure if passing variables
 8 ActiveRecord\Config::initialize(function($cfg) use ($connections)
 9 {
10   $cfg->set_model_directory('/path/to/your/model_directory');
11   $cfg->set_connections($connections);
12
13   # default connection is now production
14   $cfg->set_default_connection('production');
15 });

```

#### Multi-connections


You can easily configure ActiveRecord to accept multiple database connections. All you have to do is specify the connection in the given model that should be using a different database.


```php
 1 $connections = array(
 2   'development' => 'mysql://username:password@localhost/development',
 3   'pgsql' => 'pgsql://username:password@localhost/development',
 4   'sqlite' => 'sqlite://my_database.db',
 5   'oci' => 'oci://username:passsword@localhost/xe'
 6 );
 7
 8 # must issue a "use" statement in your closure if passing variables
 9 ActiveRecord\Config::initialize(function($cfg) use ($connections)
10 {
11   $cfg->set_model_directory('/path/to/your/model_directory');
12   $cfg->set_connections($connections);
13 });

```

Your models would look like the following.


```php
 1 # SomeOciModel.php
 2 class SomeOciModel extends ActiveRecord\Model
 3 {
 4   static $connection = 'oci';
 5 }
 6
 7 # SomeSqliteModel.php
 8 class SomeSqliteModel extends ActiveRecord\Model
 9 {
10   static $connection = 'sqlite';
11 }

```

You could also have a base 'connection' model so all sub-classes will inherit the db setting.


```php
 1 # OciModels.php
 2 abstract class OciModels extends ActiveRecord\Model
 3 {
 4   static $connection = 'oci';
 5 }
 6
 7 # AnotherOciModel.php
 8 class AnotherOciModel extends OciModels
 9 {
10    # automatically inherits the oci database
11 }

```

## Setting the encoding


The character encoding can be specified in your connection parameters:


```php
1 $config->set_connections(array(
2   'development' => 'mysql://user:pass@localhost/mydb?charset=utf8')
3 );

```