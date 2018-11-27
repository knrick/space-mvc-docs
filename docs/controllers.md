# Controllers
Instead of defining all of your request handling logic as Closures in route files, you may wish to organize this behavior using Controller classes. Controllers can group related request handling logic into a single class. Controllers are stored in the app/Http/Controllers directory.

<a name="defining-controllers"></a>
### Defining Controllers
Below is an example of a basic controller class. Note that the controller extends the base controller class included with Space MVC. The base class provides a few convenience methods such as the  middleware method, which may be used to attach middleware to controller actions:
```php
<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
```
You can define a route to this controller action like so:
```php
Route::get('user/{id}', 'UserController@show');
```
Now, when a request matches the specified route URI, the show method on the UserController class will be executed. Of course, the route parameters will also be passed to the method.
	Controllers are not required to extend a base class. However, you will not have access to convenience features such as the middleware, validate, and dispatch methods.
<a name="controllers-and-namespaces"></a>
### Controllers &amp; Namespaces
It is very important to note that we did not need to specify the full controller namespace when defining the controller route. Since the RouteServiceProvider loads your route files within a route group that contains the namespace, we only specified the portion of the class name that comes after the App\Http\Controllers portion of the namespace.
If you choose to nest your controllers deeper into the App\Http\Controllers directory, use the specific class name relative to the App\Http\Controllers root namespace. So, if your full controller class is App\Http\Controllers\Photos\AdminController, you should register routes to the controller like so:
```php
Route::get('foo', 'Photos\AdminController@method');
```
<a name="single-action-controllers"></a>