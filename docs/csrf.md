# CSRF Protection
    <ul>
        <li><a href="#csrf-introduction">Introduction</a></li>
        <li><a href="#csrf-excluding-uris">Excluding URIs</a></li>
        <li><a href="#csrf-x-csrf-token">X-CSRF-Token</a></li>
        <li><a href="#csrf-x-xsrf-token">X-XSRF-Token</a></li>
    </ul>
<a name="csrf-introduction"></a>
## <a href="#csrf-introduction">Introduction</a>
Space MVC makes it easy to protect your application from <a href="https://en.wikipedia.org/wiki/Cross-site_request_forgery">cross-site request forgery</a> (CSRF) attacks. Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.
Space MVC automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.
Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the @csrf Blade directive to generate the token field:
```php
<form method="POST" action="/profile">
    @csrf
    ...
</form>
```
The VerifyCsrfToken <a href="/docs/5.7/middleware">middleware</a>, which is included in the web middleware group, will automatically verify that the token in the request input matches the token stored in the session.
#### CSRF Tokens & JavaScript
When building JavaScript driven applications, it is convenient to have your JavaScript HTTP library automatically attach the CSRF token to every outgoing request. By default, the resources/js/bootstrap.js file registers the value of the csrf-token meta tag with the Axios HTTP library. If you are not using this library, you will need to manually configure this behavior for your application.
<a name="csrf-excluding-uris"></a>
## <a href="#csrf-excluding-uris">Excluding URIs From CSRF Protection</a>
Sometimes you may wish to exclude a set of URIs from CSRF protection. For example, if you are using <a href="https://stripe.com">Stripe</a> to process payments and are utilizing their webhook system, you will need to exclude your Stripe webhook handler route from CSRF protection since Stripe will not know what CSRF token to send to your routes.
Typically, you should place these kinds of routes outside of the web middleware group that the RouteServiceProvider applies to all routes in the routes/web.php file. However, you may also exclude the routes by adding their URIs to the $except property of the VerifyCsrfToken middleware:
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'stripe/*',
        'http://example.com/foo/bar',
        'http://example.com/foo/*',
    ];
}
```
The CSRF middleware is automatically disabled when <a href="/docs/5.7/testing">running tests</a>.
<a name="csrf-x-csrf-token"></a>
## <a href="#csrf-x-csrf-token">X-CSRF-TOKEN</a>
In addition to checking for the CSRF token as a POST parameter, the VerifyCsrfToken middleware will also check for the X-CSRF-TOKEN request header. You could, for example, store the token in a HTML meta tag:
```php
<meta name="csrf-token" content="{{ csrf_token() }}">
```
Then, once you have created the meta tag, you can instruct a library like jQuery to automatically add the token to all request headers. This provides simple, convenient CSRF protection for your AJAX based applications:
```php
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
```
By default, the resources/js/bootstrap.js file registers the value of the csrf-token meta tag with the Axios HTTP library. If you are not using this library, you will need to manually configure this behavior for your application.
<a name="csrf-x-xsrf-token"></a>
## <a href="#csrf-x-xsrf-token">X-XSRF-TOKEN</a>
Space MVC stores the current CSRF token in a XSRF-TOKEN cookie that is included with each response generated by the framework. You can use the cookie value to set the X-XSRF-TOKEN request header.
This cookie is primarily sent as a convenience since some JavaScript frameworks and libraries, like Angular and Axios, automatically place its value in the X-XSRF-TOKEN header.
<article>
# CSRF Protection
    <ul>
        <li><a href="#csrf-introduction">Introduction</a></li>
        <li><a href="#csrf-excluding-uris">Excluding URIs</a></li>
        <li><a href="#csrf-x-csrf-token">X-CSRF-Token</a></li>
        <li><a href="#csrf-x-xsrf-token">X-XSRF-Token</a></li>
    </ul>
<a name="csrf-introduction"></a>
## <a href="#csrf-introduction">Introduction</a>
Space MVC makes it easy to protect your application from <a href="https://en.wikipedia.org/wiki/Cross-site_request_forgery">cross-site request forgery</a> (CSRF) attacks. Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are performed on behalf of an authenticated user.
Space MVC automatically generates a CSRF "token" for each active user session managed by the application. This token is used to verify that the authenticated user is the one actually making the requests to the application.
Anytime you define a HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request. You may use the @csrf Blade directive to generate the token field:
```php
<form method="POST" action="/profile">
    @csrf
    ...
</form>
```
The VerifyCsrfToken <a href="/docs/5.7/middleware">middleware</a>, which is included in the web middleware group, will automatically verify that the token in the request input matches the token stored in the session.
#### CSRF Tokens & JavaScript
When building JavaScript driven applications, it is convenient to have your JavaScript HTTP library automatically attach the CSRF token to every outgoing request. By default, the resources/js/bootstrap.js file registers the value of the csrf-token meta tag with the Axios HTTP library. If you are not using this library, you will need to manually configure this behavior for your application.
<a name="csrf-excluding-uris"></a>
## <a href="#csrf-excluding-uris">Excluding URIs From CSRF Protection</a>
Sometimes you may wish to exclude a set of URIs from CSRF protection. For example, if you are using <a href="https://stripe.com">Stripe</a> to process payments and are utilizing their webhook system, you will need to exclude your Stripe webhook handler route from CSRF protection since Stripe will not know what CSRF token to send to your routes.
Typically, you should place these kinds of routes outside of the web middleware group that the RouteServiceProvider applies to all routes in the routes/web.php file. However, you may also exclude the routes by adding their URIs to the $except property of the VerifyCsrfToken middleware:
```php
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'stripe/*',
        'http://example.com/foo/bar',
        'http://example.com/foo/*',
    ];
}
```
The CSRF middleware is automatically disabled when <a href="/docs/5.7/testing">running tests</a>.
<a name="csrf-x-csrf-token"></a>
## <a href="#csrf-x-csrf-token">X-CSRF-TOKEN</a>
In addition to checking for the CSRF token as a POST parameter, the VerifyCsrfToken middleware will also check for the X-CSRF-TOKEN request header. You could, for example, store the token in a HTML meta tag:
```php
<meta name="csrf-token" content="{{ csrf_token() }}">
```
Then, once you have created the meta tag, you can instruct a library like jQuery to automatically add the token to all request headers. This provides simple, convenient CSRF protection for your AJAX based applications:
```php
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
```
By default, the resources/js/bootstrap.js file registers the value of the csrf-token meta tag with the Axios HTTP library. If you are not using this library, you will need to manually configure this behavior for your application.
<a name="csrf-x-xsrf-token"></a>
## <a href="#csrf-x-xsrf-token">X-XSRF-TOKEN</a>
Space MVC stores the current CSRF token in a XSRF-TOKEN cookie that is included with each response generated by the framework. You can use the cookie value to set the X-XSRF-TOKEN request header.
This cookie is primarily sent as a convenience since some JavaScript frameworks and libraries, like Angular and Axios, automatically place its value in the X-XSRF-TOKEN header.