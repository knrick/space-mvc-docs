# Database : ORM

### Getting Started

This guide will show you the bare essentials to get up and running with php-activerecord. I will assume you have downloaded the library into your include_path in a directory called php-activerecord.

The first steps are to include the library and define our database connection:


```php
1 require_once 'php-activerecord/ActiveRecord.php';
2
3 ActiveRecord\Config::initialize(function($cfg)
4 {
5     $cfg->set_model_directory('models');
6     $cfg->set_connections(array(
7         'development' => 'mysql://username:password@localhost/database_name'));
8 });

```

Next, lets create a model for a table called users. We\ll save this class in the file models/User.php


```php
1 class User extends ActiveRecord\Model
2 {
3 }

```

That's it! Now you can access the users table thru the User model.


```php
 1 # create Tito
 2 $user = User::create(array('name' => 'Tito', 'state' => 'VA'));
 3
 4 # read Tito
 5 $user = User::find_by_name('Tito');
 6
 7 # update Tito
 8 $user->name = 'Tito Jr';
 9 $user->save();
10
11 # delete Tito
12 $user->delete();

```

That's it! Pretty simple.