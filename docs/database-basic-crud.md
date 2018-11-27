## Database : Basic CRUD

<ul id="topic-list">
		<li><a href="/docs/database/basic-crud#create">Create</a></li>
		<li><a href="/docs/database/basic-crud#read">Read</a></li>
		<li><a href="/docs/database/basic-crud#update">Update</a></li>
		<li><a href="/docs/database/basic-crud#delete">Delete</a></li>
		<li><a href="/docs/database/basic-crud#massive">Massive</a></li>
	</ul>


<a href="http://en.wikipedia.org/wiki/Create,_read,_update_and_delete" class="external">CRUD</a> as defined by Wikipedia:


> Create, read, update and delete (CRUD) are the four basic functions of persistent storage, a major part of nearly all computer software. Sometimes CRUD is expanded with the words retrieve instead of read or destroy instead of delete. It is also sometimes used to describe user interface conventions that facilitate viewing, searching, and changing information; often using computer-based forms and reports.

In other words, CRUD is the day-to-day tedium of saving and reading data. ActiveRecord removes the remedial and encumbering task of hand-writing SQL queries. Instead, you will only need to write the relevant parts to work with your data.


#### Create


This is where you save records to your database. Here we create a new post by instantiating a new object and then invoking the save() method.


```php
 1 $post = new Post();
 2 $post->title = 'My first blog post!!';
 3 $post->author_id = 5;
 4 $post->save();
 5 # INSERT INTO `posts` (title,author_id) VALUES('My first blog post!!', 5)
 6
 7 # the below methods accomplish the same thing
 8
 9 $attributes = array('title' => 'My first blog post!!', 'author_id' => 5);
10 $post = new Post($attributes);
11 $post->save();
12 # same sql as above
13
14 $post = Post::create($attributes);
15 # same sql as above

```

#### Read


These are your basic methods to find and retrieve records from your database. See the <a href="/docs/database/finders" class="wiki-page">Finders</a> section for more details.


```php
 1 $post = Post::find(1);
 2 echo $post->title; # 'My first blog post!!'
 3 echo $post->author_id; # 5
 4
 5 # also the same since it is the first record in the db
 6 $post = Post::first();
 7
 8 # using dynamic finders
 9 $post = Post::find_by_name('The Decider');
10 $post = Post::find_by_name_and_id('The Bridge Builder',100);
11 $post = Post::find_by_name_or_id('The Bridge Builder',100);
12
13 # using some conditions
14 $posts = Post::find('all',array('conditions' => array('name=?','The Bridge Builder')));

```

#### Update


To update you would just need to find a record first and then change one of its attributes. It keeps an array of attributes that are "dirty" (that have been modified) and so our sql will only update the fields modified.


```php
1 $post = Post::find(1);
2 echo $post->title; # 'My first blog post!!'
3 $post->title = 'Some real title';
4 $post->save();
5 # UPDATE `posts` SET title='Some real title' WHERE id=1
6
7 $post->update_attributes(array('title' => 'Some other title', 'author_id' => 1));
8 # UPDATE `posts` SET title='Some other title', author_id=1 WHERE id=1

```

#### Delete


Deleting a record will not destroy the object. This means that it will call sql to delete the record in your database, however, you can still use the object.


```php
1 $post = Post::find(1);
2 $post->delete();
3 # DELETE FROM `posts` WHERE id=1
4
5 echo $post->title; # Some other title

```

#### Massive Update or Delete


You can do a massive update or massive delete easily. Look at this example:


```php
 1 # MASSIVE UPDATE
 2 # Model::table()->update(AttributesToUpdate, WhereToUpdate);
 3 Post::table()->update(array('title' => 'Massive title!', /* Other attributes... */, array('id' => array(1, 3, 7));
 4 # UPDATE `posts` SET title = `Massive title!` WHERE id IN (1, 3, 7)
 5
 6 # MASSIVE DELETE
 7 # Model::table()->delete(WhereToDelete);
 8 Post::table()->delete(array('id' => array(5, 9, 26, 30));
 9 # DELETE FROM `posts` WHERE id IN (5, 9, 26, 30)

```