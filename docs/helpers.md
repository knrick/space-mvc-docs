# Helpers
	<ul>
		<li><a href="#introduction">Introduction</a></li>
		<li><a href="#available-methods">Available Methods</a></li>
	</ul>
<a name="introduction"></a>
## <a href="#introduction">Introduction</a>
Space MVC includes a variety of global "helper" PHP functions. Many of these functions are used by the framework itself; however, you are free to use them in your own applications if you find them convenient.
<a name="available-methods"></a>
## <a href="#available-methods">Available Methods</a>
	<style>
		.collection-method-list > p {
			column-count: 3; -moz-column-count: 3; -webkit-column-count: 3;
			column-gap: 2em; -moz-column-gap: 2em; -webkit-column-gap: 2em;
		}

		.collection-method-list a {
			display: block;
		}
	</style>
### Arrays & Objects
	<div class="collection-method-list">
	<a href="#method-array-add">array_add</a>
			<a href="#method-array-collapse">array_collapse</a>
			<a href="#method-array-divide">array_divide</a>
			<a href="#method-array-dot">array_dot</a>
			<a href="#method-array-except">array_except</a>
			<a href="#method-array-first">array_first</a>
			<a href="#method-array-flatten">array_flatten</a>
			<a href="#method-array-forget">array_forget</a>
			<a href="#method-array-get">array_get</a>
			<a href="#method-array-has">array_has</a>
			<a href="#method-array-last">array_last</a>
			<a href="#method-array-only">array_only</a>
			<a href="#method-array-pluck">array_pluck</a>
			<a href="#method-array-prepend">array_prepend</a>
			<a href="#method-array-pull">array_pull</a>
			<a href="#method-array-random">array_random</a>
			<a href="#method-array-set">array_set</a>
			<a href="#method-array-sort">array_sort</a>
			<a href="#method-array-sort-recursive">array_sort_recursive</a>
			<a href="#method-array-where">array_where</a>
			<a href="#method-array-wrap">array_wrap</a>
			<a href="#method-data-fill">data_fill</a>
			<a href="#method-data-get">data_get</a>
			<a href="#method-data-set">data_set</a>
			<a href="#method-head">head</a>
			<a href="#method-last">last</a>
	</div>
### Paths
	<div class="collection-method-list">
	<a href="#method-app-path">app_path</a>
			<a href="#method-base-path">base_path</a>
			<a href="#method-config-path">config_path</a>
			<a href="#method-database-path">database_path</a>
			<a href="#method-mix">mix</a>
			<a href="#method-public-path">public_path</a>
			<a href="#method-resource-path">resource_path</a>
			<a href="#method-storage-path">storage_path</a>
	</div>
### Strings
	<div class="collection-method-list">
	<a href="#method-__">__</a>
			<a href="#method-camel-case">camel_case</a>
			<a href="#method-class-basename">class_basename</a>
			<a href="#method-e">e</a>
			<a href="#method-ends-with">ends_with</a>
			<a href="#method-kebab-case">kebab_case</a>
			<a href="#method-preg-replace-array">preg_replace_array</a>
			<a href="#method-snake-case">snake_case</a>
			<a href="#method-starts-with">starts_with</a>
			<a href="#method-str-after">str_after</a>
			<a href="#method-str-before">str_before</a>
			<a href="#method-str-contains">str_contains</a>
			<a href="#method-str-finish">str_finish</a>
			<a href="#method-str-is">str_is</a>
			<a href="#method-str-limit">str_limit</a>
			<a href="#method-str-ordered-uuid">Str::orderedUuid</a>
			<a href="#method-str-plural">str_plural</a>
			<a href="#method-str-random">str_random</a>
			<a href="#method-str-replace-array">str_replace_array</a>
			<a href="#method-str-replace-first">str_replace_first</a>
			<a href="#method-str-replace-last">str_replace_last</a>
			<a href="#method-str-singular">str_singular</a>
			<a href="#method-str-slug">str_slug</a>
			<a href="#method-str-start">str_start</a>
			<a href="#method-studly-case">studly_case</a>
			<a href="#method-title-case">title_case</a>
			<a href="#method-trans">trans</a>
			<a href="#method-trans-choice">trans_choice</a>
			<a href="#method-str-uuid">Str::uuid</a>
	</div>
### URLs
	<div class="collection-method-list">
	<a href="#method-action">action</a>
			<a href="#method-asset">asset</a>
			<a href="#method-secure-asset">secure_asset</a>
			<a href="#method-route">route</a>
			<a href="#method-secure-url">secure_url</a>
			<a href="#method-url">url</a>
	</div>
### Miscellaneous
	<div class="collection-method-list">
	<a href="#method-abort">abort</a>
			<a href="#method-abort-if">abort_if</a>
			<a href="#method-abort-unless">abort_unless</a>
			<a href="#method-app">app</a>
			<a href="#method-auth">auth</a>
			<a href="#method-back">back</a>
			<a href="#method-bcrypt">bcrypt</a>
			<a href="#method-blank">blank</a>
			<a href="#method-broadcast">broadcast</a>
			<a href="#method-cache">cache</a>
			<a href="#method-class-uses-recursive">class_uses_recursive</a>
			<a href="#method-collect">collect</a>
			<a href="#method-config">config</a>
			<a href="#method-cookie">cookie</a>
			<a href="#method-csrf-field">csrf_field</a>
			<a href="#method-csrf-token">csrf_token</a>
			<a href="#method-dd">dd</a>
			<a href="#method-decrypt">decrypt</a>
			<a href="#method-dispatch">dispatch</a>
			<a href="#method-dispatch-now">dispatch_now</a>
			<a href="#method-dump">dump</a>
			<a href="#method-encrypt">encrypt</a>
			<a href="#method-env">env</a>
			<a href="#method-event">event</a>
			<a href="#method-factory">factory</a>
			<a href="#method-filled">filled</a>
			<a href="#method-info">info</a>
			<a href="#method-logger">logger</a>
			<a href="#method-method-field">method_field</a>
			<a href="#method-now">now</a>
			<a href="#method-old">old</a>
			<a href="#method-optional">optional</a>
			<a href="#method-policy">policy</a>
			<a href="#method-redirect">redirect</a>
			<a href="#method-report">report</a>
			<a href="#method-request">request</a>
			<a href="#method-rescue">rescue</a>
			<a href="#method-resolve">resolve</a>
			<a href="#method-response">response</a>
			<a href="#method-retry">retry</a>
			<a href="#method-session">session</a>
			<a href="#method-tap">tap</a>
			<a href="#method-today">today</a>
			<a href="#method-throw-if">throw_if</a>
			<a href="#method-throw-unless">throw_unless</a>
			<a href="#method-trait-uses-recursive">trait_uses_recursive</a>
			<a href="#method-transform">transform</a>
			<a href="#method-validator">validator</a>
			<a href="#method-value">value</a>
			<a href="#method-view">view</a>
			<a href="#method-with">with</a>
	</div>
<a name="method-listing"></a>
## <a href="#method-listing">Method Listing</a>
	<style>
		#collection-method code {
			font-size: 14px;
		}

		#collection-method:not(.first-collection-method) {
			margin-top: 50px;
		}
	</style>
<a name="arrays"></a>
## <a href="#arrays">Arrays & Objects</a>
<a name="method-array-add"></a>
	<h4 id="collection-method" class="first-collection-method">array_add()
The array_add function adds a given key / value pair to an array if the given key doesn't already exist in the array:
```php
$array = array_add(['name' => 'Desk'], 'price', 100);

// ['name' => 'Desk', 'price' => 100]
```
<a name="method-array-collapse"></a>
	<h4 id="collection-method">array_collapse()
The array_collapse function collapses an array of arrays into a single array:
```php
$array = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);

// [1, 2, 3, 4, 5, 6, 7, 8, 9]
```
<a name="method-array-divide"></a>
	<h4 id="collection-method">array_divide()
The array_divide function returns two arrays, one containing the keys, and the other containing the values of the given array:
```php
[$keys, $values] = array_divide(['name' => 'Desk']);

// $keys: ['name']

// $values: ['Desk']
```
<a name="method-array-dot"></a>
	<h4 id="collection-method">array_dot()
The array_dot function flattens a multi-dimensional array into a single level array that uses "dot" notation to indicate depth:
```php
$array = ['products' => ['desk' => ['price' => 100]]];

$flattened = array_dot($array);

// ['products.desk.price' => 100]
```
<a name="method-array-except"></a>
	<h4 id="collection-method">array_except()
The array_except function removes the given key / value pairs from an array:
```php
$array = ['name' => 'Desk', 'price' => 100];

$filtered = array_except($array, ['price']);

// ['name' => 'Desk']
```
<a name="method-array-first"></a>
	<h4 id="collection-method">array_first()
The array_first function returns the first element of an array passing a given truth test:
```php
$array = [100, 200, 300];

$first = array_first($array, function ($value, $key) {
    return $value >= 150;
});

// 200
```
A default value may also be passed as the third parameter to the method. This value will be returned if no value passes the truth test:
```php
$first = array_first($array, $callback, $default);
```
<a name="method-array-flatten"></a>
	<h4 id="collection-method">array_flatten()
The array_flatten function flattens a multi-dimensional array into a single level array:
```php
$array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];

$flattened = array_flatten($array);

// ['Joe', 'PHP', 'Ruby']
```
<a name="method-array-forget"></a>
	<h4 id="collection-method">array_forget()
The array_forget function removes a given key / value pair from a deeply nested array using "dot" notation:
```php
$array = ['products' => ['desk' => ['price' => 100]]];

array_forget($array, 'products.desk');

// ['products' => []]
```
<a name="method-array-get"></a>
	<h4 id="collection-method">array_get()
The array_get function retrieves a value from a deeply nested array using "dot" notation:
```php
$array = ['products' => ['desk' => ['price' => 100]]];

$price = array_get($array, 'products.desk.price');

// 100
```
The array_get function also accepts a default value, which will be returned if the specific key is not found:
```php
$discount = array_get($array, 'products.desk.discount', 0);

// 0
```
<a name="method-array-has"></a>
	<h4 id="collection-method">array_has()
The array_has function checks whether a given item or items exists in an array using "dot" notation:
```php
$array = ['product' => ['name' => 'Desk', 'price' => 100]];

$contains = array_has($array, 'product.name');

// true

$contains = array_has($array, ['product.price', 'product.discount']);

// false
```
<a name="method-array-last"></a>
	<h4 id="collection-method">array_last()
The array_last function returns the last element of an array passing a given truth test:
```php
$array = [100, 200, 300, 110];

$last = array_last($array, function ($value, $key) {
    return $value >= 150;
});

// 300
```
A default value may be passed as the third argument to the method. This value will be returned if no value passes the truth test:
```php
$last = array_last($array, $callback, $default);
```
<a name="method-array-only"></a>
	<h4 id="collection-method">array_only()
The array_only function returns only the specified key / value pairs from the given array:
```php
$array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];

$slice = array_only($array, ['name', 'price']);

// ['name' => 'Desk', 'price' => 100]
```
<a name="method-array-pluck"></a>
	<h4 id="collection-method">array_pluck()
The array_pluck function retrieves all of the values for a given key from an array:
```php
$array = [
    ['developer' => ['id' => 1, 'name' => 'Taylor']],
    ['developer' => ['id' => 2, 'name' => 'Abigail']],
];

$names = array_pluck($array, 'developer.name');

// ['Taylor', 'Abigail']
```
You may also specify how you wish the resulting list to be keyed:
```php
$names = array_pluck($array, 'developer.name', 'developer.id');

// [1 => 'Taylor', 2 => 'Abigail']
```
<a name="method-array-prepend"></a>
	<h4 id="collection-method">array_prepend()
The array_prepend function will push an item onto the beginning of an array:
```php
$array = ['one', 'two', 'three', 'four'];

$array = array_prepend($array, 'zero');

// ['zero', 'one', 'two', 'three', 'four']
```
If needed, you may specify the key that should be used for the value:
```php
$array = ['price' => 100];

$array = array_prepend($array, 'Desk', 'name');

// ['name' => 'Desk', 'price' => 100]
```
<a name="method-array-pull"></a>
	<h4 id="collection-method">array_pull()
The array_pull function returns and removes a key / value pair from an array:
```php
$array = ['name' => 'Desk', 'price' => 100];

$name = array_pull($array, 'name');

// $name: Desk

// $array: ['price' => 100]
```
A default value may be passed as the third argument to the method. This value will be returned if the key doesn't exist:
```php
$value = array_pull($array, $key, $default);
```
<a name="method-array-random"></a>
	<h4 id="collection-method">array_random()
The array_random function returns a random value from an array:
```php
$array = [1, 2, 3, 4, 5];

$random = array_random($array);

// 4 - (retrieved randomly)
```
You may also specify the number of items to return as an optional second argument. Note that providing this argument will return an array, even if only one item is desired:
```php
$items = array_random($array, 2);

// [2, 5] - (retrieved randomly)
```
<a name="method-array-set"></a>
	<h4 id="collection-method">array_set()
The array_set function sets a value within a deeply nested array using "dot" notation:
```php
$array = ['products' => ['desk' => ['price' => 100]]];

array_set($array, 'products.desk.price', 200);

// ['products' => ['desk' => ['price' => 200]]]
```
<a name="method-array-sort"></a>
	<h4 id="collection-method">array_sort()
The array_sort function sorts an array by its values:
```php
$array = ['Desk', 'Table', 'Chair'];

$sorted = array_sort($array);

// ['Chair', 'Desk', 'Table']
```
You may also sort the array by the results of the given Closure:
```php
$array = [
    ['name' => 'Desk'],
    ['name' => 'Table'],
    ['name' => 'Chair'],
];

$sorted = array_values(array_sort($array, function ($value) {
    return $value['name'];
}));

/*
    [
        ['name' => 'Chair'],
        ['name' => 'Desk'],
        ['name' => 'Table'],
    ]
*/
```
<a name="method-array-sort-recursive"></a>
	<h4 id="collection-method">array_sort_recursive()
The array_sort_recursive function recursively sorts an array using the sort function for numeric sub=arrays and ksort for associative sub-arrays:
```php
$array = [
    ['Roman', 'Taylor', 'Li'],
    ['PHP', 'Ruby', 'JavaScript'],
    ['one' => 1, 'two' => 2, 'three' => 3],
];

$sorted = array_sort_recursive($array);

/*
    [
        ['JavaScript', 'PHP', 'Ruby'],
        ['one' => 1, 'three' => 3, 'two' => 2],
        ['Li', 'Roman', 'Taylor'],
    ]
*/
```
<a name="method-array-where"></a>
	<h4 id="collection-method">array_where()
The array_where function filters an array using the given Closure:
```php
$array = [100, '200', 300, '400', 500];

$filtered = array_where($array, function ($value, $key) {
    return is_string($value);
});

// [1 => '200', 3 => '400']
```
<a name="method-array-wrap"></a>
	<h4 id="collection-method">array_wrap()
The array_wrap function wraps the given value in an array. If the given value is already an array it will not be changed:
```php
$string = 'Space MVC';

$array = array_wrap($string);

// ['Space MVC']
```
If the given value is null, an empty array will be returned:
```php
$nothing = null;

$array = array_wrap($nothing);

// []
```
<a name="method-data-fill"></a>
	<h4 id="collection-method">data_fill()
The data_fill function sets a missing value within a nested array or object using "dot" notation:
```php
$data = ['products' => ['desk' => ['price' => 100]]];

data_fill($data, 'products.desk.price', 200);

// ['products' => ['desk' => ['price' => 100]]]

data_fill($data, 'products.desk.discount', 10);

// ['products' => ['desk' => ['price' => 100, 'discount' => 10]]]
```
This function also accepts asterisks as wildcards and will fill the target accordingly:
```php
$data = [
    'products' => [
        ['name' => 'Desk 1', 'price' => 100],
        ['name' => 'Desk 2'],
    ],
];

data_fill($data, 'products.*.price', 200);

/*
    [
        'products' => [
            ['name' => 'Desk 1', 'price' => 100],
            ['name' => 'Desk 2', 'price' => 200],
        ],
    ]
*/
```
<a name="method-data-get"></a>
	<h4 id="collection-method">data_get()
The data_get function retrieves a value from a nested array or object using "dot" notation:
```php
$data = ['products' => ['desk' => ['price' => 100]]];

$price = data_get($data, 'products.desk.price');

// 100
```
The data_get function also accepts a default value, which will be returned if the specified key is not found:
```php
$discount = data_get($data, 'products.desk.discount', 0);

// 0
```
The function also accepts wildcards using asterisks, which may target any key of the array or object:
```php
$data = [
    'product-one' => ['name' => 'Desk 1', 'price' => 100],
    'product-two' => ['name' => 'Desk 2', 'price' => 150],
];

data_get($data, '*.name');

// ['Desk 1', 'Desk 2'];
```
<a name="method-data-set"></a>
	<h4 id="collection-method">data_set()
The data_set function sets a value within a nested array or object using "dot" notation:
```php
$data = ['products' => ['desk' => ['price' => 100]]];

data_set($data, 'products.desk.price', 200);

// ['products' => ['desk' => ['price' => 200]]]
```
This function also accepts wildcards and will set values on the target accordingly:
```php
$data = [
    'products' => [
        ['name' => 'Desk 1', 'price' => 100],
        ['name' => 'Desk 2', 'price' => 150],
    ],
];

data_set($data, 'products.*.price', 200);

/*
    [
        'products' => [
            ['name' => 'Desk 1', 'price' => 200],
            ['name' => 'Desk 2', 'price' => 200],
        ],
    ]
*/
```
By default, any existing values are overwritten. If you wish to only set a value if it doesn't exist, you may pass false as the third argument:
```php
$data = ['products' => ['desk' => ['price' => 100]]];

data_set($data, 'products.desk.price', 200, false);

// ['products' => ['desk' => ['price' => 100]]]
```
<a name="method-head"></a>
	<h4 id="collection-method">head()
The head function returns the first element in the given array:
```php
$array = [100, 200, 300];

$first = head($array);

// 100
```
<a name="method-last"></a>
	<h4 id="collection-method">last()
The last function returns the last element in the given array:
```php
$array = [100, 200, 300];

$last = last($array);

// 300
```
<a name="paths"></a>
## <a href="#paths">Paths</a>
<a name="method-app-path"></a>
	<h4 id="collection-method">app_path()
The app_path function returns the fully qualified path to the app directory. You may also use the app_path function to generate a fully qualified path to a file relative to the application directory:
```php
$path = app_path();

$path = app_path('Http/Controllers/Controller.php');
```
<a name="method-base-path"></a>
	<h4 id="collection-method">base_path()
The base_path function returns the fully qualified path to the project root. You may also use the base_path function to generate a fully qualified path to a given file relative to the project root directory:
```php
$path = base_path();

$path = base_path('vendor/bin');
```
<a name="method-config-path"></a>
	<h4 id="collection-method">config_path()
The config_path function returns the fully qualified path to the config directory. You may also use the config_path function to generate a fully qualified path to a given file within the application's configuration directory:
```php
$path = config_path();

$path = config_path('app.php');
```
<a name="method-database-path"></a>
	<h4 id="collection-method">database_path()
The database_path function returns the fully qualified path to the database directory. You may also use the database_path function to generate a fully qualified path to a given file within the database directory:
```php
$path = database_path();

$path = database_path('factories/UserFactory.php');
```
<a name="method-mix"></a>
	<h4 id="collection-method">mix()
The mix function returns the path to a <a href="/docs/5.7/mix">versioned Mix file</a>:
```php
$path = mix('css/app.css');
```
<a name="method-public-path"></a>
	<h4 id="collection-method">public_path()
The public_path function returns the fully qualified path to the public directory. You may also use the public_path function to generate a fully qualified path to a given file within the public directory:
```php
$path = public_path();

$path = public_path('css/app.css');
```
<a name="method-resource-path"></a>
	<h4 id="collection-method">resource_path()
The resource_path function returns the fully qualified path to the resources directory. You may also use the resource_path function to generate a fully qualified path to a given file within the resources directory:
```php
$path = resource_path();

$path = resource_path('sass/app.scss');
```
<a name="method-storage-path"></a>
	<h4 id="collection-method">storage_path()
The storage_path function returns the fully qualified path to the storage directory. You may also use the storage_path function to generate a fully qualified path to a given file within the storage directory:
```php
$path = storage_path();

$path = storage_path('app/file.txt');
```
<a name="strings"></a>
## <a href="#strings">Strings</a>
<a name="method-__"></a>
	<h4 id="collection-method">__()
The __ function translates the given translation string or translation key using your <a href="/docs/5.7/localization">localization files</a>:
```php
echo __('Welcome to our application');

echo __('messages.welcome');
```
If the specified translation string or key does not exist, the __ function will return the given value. So, using the example above, the __ function would return messages.welcome if that translation key does not exist.
<a name="method-camel-case"></a>
	<h4 id="collection-method">camel_case()
The camel_case function converts the given string to camelCase:
```php
$converted = camel_case('foo_bar');

// fooBar
```
<a name="method-class-basename"></a>
	<h4 id="collection-method">class_basename()
The class_basename returns the class name of the given class with the class' namespace removed:
```php
$class = class_basename('Foo\Bar\Baz');

// Baz
```
<a name="method-e"></a>
	<h4 id="collection-method">e()
The e function runs PHP's htmlspecialchars function with the double_encode option set to true by default:
```php
echo e('<html>foo</html>');

// &lt;html&gt;foo&lt;/html&gt;
```
<a name="method-ends-with"></a>
	<h4 id="collection-method">ends_with()
The ends_with function determines if the given string ends with the given value:
```php
$result = ends_with('This is my name', 'name');

// true
```
<a name="method-kebab-case"></a>
	<h4 id="collection-method">kebab_case()
The kebab_case function converts the given string to kebab-case:
```php
$converted = kebab_case('fooBar');

// foo-bar
```
<a name="method-preg-replace-array"></a>
	<h4 id="collection-method">preg_replace_array()
The preg_replace_array function replaces a given pattern in the string sequentially using an array:
```php
$string = 'The event will take place between :start and :end';

$replaced = preg_replace_array('/:[a-z_]+/', ['8:30', '9:00'], $string);

// The event will take place between 8:30 and 9:00
```
<a name="method-snake-case"></a>
	<h4 id="collection-method">snake_case()
The snake_case function converts the given string to snake_case:
```php
$converted = snake_case('fooBar');

// foo_bar
```
<a name="method-starts-with"></a>
	<h4 id="collection-method">starts_with()
The starts_with function determines if the given string begins with the given value:
```php
$result = starts_with('This is my name', 'This');

// true
```
<a name="method-str-after"></a>
	<h4 id="collection-method">str_after()
The str_after function returns everything after the given value in a string:
```php
$slice = str_after('This is my name', 'This is');

// ' my name'
```
<a name="method-str-before"></a>
	<h4 id="collection-method">str_before()
The str_before function returns everything before the given value in a string:
```php
$slice = str_before('This is my name', 'my name');

// 'This is '
```
<a name="method-str-contains"></a>
	<h4 id="collection-method">str_contains()
The str_contains function determines if the given string contains the given value (case sensitive):
```php
$contains = str_contains('This is my name', 'my');

// true
```
You may also pass an array of values to determine if the given string contains any of the values:
```php
$contains = str_contains('This is my name', ['my', 'foo']);

// true
```
<a name="method-str-finish"></a>
	<h4 id="collection-method">str_finish()
The str_finish function adds a single instance of the given value to a string if it does not already end with the value:
```php
$adjusted = str_finish('this/string', '/');

// this/string/

$adjusted = str_finish('this/string/', '/');

// this/string/
```
<a name="method-str-is"></a>
	<h4 id="collection-method">str_is()
The str_is function determines if a given string matches a given pattern. Asterisks may be used to indicate wildcards:
```php
$matches = str_is('foo*', 'foobar');

// true

$matches = str_is('baz*', 'foobar');

// false
```
<a name="method-str-limit"></a>
	<h4 id="collection-method">str_limit()
The str_limit function truncates the given string at the specified length:
```php
$truncated = str_limit('The quick brown fox jumps over the lazy dog', 20);

// The quick brown fox...
```
You may also pass a third argument to change the string that will be appended to the end:
```php
$truncated = str_limit('The quick brown fox jumps over the lazy dog', 20, ' (...)');

// The quick brown fox (...)
```
<a name="method-str-ordered-uuid"></a>
	<h4 id="collection-method">Str::orderedUuid()
The Str::orderedUuid method generates a "timestamp first" UUID that may be efficiently stored in an indexed database column:
```php
use Illuminate\Support\Str;

return (string) Str::orderedUuid();
```
<a name="method-str-plural"></a>
	<h4 id="collection-method">str_plural()
The str_plural function converts a string to its plural form. This function currently only supports the English language:
```php
$plural = str_plural('car');

// cars

$plural = str_plural('child');

// children
```
You may provide an integer as a second argument to the function to retrieve the singular or plural form of the string:
```php
$plural = str_plural('child', 2);

// children

$plural = str_plural('child', 1);

// child
```
<a name="method-str-random"></a>
	<h4 id="collection-method">str_random()
The str_random function generates a random string of the specified length. This function uses PHP's random_bytes function:
```php
$random = str_random(40);
```
<a name="method-str-replace-array"></a>
	<h4 id="collection-method">str_replace_array()
The str_replace_array function replaces a given value in the string sequentially using an array:
```php
$string = 'The event will take place between ? and ?';

$replaced = str_replace_array('?', ['8:30', '9:00'], $string);

// The event will take place between 8:30 and 9:00
```
<a name="method-str-replace-first"></a>
	<h4 id="collection-method">str_replace_first()
The str_replace_first function replaces the first occurrence of a given value in a string:
```php
$replaced = str_replace_first('the', 'a', 'the quick brown fox jumps over the lazy dog');

// a quick brown fox jumps over the lazy dog
```
<a name="method-str-replace-last"></a>
	<h4 id="collection-method">str_replace_last()
The str_replace_last function replaces the last occurrence of a given value in a string:
```php
$replaced = str_replace_last('the', 'a', 'the quick brown fox jumps over the lazy dog');

// the quick brown fox jumps over a lazy dog
```
<a name="method-str-singular"></a>
	<h4 id="collection-method">str_singular()
The str_singular function converts a string to its singular form. This function currently only supports the English language:
```php
$singular = str_singular('cars');

// car

$singular = str_singular('children');

// child
```
<a name="method-str-slug"></a>
	<h4 id="collection-method">str_slug()
The str_slug function generates a URL friendly "slug" from the given string:
```php
$slug = str_slug('Space MVC 5 Framework', '-');

// Space MVC
```
<a name="method-str-start"></a>
	<h4 id="collection-method">str_start()
The str_start function adds a single instance of the given value to a string if it does not already start with the value:
```php
$adjusted = str_start('this/string', '/');

// /this/string

$adjusted = str_start('/this/string', '/');

// /this/string
```
<a name="method-studly-case"></a>
	<h4 id="collection-method">studly_case()
The studly_case function converts the given string to StudlyCase:
```php
$converted = studly_case('foo_bar');

// FooBar
```
<a name="method-title-case"></a>
	<h4 id="collection-method">title_case()
The title_case function converts the given string to Title Case:
```php
$converted = title_case('a nice title uses the correct case');

// A Nice Title Uses The Correct Case
```
<a name="method-trans"></a>
	<h4 id="collection-method">trans()
The trans function translates the given translation key using your <a href="/docs/5.7/localization">localization files</a>:
```php
echo trans('messages.welcome');
```
If the specified translation key does not exist, the trans function will return the given key. So, using the example above, the trans function would return messages.welcome if the translation key does not exist.
<a name="method-trans-choice"></a>
	<h4 id="collection-method">trans_choice()
The trans_choice function translates the given translation key with inflection:
```php
echo trans_choice('messages.notifications', $unreadCount);
```
If the specified translation key does not exist, the trans_choice function will return the given key. So, using the example above, the trans_choice function would return messages.notifications if the translation key does not exist.
<a name="method-str-uuid"></a>
	<h4 id="collection-method">Str::uuid()
The Str::uuid method generates a UUID (version 4):
```php
use Illuminate\Support\Str;

return (string) Str::uuid();
```
<a name="urls"></a>
## <a href="#urls">URLs</a>
<a name="method-action"></a>
	<h4 id="collection-method">action()
The action function generates a URL for the given controller action. You do not need to pass the full namespace of the controller. Instead, pass the controller class name relative to the App\Http\Controllers namespace:
```php
$url = action('HomeController@index');

$url = action([HomeController::class, 'index']);
```
If the method accepts route parameters, you may pass them as the second argument to the method:
```php
$url = action('UserController@profile', ['id' => 1]);
```
<a name="method-asset"></a>
	<h4 id="collection-method">asset()
The asset function generates a URL for an asset using the current scheme of the request (HTTP or HTTPS):
```php
$url = asset('img/photo.jpg');
```
<a name="method-secure-asset"></a>
	<h4 id="collection-method">secure_asset()
The secure_asset function generates a URL for an asset using HTTPS:
```php
$url = secure_asset('img/photo.jpg');
```
<a name="method-route"></a>
	<h4 id="collection-method">route()
The route function generates a URL for the given named route:
```php
$url = route('routeName');
```
If the route accepts parameters, you may pass them as the second argument to the method:
```php
$url = route('routeName', ['id' => 1]);
```
By default, the route function generates an absolute URL. If you wish to generate a relative URL, you may pass false as the third argument:
```php
$url = route('routeName', ['id' => 1], false);
```
<a name="method-secure-url"></a>
	<h4 id="collection-method">secure_url()
The secure_url function generates a fully qualified HTTPS URL to the given path:
```php
$url = secure_url('user/profile');

$url = secure_url('user/profile', [1]);
```
<a name="method-url"></a>
	<h4 id="collection-method">url()
The url function generates a fully qualified URL to the given path:
```php
$url = url('user/profile');

$url = url('user/profile', [1]);
```
If no path is provided, a Illuminate\Routing\UrlGenerator instance is returned:
```php
$current = url()->current();

$full = url()->full();

$previous = url()->previous();
```
<a name="miscellaneous"></a>
## <a href="#miscellaneous">Miscellaneous</a>
<a name="method-abort"></a>
	<h4 id="collection-method">abort()
The abort function throws <a href="/docs/5.7/errors#http-exceptions">an HTTP exception</a> which will be rendered by the <a href="/docs/5.7/errors#the-exception-handler">exception handler</a>:
```php
abort(403);
```
You may also provide the exception's response text and custom response headers:
```php
abort(403, 'Unauthorized.', $headers);
```
<a name="method-abort-if"></a>
	<h4 id="collection-method">abort_if()
The abort_if function throws an HTTP exception if a given boolean expression evaluates to true:
```php
abort_if(! Auth::user()->isAdmin(), 403);
```
Like the abort method, you may also provide the exception's response text as the third argument and an array of custom response headers as the fourth argument.
<a name="method-abort-unless"></a>
	<h4 id="collection-method">abort_unless()
The abort_unless function throws an HTTP exception if a given boolean expression evaluates to false:
```php
abort_unless(Auth::user()->isAdmin(), 403);
```
Like the abort method, you may also provide the exception's response text as the third argument and an array of custom response headers as the fourth argument.
<a name="method-app"></a>
	<h4 id="collection-method">app()
The app function returns the <a href="/docs/5.7/container">service container</a> instance:
```php
$container = app();
```
You may pass a class or interface name to resolve it from the container:
```php
$api = app('HelpSpot\API');
```
<a name="method-auth"></a>
	<h4 id="collection-method">auth()
The auth function returns an <a href="/docs/5.7/authentication">authenticator</a> instance. You may use it instead of the Auth facade for convenience:
```php
$user = auth()->user();
```
If needed, you may specify which guard instance you would like to access:
```php
$user = auth('admin')->user();
```
<a name="method-back"></a>
	<h4 id="collection-method">back()
The back function generates a <a href="/docs/5.7/responses#redirects">redirect HTTP response</a> to the user's previous location:
```php
return back($status = 302, $headers = [], $fallback = false);

return back();
```
<a name="method-bcrypt"></a>
	<h4 id="collection-method">bcrypt()
The bcrypt function <a href="/docs/5.7/hashing">hashes</a> the given value using Bcrypt. You may use it as an alternative to the Hash facade:
```php
$password = bcrypt('my-secret-password');
```
<a name="method-broadcast"></a>
	<h4 id="collection-method">broadcast()
The broadcast function <a href="/docs/5.7/broadcasting">broadcasts</a> the given <a href="/docs/5.7/events">event</a> to its listeners:
```php
broadcast(new UserRegistered($user));
```
<a name="method-blank"></a>
	<h4 id="collection-method">blank()
The blank function returns whether the given value is "blank":
```php
blank('');
blank('   ');
blank(null);
blank(collect());

// true

blank(0);
blank(true);
blank(false);

// false
```
For the inverse of blank, see the <a href="#method-filled">filled</a> method.
<a name="method-cache"></a>
	<h4 id="collection-method">cache()
The cache function may be used to get values from the <a href="/docs/5.7/cache">cache</a>. If the given key does not exist in the cache, an optional default value will be returned:
```php
$value = cache('key');

$value = cache('key', 'default');
```
You may add items to the cache by passing an array of key / value pairs to the function. You should also pass the number of minutes or duration the cached value should be considered valid:
```php
cache(['key' => 'value'], 5);

cache(['key' => 'value'], now()->addSeconds(10));
```
<a name="method-class-uses-recursive"></a>
	<h4 id="collection-method">class_uses_recursive()
The class_uses_recursive function returns all traits used by a class, including traits used by all of its parent classes:
```php
$traits = class_uses_recursive(App\User::class);
```
<a name="method-collect"></a>
	<h4 id="collection-method">collect()
The collect function creates a <a href="/docs/5.7/collections">collection</a> instance from the given value:
```php
$collection = collect(['taylor', 'abigail']);
```
<a name="method-config"></a>
	<h4 id="collection-method">config()
The config function gets the value of a <a href="/docs/5.7/configuration">configuration</a> variable. The configuration values may be accessed using "dot" syntax, which includes the name of the file and the option you wish to access. A default value may be specified and is returned if the configuration option does not exist:
```php
$value = config('app.timezone');

$value = config('app.timezone', $default);
```
You may set configuration variables at runtime by passing an array of key / value pairs:
```php
config(['app.debug' => true]);
```
<a name="method-cookie"></a>
	<h4 id="collection-method">cookie()
The cookie function creates a new <a href="/docs/5.7/requests#cookies">cookie</a> instance:
```php
$cookie = cookie('name', 'value', $minutes);
```
<a name="method-csrf-field"></a>
	<h4 id="collection-method">csrf_field()
The csrf_field function generates an HTML hidden input field containing the value of the CSRF token. For example, using <a href="/docs/5.7/blade">Blade syntax</a>:
```php
{{ csrf_field() }}
```
<a name="method-csrf-token"></a>
	<h4 id="collection-method">csrf_token()
The csrf_token function retrieves the value of the current CSRF token:
```php
$token = csrf_token();
```
<a name="method-dd"></a>
	<h4 id="collection-method">dd()
The dd function dumps the given variables and ends execution of the script:
```php
dd($value);

dd($value1, $value2, $value3, ...);
```
If you do not want to halt the execution of your script, use the <a href="#method-dump">dump</a> function instead.
<a name="method-decrypt"></a>
	<h4 id="collection-method">decrypt()
The decrypt function decrypts the given value using Space MVC's <a href="/docs/5.7/encryption">encrypter</a>:
```php
$decrypted = decrypt($encrypted_value);
```
<a name="method-dispatch"></a>
	<h4 id="collection-method">dispatch()
The dispatch function pushes the given <a href="/docs/5.7/queues#creating-jobs">job</a> onto the Space MVC <a href="/docs/5.7/queues">job queue</a>:
```php
dispatch(new App\Jobs\SendEmails);
```
<a name="method-dispatch-now"></a>
	<h4 id="collection-method">dispatch_now()
The dispatch_now function runs the given <a href="/docs/5.7/queues#creating-jobs">job</a> immediately and returns the value from its handle method:
```php
$result = dispatch_now(new App\Jobs\SendEmails);
```
<a name="method-dump"></a>
	<h4 id="collection-method">dump()
The dump function dumps the given variables:
```php
dump($value);

dump($value1, $value2, $value3, ...);
```
If you want to stop executing the script after dumping the variables, use the <a href="#method-dd">dd</a> function instead.
You may use Artisan's dump-server command to intercept all dump calls and display them in your console window instead of your browser.
<a name="method-encrypt"></a>
	<h4 id="collection-method">encrypt()
The encrypt function encrypts the given value using Space MVC's <a href="/docs/5.7/encryption">encrypter</a>:
```php
$encrypted = encrypt($unencrypted_value);
```
<a name="method-env"></a>
	<h4 id="collection-method">env()
The env function retrieves the value of an <a href="/docs/5.7/configuration#environment-configuration">environment variable</a> or returns a default value:
```php
$env = env('APP_ENV');

// Returns 'production' if APP_ENV is not set...
$env = env('APP_ENV', 'production');
```
If you execute the config:cache command during your deployment process, you should be sure that you are only calling the env function from within your configuration files. Once the configuration has been cached, the .env file will not be loaded and all calls to the env function will return null.
<a name="method-event"></a>
	<h4 id="collection-method">event()
The event function dispatches the given <a href="/docs/5.7/events">event</a> to its listeners:
```php
event(new UserRegistered($user));
```
<a name="method-factory"></a>
	<h4 id="collection-method">factory()
The factory function creates a model factory builder for a given class, name, and amount. It can be used while <a href="/docs/5.7/database-testing#writing-factories">testing</a> or <a href="/docs/5.7/seeding#using-model-factories">seeding</a>:
```php
$user = factory(App\User::class)->make();
```
<a name="method-filled"></a>
	<h4 id="collection-method">filled()
The filled function returns whether the given value is not "blank":
```php
filled(0);
filled(true);
filled(false);

// true

filled('');
filled('   ');
filled(null);
filled(collect());

// false
```
For the inverse of filled, see the <a href="#method-blank">blank</a> method.
<a name="method-info"></a>
	<h4 id="collection-method">info()
The info function will write information to the <a href="/docs/5.7/errors#logging">log</a>:
```php
info('Some helpful information!');
```
An array of contextual data may also be passed to the function:
```php
info('User login attempt failed.', ['id' => $user->id]);
```
<a name="method-logger"></a>
	<h4 id="collection-method">logger()
The logger function can be used to write a debug level message to the <a href="/docs/5.7/errors#logging">log</a>:
```php
logger('Debug message');
```
An array of contextual data may also be passed to the function:
```php
logger('User has logged in.', ['id' => $user->id]);
```
A <a href="/docs/5.7/errors#logging">logger</a> instance will be returned if no value is passed to the function:
```php
logger()->error('You are not allowed here.');
```
<a name="method-method-field"></a>
	<h4 id="collection-method">method_field()
The method_field function generates an HTML hidden input field containing the spoofed value of the form's HTTP verb. For example, using <a href="/docs/5.7/blade">Blade syntax</a>:
```php
<form method="POST">
    {{ method_field('DELETE') }}
</form>
```
<a name="method-now"></a>
	<h4 id="collection-method">now()
The now function creates a new Illuminate\Support\Carbon instance for the current time:
```php
$now = now();
```
<a name="method-old"></a>
	<h4 id="collection-method">old()
The old function <a href="/docs/5.7/requests#retrieving-input">retrieves</a> an <a href="/docs/5.7/requests#old-input">old input</a> value flashed into the session:
```php
$value = old('value');

$value = old('value', 'default');
```
<a name="method-optional"></a>
	<h4 id="collection-method">optional()
The optional function accepts any argument and allows you to access properties or call methods on that object. If the given object is null, properties and methods will return null instead of causing an error:
```php
return optional($user->address)->street;

{!! old('name', optional($user)->name) !!}
```
The optional function also accepts a Closure as its second argument. The Closure will be invoked if the value provided as the first argument is not null:
```php
return optional(User::find($id), function ($user) {
    return new DummyUser;
});
```
<a name="method-policy"></a>
	<h4 id="collection-method">policy()
The policy method retrieves a <a href="/docs/5.7/authorization#creating-policies">policy</a> instance for a given class:
```php
$policy = policy(App\User::class);
```
<a name="method-redirect"></a>
	<h4 id="collection-method">redirect()
The redirect function returns a <a href="/docs/5.7/responses#redirects">redirect HTTP response</a>, or returns the redirector instance if called with no arguments:
```php
return redirect($to = null, $status = 302, $headers = [], $secure = null);

return redirect('/home');

return redirect()->route('route.name');
```
<a name="method-report"></a>
	<h4 id="collection-method">report()
The report function will report an exception using your <a href="/docs/5.7/errors#the-exception-handler">exception handler</a>'s report method:
```php
report($e);
```
<a name="method-request"></a>
	<h4 id="collection-method">request()
The request function returns the current <a href="/docs/5.7/requests">request</a> instance or obtains an input item:
```php
$request = request();

$value = request('key', $default);
```
<a name="method-rescue"></a>
	<h4 id="collection-method">rescue()
The rescue function executes the given Closure and catches any exceptions that occur during its execution. All exceptions that are caught will be sent to your <a href="/docs/5.7/errors#the-exception-handler">exception handler</a>'s report method; however, the request will continue processing:
```php
return rescue(function () {
    return $this->method();
});
```
You may also pass a second argument to the rescue function. This argument will be the "default" value that should be returned if an exception occurs while executing the Closure:
```php
return rescue(function () {
    return $this->method();
}, false);

return rescue(function () {
    return $this->method();
}, function () {
    return $this->failure();
});
```
<a name="method-resolve"></a>
	<h4 id="collection-method">resolve()
The resolve function resolves a given class or interface name to its instance using the <a href="/docs/5.7/container">service container</a>:
```php
$api = resolve('HelpSpot\API');
```
<a name="method-response"></a>
	<h4 id="collection-method">response()
The response function creates a <a href="/docs/5.7/responses">response</a> instance or obtains an instance of the response factory:
```php
return response('Hello World', 200, $headers);

return response()->json(['foo' => 'bar'], 200, $headers);
```
<a name="method-retry"></a>
	<h4 id="collection-method">retry()
The retry function attempts to execute the given callback until the given maximum attempt threshold is met. If the callback does not throw an exception, its return value will be returned. If the callback throws an exception, it will automatically be retried. If the maximum attempt count is exceeded, the exception will be thrown:
```php
return retry(5, function () {
    // Attempt 5 times while resting 100ms in between attempts...
}, 100);
```
<a name="method-session"></a>
	<h4 id="collection-method">session()
The session function may be used to get or set <a href="/docs/5.7/session">session</a> values:
```php
$value = session('key');
```
You may set values by passing an array of key / value pairs to the function:
```php
session(['chairs' => 7, 'instruments' => 3]);
```
The session store will be returned if no value is passed to the function:
```php
$value = session()->get('key');

session()->put('key', $value);
```
<a name="method-tap"></a>
	<h4 id="collection-method">tap()
The tap function accepts two arguments: an arbitrary $value and a Closure. The $value will be passed to the Closure and then be returned by the tap function. The return value of the Closure is irrelevant:
```php
$user = tap(User::first(), function ($user) {
    $user->name = 'taylor';

    $user->save();
});
```
If no Closure is passed to the tap function, you may call any method on the given $value. The return value of the method you call will always be $value, regardless of what the method actually returns in its definition. For example, the Eloquent update method typically returns an integer. However, we can force the method to return the model itself by chaining the update method call through the tap function:
```php
$user = tap($user)->update([
    'name' => $name,
    'email' => $email,
]);
```
<a name="method-today"></a>
	<h4 id="collection-method">today()
The today function creates a new Illuminate\Support\Carbon instance for the current date:
```php
$today = today();
```
<a name="method-throw-if"></a>
	<h4 id="collection-method">throw_if()
The throw_if function throws the given exception if a given boolean expression evaluates to true:
```php
throw_if(! Auth::user()->isAdmin(), AuthorizationException::class);

throw_if(
    ! Auth::user()->isAdmin(),
    AuthorizationException::class,
    'You are not allowed to access this page'
);
```
<a name="method-throw-unless"></a>
	<h4 id="collection-method">throw_unless()
The throw_unless function throws the given exception if a given boolean expression evaluates to false:
```php
throw_unless(Auth::user()->isAdmin(), AuthorizationException::class);

throw_unless(
    Auth::user()->isAdmin(),
    AuthorizationException::class,
    'You are not allowed to access this page'
);
```
<a name="method-trait-uses-recursive"></a>
	<h4 id="collection-method">trait_uses_recursive()
The trait_uses_recursive function returns all traits used by a trait:
```php
$traits = trait_uses_recursive(\Illuminate\Notifications\Notifiable::class);
```
<a name="method-transform"></a>
	<h4 id="collection-method">transform()
The transform function executes a Closure on a given value if the value is not <a href="#method-blank">blank</a> and returns the result of the Closure:
```php
$callback = function ($value) {
    return $value * 2;
};

$result = transform(5, $callback);

// 10
```
A default value or Closure may also be passed as the third parameter to the method. This value will be returned if the given value is blank:
```php
$result = transform(null, $callback, 'The value is blank');

// The value is blank
```
<a name="method-validator"></a>
	<h4 id="collection-method">validator()
The validator function creates a new <a href="/docs/5.7/validation">validator</a> instance with the given arguments. You may use it instead of the Validator facade for convenience:
```php
$validator = validator($data, $rules, $messages);
```
<a name="method-value"></a>
	<h4 id="collection-method">value()
The value function returns the value it is given. However, if you pass a Closure to the function, the Closure will be executed then its result will be returned:
```php
$result = value(true);

// true

$result = value(function () {
    return false;
});

// false
```
<a name="method-view"></a>
	<h4 id="collection-method">view()
The view function retrieves a <a href="/docs/5.7/views">view</a> instance:
```php
return view('auth.login');
```
<a name="method-with"></a>
	<h4 id="collection-method">with()
The with function returns the value it is given. If a Closure is passed as the second argument to the function, the Closure will be executed and its result will be returned:
```php
$callback = function ($value) {
    return (is_numeric($value)) ? $value * 2 : 0;
};

$result = with(5, $callback);

// 10

$result = with(null, $callback);

// 0

$result = with(5, null);

// 5
```