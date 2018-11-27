## Database : Conventions


Because we have embraced a convention over configuration philosophy, using our library is not painful. The conventions are easy to remember which will also contribute to stream-lining your productivity as a developer.


If you've already seen the <a href="/docs/database/configuration" class="wiki-page">Configuration / Setup</a> guide, then you know that there isn't much to it. Therefore, using PHP ActiveRecord mainly requires you to acquaint yourself with some simple conventions. Once you've done that, you can move on to the more advanced features.


ActiveRecord assumes the following conventions:


```php
1 # name of your class represents the singular form of your table name.
2 class Book extends ActiveRecord\Model {}
3
4 # your table name would be "people" 
5 class Person extends ActiveRecord\Model {}

```

The primary key of your table is named "id".


```php
1 class Book extends ActiveRecord\Model {}
2
3 # SELECT * FROM `books` where id = 1
4 Book::find(1);

```

#### Overriding conventions


Even through ActiveRecord prefers to make assumptions about your table and primary key names, you can override them. Here is a simple example showing how one could configure a specific model.


```php
 1 class Book extends ActiveRecord\Model
 2 {
 3   # explicit table name since our table is not "books" 
 4   static $table_name = 'my_book';
 5
 6   # explicit pk since our pk is not "id" 
 7   static $primary_key = 'book_id';
 8
 9   # explicit connection name since we always want our test db with this model
10   static $connection = 'test';
11
12   # explicit database name will generate sql like so => my_db.my_book
13   static $db = 'my_db';
14 }

```