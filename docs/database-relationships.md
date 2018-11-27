## Database : Relationships

<ul id="topic-list">
		<li><a href="/docs/database/relationships#common-options">Common options</a></li>
		<li><a href="/docs/database/relationships#has_many">has_many</a></li>
		<li><a href="/docs/database/relationships#has_many_through" title="many to many">has_many through</a></li>
		<li><a href="/docs/database/relationships#belongs_to">belongs_to</a></li>
		<li><a href="/docs/database/relationships#has_one">has_one</a></li>
		<li><a href="/docs/database/relationships#self-referential">Self-referential</a></li>
	</ul>


What are associations? By declaring associations on your models, you allow them to communicate with each other. These associations should match the way data in your tables relate to each other.


#### Common options


These are available amongst each type of association.


<strong>conditions</strong>: string/array of <a href="/docs/database/finders#conditions">finder conditions</a><br><strong>readonly</strong>: whether associated objects can be <a href="/docs/database/finders#read-only">saved/destroyed</a><br><strong>select</strong>: specify fields in the <a href="/docs/database/finders#select">select clause</a><br><strong>class_name</strong>: the class name of the associated model<br><strong>foreign_key</strong>: name of foreign_key


Let's take a look at these options with a few different association types


##### conditions


Below, we specify that associated payments of an order object should not be void.


```php
1 class Order extends ActiveRecord\Model {
2   static $has_many = array(
3     array('payments', 'conditions' => array('void = ?' => array(0)))
4   );
5 }

```

##### readonly


If you add a readonly option to your association, then the associatied object cannot be saved, although, the base object can still be saved.


```php
 1 class Payment extends ActiveRecord\Model {
 2   static $belongs_to = array(
 3     array('user', 'readonly' => true)
 4   );
 5 }
 6
 7 $payment = Payment::first();
 8 $payment->paid = 1;
 9 $payment->save(); # this will save just fine
10
11 $payment->user->first_name = 'John';
12 $payment->user->save(); # this will throw a ReadOnlyException

```

##### select


Sometimes you may not need all of the fields back from one of your associations (e.g. it may be a ridiculously large table) and so you can specify the particular fields you want.


```php
1 class Payment extends ActiveRecord\Model {
2   static $belongs_to = array(
3     array('person', 'select' => 'id, first_name, last_name')
4   );
5 }

```

##### class_name


In this example payment has a one-to-one relationship with a user, but we want to access the association thru "person." Thus, we have to provide the class name of the associated model; otherwise, ActiveRecord would try to look for a "Person" class.


```php
1 class Payment extends ActiveRecord\Model {
2   static $belongs_to = array(
3     array('person', 'class_name' => 'User')
4   );
5 }

```

#### has_many


A one-to-many relationship. You should use a pluralized form of the associated model when declaring a has_many association, unless you want to use the <a href="/docs/database/relationships#class_name">class_name</a> option.


```php
 1 # one-to-many association with the model "Payment" 
 2 class User extends ActiveRecord\Model {
 3   static $has_many = array(
 4     array('payments')
 5   );
 6 }
 7
 8 $user = User::first();
 9 print_r($user->payments); # => will print an array of Payment objects
10
11 $payment = $user->create_payment(array('amount' => 1)); # build|create for associations.

```

<img src="/images/guides/has_many.png" alt="">


Options (not part of <a href="/docs/database/relationships#common-options">common options</a>)


<strong>limit/offset</strong>: limit the number of records<br><strong>primary_key</strong>: name of the primary_key of the association (assumed to be "id")<br><strong>group</strong>: GROUP BY clause<br><strong>order</strong>: ORDER BY clause<br><strong>through</strong>: the association used to go "through"


```php
1 class Order extends ActiveRecord\Model {
2   static $has_many = array(
3     array('payments', 'limit' => 5),
4     array('items', 'order' => 'name asc', 'group' => 'type')
5   );
6 }

```

##### has_many through (many to many)


This is a convenient way to configure a many-to-many association. In this example an order is associated with users by going the its payments association.


```php
 1 class Order extends ActiveRecord\Model {
 2   static $has_many = array(
 3     array('payments'),
 4     array('users', 'through' => 'payments')
 5   );
 6 }
 7
 8 class Payment extends ActiveRecord\Model {
 9   static $belongs_to = array(
10     array('user'),
11     array('order')
12   );
13 }
14
15 class User extends ActiveRecord\Model {
16   static $has_many = array(
17     array('payments')
18   );
19 }
<strong>20</strong>
21 $order = Order::first();
22 # direct access to users
23 print_r($order->users); # will print an array of User object

```

<img src="/images/guides/has_many_through.png" alt="">


####belongs_to


This indicates a one-to-one relationship. Its difference from <a href="/docs/database/relationships#has_one">has_one</a> is that the foreign key will be on the table which declares a belongs_to association. You should use a singular form of the associated model when declaring this association, unless you want to use the <a href="/docs/database/relationships#class_name">class_name</a> option.


```php
1 class Payment extends ActiveRecord\Model {
2   static $belongs_to = array(
3     array('user')
4   );
5 }
6
7 $payment = Payment::first();
8 echo $payment->user->first_name; # first_name of associated User object

```

<img src="/images/guides/belongs_to.png" alt="">


Options (not part of <a href="/docs/database/relationships#common-options">common options</a>)


<strong>primary_key</strong>: name of the primary_key of the association (assumed to be "id")


#### has_one


This indicates a one-to-one relationship. A has_one will have the foreign key on the associated table unlike <a href="/docs/database/relationships#belongs_to">belongs_to</a>. You should use a singular form of the associated model when declaring this association, unless you want to use the <a href="/docs/database/relationships#class_name">class_name</a> option.


```php
1 class Payment extends ActiveRecord\Model {
2   static $has_one = array(
3     array('receipt')
4   );
5 }

```

<img src="/images/guides/has_one.png" alt="">


Options (not part of <a href="/docs/database/relationships#common-options">common options</a>)


<strong>primary_key</strong>: name of the primary_key of the association (assumed to be "id")<br><strong>through</strong>: the association used to go "through"


##### has_one through


A one-to-one association. In this example, an owner has a quarter_back by going through its team association.


```php
 1 class Owner extends ActiveRecord\Model {
 2   static $has_one = array(
 3     array('team'),
 4     array('quarter_back', 'through' => 'team')
 5   );
 6 }
 7
 8 class Team extends ActiveRecord\Model {
 9   static $belongs_to = array(
10     array('owner')
11   );
12
13   static $has_one = array(
14     array('quarter_back')
15   );
16 }
17
18 class QuarterBack extends ActiveRecord\Model {
19   static $belongs_to = array(
<strong>20</strong>     array('team')
21   );
22 }

```

<img src="/images/guides/has_one_through.png" alt="">


#### Self-referential


Model's can declare associations to themselves. This can be helpful for table auditing, or in the example below, where a post would need to know about its parent.


```php
1 class Post extends ActiveRecord\Model {
2   static $belongs_to = array(array('parent_post', 'class_name' => 'Post'));
3 }

```

<img src="/images/guides/belongs_to_self_referential.png" alt="">