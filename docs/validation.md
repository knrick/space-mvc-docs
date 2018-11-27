# Validation
#### Introduction
Space MVC provides several different approaches to validate your application's incoming data. By default, Space MVC's base controller class uses a ValidatesRequests trait which provides a convenient method to validate incoming HTTP request with a variety of powerful validation rules.
<a name="validation-quickstart"></a>
## <a href="#validation-quickstart">Validation Quickstart</a>
To learn about Space MVC's powerful validation features, let's look at a complete example of validating a form and displaying the error messages back to the user.
<a name="quick-defining-the-routes"></a>
### Defining The Routes
First, let's assume we have the following routes defined in our routes/web.php file:
```php
Route::get('post/create', 'PostController@create');

Route::post('post', 'PostController@store');
```
Of course, the GET route will display a form for the user to create a new blog post, while the POST route will store the new blog post in the database.
<a name="quick-creating-the-controller"></a>
### Creating The Controller
Next, let's take a look at a simple controller that handles these routes. We'll leave the store method empty for now:
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate and store the blog post...
    }
}
```
<a name="quick-writing-the-validation-logic"></a>
### Writing The Validation Logic
Now we are ready to fill in our store method with the logic to validate the new blog post. To do this, we will use the validate method provided by the Illuminate\Http\Request object. If the validation rules pass, your code will keep executing normally; however, if validation fails, an exception will be thrown and the proper error response will automatically be sent back to the user. In the case of a traditional HTTP request, a redirect response will be generated, while a JSON response will be sent for AJAX requests.
To get a better understanding of the validate method, let's jump back into the store method:
```php
/**
 * Store a new blog post.
 *
 * @param  Request  $request
 * @return Response
 */
public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);

    // The blog post is valid...
}
```
As you can see, we pass the desired validation rules into the validate method. Again, if the validation fails, the proper response will automatically be generated. If the validation passes, our controller will continue executing normally.
#### Stopping On First Validation Failure
Sometimes you may wish to stop running validation rules on an attribute after the first validation failure. To do so, assign the bail rule to the attribute:
```php
$request->validate([
    'title' => 'bail|required|unique:posts|max:255',
    'body' => 'required',
]);
```
In this example, if the unique rule on the title attribute fails, the max rule will not be checked. Rules will be validated in the order they are assigned.
#### A Note On Nested Attributes
If your HTTP request contains "nested" parameters, you may specify them in your validation rules using "dot" syntax:
```php
$request->validate([
    'title' => 'required|unique:posts|max:255',
    'author.name' => 'required',
    'author.description' => 'required',
]);
```
<a name="quick-displaying-the-validation-errors"></a>
### Displaying The Validation Errors
So, what if the incoming request parameters do not pass the given validation rules? As mentioned previously, Space MVC will automatically redirect the user back to their previous location. In addition, all of the validation errors will automatically be <a href="/docs/5.7/session#flash-data">flashed to the session</a>.
Again, notice that we did not have to explicitly bind the error messages to the view in our GET route. This is because Space MVC will check for errors in the session data, and automatically bind them to the view if they are available. The $errors variable will be an instance of Illuminate\Support\MessageBag. For more information on working with this object, <a href="#working-with-error-messages">check out its documentation</a>.
The $errors variable is bound to the view by the Illuminate\View\Middleware\ShareErrorsFromSession middleware, which is provided by the web middleware group. <strong>When this middleware is applied an $errors variable will always be available in your views</strong>, allowing you to conveniently assume the $errors variable is always defined and can be safely used.
So, in our example, the user will be redirected to our controller's create method when validation fails, allowing us to display the error messages in the view:
```php
<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
```
<a name="a-note-on-optional-fields"></a>
### A Note On Optional Fields
By default, Space MVC includes the TrimStrings and ConvertEmptyStringsToNull middleware in your application's global middleware stack. These middleware are listed in the stack by the App\Http\Kernel class. Because of this, you will often need to mark your "optional" request fields as nullable if you do not want the validator to consider null values as invalid. For example:
```php
$request->validate([
    'title' => 'required|unique:posts|max:255',
    'body' => 'required',
    'publish_at' => 'nullable|date',
]);
```
In this example, we are specifying that the publish_at field may be either null or a valid date representation. If the nullable modifier is not added to the rule definition, the validator would consider null an invalid date.
<a name="quick-ajax-requests-and-validation"></a>
#### AJAX Requests & Validation
In this example, we used a traditional form to send data to the application. However, many applications use AJAX requests. When using the validate method during an AJAX request, Space MVC will not generate a redirect response. Instead, Space MVC generates a JSON response containing all of the validation errors. This JSON response will be sent with a 422 HTTP status code.
<a name="form-request-validation"></a>
## <a href="#form-request-validation">Form Request Validation</a>
<a name="creating-form-requests"></a>
### Creating Form Requests
For more complex validation scenarios, you may wish to create a "form request". Form requests are custom request classes that contain validation logic. To create a form request class, use the make:request Artisan CLI command:
```php
php artisan make:request StoreBlogPost
```
The generated class will be placed in the app/Http/Requests directory. If this directory does not exist, it will be created when you run the make:request command. let's add a few validation rules to the rules method:
```php
/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules()
{
    return [
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ];
}
```
You may type-hint any dependencies you need within the rules method's signature. They will automatically be resolved via the Space MVC <a href="/docs/5.7/container">service container</a>.
So, how are the validation rules evaluated? All you need to do is type-hint the request on your controller method. The incoming form request is validated before the controller method is called, meaning you do not need to clutter your controller with any validation logic:
```php
/**
 * Store the incoming blog post.
 *
 * @param  StoreBlogPost  $request
 * @return Response
 */
public function store(StoreBlogPost $request)
{
    // The incoming request is valid...

    // Retrieve the validated input data...
    $validated = $request->validated();
}
```
If validation fails, a redirect response will be generated to send the user back to their previous location. The errors will also be flashed to the session so they are available for display. If the request was an AJAX request, a HTTP response with a 422 status code will be returned to the user including a JSON representation of the validation errors.
#### Adding After Hooks To Form Requests
If you would like to add an "after" hook to a form request, you may use the withValidator method. This method receives the fully constructed validator, allowing you to call any of its methods before the validation rules are actually evaluated:
```php
/**
 * Configure the validator instance.
 *
 * @param  \Illuminate\Validation\Validator  $validator
 * @return void
 */
public function withValidator($validator)
{
    $validator->after(function ($validator) {
        if ($this->somethingElseIsInvalid()) {
            $validator->errors()->add('field', 'Something is wrong with this field!');
        }
    });
}
```
<a name="authorizing-form-requests"></a>
### Authorizing Form Requests
The form request class also contains an authorize method. Within this method, you may check if the authenticated user actually has the authority to update a given resource. For example, you may determine if a user actually owns a blog comment they are attempting to update:
```php
/**
 * Determine if the user is authorized to make this request.
 *
 * @return bool
 */
public function authorize()
{
    $comment = Comment::find($this->route('comment'));

    return $comment && $this->user()->can('update', $comment);
}
```
Since all form requests extend the base Space MVC request class, we may use the user method to access the currently authenticated user. Also note the call to the route method in the example above. This method grants you access to the URI parameters defined on the route being called, such as the {comment} parameter in the example below:
```php
Route::post('comment/{comment}');
```
If the authorize method returns false, a HTTP response with a 403 status code will automatically be returned and your controller method will not execute.
If you plan to have authorization logic in another part of your application, return true from the authorize method:
```php
/**
 * Determine if the user is authorized to make this request.
 *
 * @return bool
 */
public function authorize()
{
    return true;
}
```
You may type-hint any dependencies you need within the authorize method's signature. They will automatically be resolved via the Space MVC <a href="/docs/5.7/container">service container</a>.
<a name="customizing-the-error-messages"></a>
### Customizing The Error Messages
You may customize the error messages used by the form request by overriding the messages method. This method should return an array of attribute / rule pairs and their corresponding error messages:
```php
/**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'title.required' => 'A title is required',
        'body.required'  => 'A message is required',
    ];
}
```
<a name="manually-creating-validators"></a>
## <a href="#manually-creating-validators">Manually Creating Validators</a>
If you do not want to use the validate method on the request, you may create a validator instance manually using the Validator <a href="/docs/5.7/facades">facade</a>. The make method on the facade generates a new validator instance:
```php
<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Store the blog post...
    }
}
```
The first argument passed to the make method is the data under validation. The second argument is the validation rules that should be applied to the data.
After checking if the request validation failed, you may use the withErrors method to flash the error messages to the session. When using this method, the $errors variable will automatically be shared with your views after redirection, allowing you to easily display them back to the user. The withErrors method accepts a validator, a MessageBag, or a PHP array.
<a name="automatic-redirection"></a>
### Automatic Redirection
If you would like to create a validator instance manually but still take advantage of the automatic redirection offered by the requests's validate method, you may call the validate method on an existing validator instance. If validation fails, the user will automatically be redirected or, in the case of an AJAX request, a JSON response will be returned:
```php
Validator::make($request->all(), [
    'title' => 'required|unique:posts|max:255',
    'body' => 'required',
])->validate();
```
<a name="named-error-bags"></a>
### Named Error Bags
If you have multiple forms on a single page, you may wish to name the MessageBag of errors, allowing you to retrieve the error messages for a specific form. Pass a name as the second argument to withErrors:
```php
return redirect('register')
            ->withErrors($validator, 'login');
```
You may then access the named MessageBag instance from the $errors variable:
```php
{{ $errors->login->first('email') }}
```
<a name="after-validation-hook"></a>
### After Validation Hook
The validator also allows you to attach callbacks to be run after validation is completed. This allows you to easily perform further validation and even add more error messages to the message collection. To get started, use the after method on a validator instance:
```php
$validator = Validator::make(...);

$validator->after(function ($validator) {
    if ($this->somethingElseIsInvalid()) {
        $validator->errors()->add('field', 'Something is wrong with this field!');
    }
});

if ($validator->fails()) {
    //
}
```
<a name="working-with-error-messages"></a>
## <a href="#working-with-error-messages">Working With Error Messages</a>
After calling the errors method on a Validator instance, you will receive an Illuminate\Support\MessageBag instance, which has a variety of convenient methods for working with error messages. The $errors variable that is automatically made available to all views is also an instance of the MessageBag class.
#### Retrieving The First Error Message For A Field
To retrieve the first error message for a given field, use the first method:
```php
$errors = $validator->errors();

echo $errors->first('email');
```
#### Retrieving All Error Messages For A Field
If you need to retrieve an array of all the messages for a given field, use the get method:
```php
foreach ($errors->get('email') as $message) {
    //
}
```
If you are validating an array form field, you may retrieve all of the messages for each of the array elements using the * character:
```php
foreach ($errors->get('attachments.*') as $message) {
    //
}
```
#### Retrieving All Error Messages For All Fields
To retrieve an array of all messages for all fields, use the all method:
```php
foreach ($errors->all() as $message) {
    //
}
```
#### Determining If Messages Exist For A Field
The has method may be used to determine if any error messages exist for a given field:
```php
if ($errors->has('email')) {
    //
}
```
<a name="custom-error-messages"></a>
### Custom Error Messages
If needed, you may use custom error messages for validation instead of the defaults. There are several ways to specify custom messages. First, you may pass the custom messages as the third argument to the Validator::make method:
```php
$messages = [
    'required' => 'The :attribute field is required.',
];

$validator = Validator::make($input, $rules, $messages);
```
In this example, the :attribute place-holder will be replaced by the actual name of the field under validation. You may also utilize other place-holders in validation messages. For example:
```php
$messages = [
    'same'    => 'The :attribute and :other must match.',
    'size'    => 'The :attribute must be exactly :size.',
    'between' => 'The :attribute value :input is not between :min - :max.',
    'in'      => 'The :attribute must be one of the following types: :values',
];
```
#### Specifying A Custom Message For A Given Attribute
Sometimes you may wish to specify a custom error messages only for a specific field. You may do so using "dot" notation. Specify the attribute's name first, followed by the rule:
```php
$messages = [
    'email.required' => 'We need to know your e-mail address!',
];
```
<a name="localization"></a>
#### Specifying Custom Messages In Language Files
In most cases, you will probably specify your custom messages in a language file instead of passing them directly to the Validator. To do so, add your messages to custom array in the resources/lang/xx/validation.php language file.
```php
'custom' => [
    'email' => [
        'required' => 'We need to know your e-mail address!',
    ],
],
```
#### Specifying Custom Attributes In Language Files
If you would like the :attribute portion of your validation message to be replaced with a custom attribute name, you may specify the custom name in the attributes array of your resources/lang/xx/validation.php language file:
```php
'attributes' => [
    'email' => 'email address',
],
```
<a name="available-validation-rules"></a>
## <a href="#available-validation-rules">Available Validation Rules</a>
Below is a list of all available validation rules and their function:
	<style>
		.collection-method-list > p {
			column-count: 3; -moz-column-count: 3; -webkit-column-count: 3;
			column-gap: 2em; -moz-column-gap: 2em; -webkit-column-gap: 2em;
		}

		.collection-method-list a {
			display: block;
		}
	</style>
	<div class="collection-method-list">
	<a href="#rule-accepted">Accepted</a>
			<a href="#rule-active-url">Active URL</a>
			<a href="#rule-after">After (Date)</a>
			<a href="#rule-after-or-equal">After Or Equal (Date)</a>
			<a href="#rule-alpha">Alpha</a>
			<a href="#rule-alpha-dash">Alpha Dash</a>
			<a href="#rule-alpha-num">Alpha Numeric</a>
			<a href="#rule-array">Array</a>
			<a href="#rule-bail">Bail</a>
			<a href="#rule-before">Before (Date)</a>
			<a href="#rule-before-or-equal">Before Or Equal (Date)</a>
			<a href="#rule-between">Between</a>
			<a href="#rule-boolean">Boolean</a>
			<a href="#rule-confirmed">Confirmed</a>
			<a href="#rule-date">Date</a>
			<a href="#rule-date-equals">Date Equals</a>
			<a href="#rule-date-format">Date Format</a>
			<a href="#rule-different">Different</a>
			<a href="#rule-digits">Digits</a>
			<a href="#rule-digits-between">Digits Between</a>
			<a href="#rule-dimensions">Dimensions (Image Files)</a>
			<a href="#rule-distinct">Distinct</a>
			<a href="#rule-email">E-Mail</a>
			<a href="#rule-exists">Exists (Database)</a>
			<a href="#rule-file">File</a>
			<a href="#rule-filled">Filled</a>
			<a href="#rule-gt">Greater Than</a>
			<a href="#rule-gte">Greater Than Or Equal</a>
			<a href="#rule-image">Image (File)</a>
			<a href="#rule-in">In</a>
			<a href="#rule-in-array">In Array</a>
			<a href="#rule-integer">Integer</a>
			<a href="#rule-ip">IP Address</a>
			<a href="#rule-json">JSON</a>
			<a href="#rule-lt">Less Than</a>
			<a href="#rule-lte">Less Than Or Equal</a>
			<a href="#rule-max">Max</a>
			<a href="#rule-mimetypes">MIME Types</a>
			<a href="#rule-mimes">MIME Type By File Extension</a>
			<a href="#rule-min">Min</a>
			<a href="#rule-not-in">Not In</a>
			<a href="#rule-not-regex">Not Regex</a>
			<a href="#rule-nullable">Nullable</a>
			<a href="#rule-numeric">Numeric</a>
			<a href="#rule-present">Present</a>
			<a href="#rule-regex">Regular Expression</a>
			<a href="#rule-required">Required</a>
			<a href="#rule-required-if">Required If</a>
			<a href="#rule-required-unless">Required Unless</a>
			<a href="#rule-required-with">Required With</a>
			<a href="#rule-required-with-all">Required With All</a>
			<a href="#rule-required-without">Required Without</a>
			<a href="#rule-required-without-all">Required Without All</a>
			<a href="#rule-same">Same</a>
			<a href="#rule-size">Size</a>
			<a href="#rule-string">String</a>
			<a href="#rule-timezone">Timezone</a>
			<a href="#rule-unique">Unique (Database)</a>
			<a href="#rule-url">URL</a>
			<a href="#rule-uuid">UUID</a>
	</div>
<a name="rule-accepted"></a>
#### accepted
The field under validation must be <em>yes</em>, <em>on</em>, <em>1</em>, or <em>true</em>. This is useful for validating "Terms of Service" acceptance.
<a name="rule-active-url"></a>
#### active_url
The field under validation must have a valid A or AAAA record according to the dns_get_record PHP function.
<a name="rule-after"></a>
#### after:<em>date</em>
The field under validation must be a value after a given date. The dates will be passed into the strtotime PHP function:
```php
'start_date' => 'required|date|after:tomorrow'
```
Instead of passing a date string to be evaluated by strtotime, you may specify another field to compare against the date:
```php
'finish_date' => 'required|date|after:start_date'
```
<a name="rule-after-or-equal"></a>
#### after_or_equal:<em>date</em>
The field under validation must be a value after or equal to the given date. For more information, see the <a href="#rule-after">after</a> rule.
<a name="rule-alpha"></a>
#### alpha
The field under validation must be entirely alphabetic characters.
<a name="rule-alpha-dash"></a>
#### alpha_dash
The field under validation may have alpha-numeric characters, as well as dashes and underscores.
<a name="rule-alpha-num"></a>
#### alpha_num
The field under validation must be entirely alpha-numeric characters.
<a name="rule-array"></a>
#### array
The field under validation must be a PHP array.
<a name="rule-bail"></a>
#### bail
Stop running validation rules after the first validation failure.
<a name="rule-before"></a>
#### before:<em>date</em>
The field under validation must be a value preceding the given date. The dates will be passed into the PHP strtotime function. In addition, like the <a href="#rule-after">after</a> rule, the name of another field under validation may be supplied as the value of date.
<a name="rule-before-or-equal"></a>
#### before_or_equal:<em>date</em>
The field under validation must be a value preceding or equal to the given date. The dates will be passed into the PHP strtotime function. In addition, like the <a href="#rule-after">after</a> rule, the name of another field under validation may be supplied as the value of date.
<a name="rule-between"></a>
#### between:<em>min</em>,<em>max</em>
The field under validation must have a size between the given <em>min</em> and <em>max</em>. Strings, numerics, arrays, and files are evaluated in the same fashion as the <a href="#rule-size">size</a> rule.
<a name="rule-boolean"></a>
#### boolean
The field under validation must be able to be cast as a boolean. Accepted input are true, false, 1, 0, "1", and "0".
<a name="rule-confirmed"></a>
#### confirmed
The field under validation must have a matching field of foo_confirmation. For example, if the field under validation is password, a matching password_confirmation field must be present in the input.
<a name="rule-date"></a>
#### date
The field under validation must be a valid date according to the strtotime PHP function.
<a name="rule-date-equals"></a>
#### date_equals:<em>date</em>
The field under validation must be equal to the given date. The dates will be passed into the PHP strtotime function.
<a name="rule-date-format"></a>
#### date_format:<em>format</em>
The field under validation must match the given <em>format</em>. You should use <strong>either</strong> date or date_format when validating a field, not both.
<a name="rule-different"></a>
#### different:<em>field</em>
The field under validation must have a different value than <em>field</em>.
<a name="rule-digits"></a>
#### digits:<em>value</em>
The field under validation must be <em>numeric</em> and must have an exact length of <em>value</em>.
<a name="rule-digits-between"></a>
#### digits_between:<em>min</em>,<em>max</em>
The field under validation must have a length between the given <em>min</em> and <em>max</em>.
<a name="rule-dimensions"></a>
#### dimensions
The file under validation must be an image meeting the dimension constraints as specified by the rule's parameters:
```php
'avatar' => 'dimensions:min_width=100,min_height=200'
```
Available constraints are: <em>min_width</em>, <em>max_width</em>, <em>min_height</em>, <em>max_height</em>, <em>width</em>, <em>height</em>, <em>ratio</em>.
A <em>ratio</em> constraint should be represented as width divided by height. This can be specified either by a statement like 3/2 or a float like 1.5:
```php
'avatar' => 'dimensions:ratio=3/2'
```
Since this rule requires several arguments, you may use the Rule::dimensions method to fluently construct the rule:
```php
use Illuminate\Validation\Rule;

Validator::make($data, [
    'avatar' => [
        'required',
        Rule::dimensions()->maxWidth(1000)->maxHeight(500)->ratio(3 / 2),
    ],
]);
```
<a name="rule-distinct"></a>
#### distinct
When working with arrays, the field under validation must not have any duplicate values.
```php
'foo.*.id' => 'distinct'
```
<a name="rule-email"></a>
#### email
The field under validation must be formatted as an e-mail address.
<a name="rule-exists"></a>
#### exists:<em>table</em>,<em>column</em>
The field under validation must exist on a given database table.
#### Basic Usage Of Exists Rule
```php
'state' => 'exists:states'
```
If the column option is not specified, the field name will be used.
#### Specifying A Custom Column Name
```php
'state' => 'exists:states,abbreviation'
```
Occasionally, you may need to specify a specific database connection to be used for the exists query. You can accomplish this by prepending the connection name to the table name using "dot" syntax:
```php
'email' => 'exists:connection.staff,email'
```
If you would like to customize the query executed by the validation rule, you may use the Rule class to fluently define the rule. In this example, we'll also specify the validation rules as an array instead of using the | character to delimit them:
```php
use Illuminate\Validation\Rule;

Validator::make($data, [
    'email' => [
        'required',
        Rule::exists('staff')->where(function ($query) {
            $query->where('account_id', 1);
        }),
    ],
]);
```
<a name="rule-file"></a>
#### file
The field under validation must be a successfully uploaded file.
<a name="rule-filled"></a>
#### filled
The field under validation must not be empty when it is present.
<a name="rule-gt"></a>
#### gt:<em>field</em>
The field under validation must be greater than the given <em>field</em>. The two fields must be of the same type. Strings, numerics, arrays, and files are evaluated using the same conventions as the size rule.
<a name="rule-gte"></a>
#### gte:<em>field</em>
The field under validation must be greater than or equal to the given <em>field</em>. The two fields must be of the same type. Strings, numerics, arrays, and files are evaluated using the same conventions as the size rule.
<a name="rule-image"></a>
#### image
The file under validation must be an image (jpeg, png, bmp, gif, or svg)
<a name="rule-in"></a>
#### in:<em>foo</em>,<em>bar</em>,...
The field under validation must be included in the given list of values. Since this rule often requires you to implode an array, the Rule::in method may be used to fluently construct the rule:
```php
use Illuminate\Validation\Rule;

Validator::make($data, [
    'zones' => [
        'required',
        Rule::in(['first-zone', 'second-zone']),
    ],
]);
```
<a name="rule-in-array"></a>
#### in_array:<em>anotherfield</em>.*
The field under validation must exist in <em>anotherfield</em>'s values.
<a name="rule-integer"></a>
#### integer
The field under validation must be an integer.
<a name="rule-ip"></a>
#### ip
The field under validation must be an IP address.
#### ipv4
The field under validation must be an IPv4 address.
#### ipv6
The field under validation must be an IPv6 address.
<a name="rule-json"></a>
#### json
The field under validation must be a valid JSON string.
<a name="rule-lt"></a>
#### lt:<em>field</em>
The field under validation must be less than the given <em>field</em>. The two fields must be of the same type. Strings, numerics, arrays, and files are evaluated using the same conventions as the size rule.
<a name="rule-lte"></a>
#### lte:<em>field</em>
The field under validation must be less than or equal to the given <em>field</em>. The two fields must be of the same type. Strings, numerics, arrays, and files are evaluated using the same conventions as the size rule.
<a name="rule-max"></a>
#### max:<em>value</em>
The field under validation must be less than or equal to a maximum <em>value</em>. Strings, numerics, arrays, and files are evaluated in the same fashion as the <a href="#rule-size">size</a> rule.
<a name="rule-mimetypes"></a>
#### mimetypes:<em>text/plain</em>,...
The file under validation must match one of the given MIME types:
```php
'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
```
To determine the MIME type of the uploaded file, the file's contents will be read and the framework will attempt to guess the MIME type, which may be different from the client provided MIME type.
<a name="rule-mimes"></a>
#### mimes:<em>foo</em>,<em>bar</em>,...
The file under validation must have a MIME type corresponding to one of the listed extensions.
#### Basic Usage Of MIME Rule
```php
'photo' => 'mimes:jpeg,bmp,png'
```
Even though you only need to specify the extensions, this rule actually validates against the MIME type of the file by reading the file's contents and guessing its MIME type.
A full listing of MIME types and their corresponding extensions may be found at the following location: <a href="https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types">https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types</a>
<a name="rule-min"></a>
#### min:<em>value</em>
The field under validation must have a minimum <em>value</em>. Strings, numerics, arrays, and files are evaluated in the same fashion as the <a href="#rule-size">size</a> rule.
<a name="rule-not-in"></a>
#### not_in:<em>foo</em>,<em>bar</em>,...
The field under validation must not be included in the given list of values. The Rule::notIn method may be used to fluently construct the rule:
```php
use Illuminate\Validation\Rule;

Validator::make($data, [
    'toppings' => [
        'required',
        Rule::notIn(['sprinkles', 'cherries']),
    ],
]);
```
<a name="rule-not-regex"></a>
#### not_regex:<em>pattern</em>
The field under validation must not match the given regular expression.
Internally, this rule uses the PHP preg_match function. The pattern specified should obey the same formatting required by preg_match and thus also include valid delimiters. For example: 'email' => 'regex:/^.+@.+$/i'.
<strong>Note:</strong> When using the regex / not_regex patterns, it may be necessary to specify rules in an array instead of using pipe delimiters, especially if the regular expression contains a pipe character.
<a name="rule-nullable"></a>
#### nullable
The field under validation may be null. This is particularly useful when validating primitive such as strings and integers that can contain null values.
<a name="rule-numeric"></a>
#### numeric
The field under validation must be numeric.
<a name="rule-present"></a>
#### present
The field under validation must be present in the input data but can be empty.
<a name="rule-regex"></a>
#### regex:<em>pattern</em>
The field under validation must match the given regular expression.
Internally, this rule uses the PHP preg_match function. The pattern specified should obey the same formatting required by preg_match and thus also include valid delimiters. For example: 'email' => 'regex:/^.+@.+$/i'.
<strong>Note:</strong> When using the regex / not_regex patterns, it may be necessary to specify rules in an array instead of using pipe delimiters, especially if the regular expression contains a pipe character.
<a name="rule-required"></a>
#### required
The field under validation must be present in the input data and not empty. A field is considered "empty" if one of the following conditions are true:
	<div class="content-list">
		<ul>
			<li>The value is null.</li>
			<li>The value is an empty string.</li>
			<li>The value is an empty array or empty Countable object.</li>
			<li>The value is an uploaded file with no path.</li>
		</ul>
	</div>
<a name="rule-required-if"></a>
#### required_if:<em>anotherfield</em>,<em>value</em>,...
The field under validation must be present and not empty if the <em>anotherfield</em> field is equal to any <em>value</em>.
<a name="rule-required-unless"></a>
#### required_unless:<em>anotherfield</em>,<em>value</em>,...
The field under validation must be present and not empty unless the <em>anotherfield</em> field is equal to any <em>value</em>.
<a name="rule-required-with"></a>
#### required_with:<em>foo</em>,<em>bar</em>,...
The field under validation must be present and not empty <em>only if</em> any of the other specified fields are present.
<a name="rule-required-with-all"></a>
#### required_with_all:<em>foo</em>,<em>bar</em>,...
The field under validation must be present and not empty <em>only if</em> all of the other specified fields are present.
<a name="rule-required-without"></a>
#### required_without:<em>foo</em>,<em>bar</em>,...
The field under validation must be present and not empty <em>only when</em> any of the other specified fields are not present.
<a name="rule-required-without-all"></a>
#### required_without_all:<em>foo</em>,<em>bar</em>,...
The field under validation must be present and not empty <em>only when</em> all of the other specified fields are not present.
<a name="rule-same"></a>
#### same:<em>field</em>
The given <em>field</em> must match the field under validation.
<a name="rule-size"></a>
#### size:<em>value</em>
The field under validation must have a size matching the given <em>value</em>. For string data, <em>value</em> corresponds to the number of characters. For numeric data, <em>value</em> corresponds to a given integer value. For an array, <em>size</em> corresponds to the count of the array. For files, <em>size</em> corresponds to the file size in kilobytes.
<a name="rule-string"></a>
#### string
The field under validation must be a string. If you would like to allow the field to also be null, you should assign the nullable rule to the field.
<a name="rule-timezone"></a>
#### timezone
The field under validation must be a valid timezone identifier according to the timezone_identifiers_list PHP function.
<a name="rule-unique"></a>
#### unique:<em>table</em>,<em>column</em>,<em>except</em>,<em>idColumn</em>
The field under validation must be unique in a given database table. If the column option is not specified, the field name will be used.
<strong>Specifying A Custom Column Name:</strong>
```php
'email' => 'unique:users,email_address'
```
<strong>Custom Database Connection</strong>
Occasionally, you may need to set a custom connection for database queries made by the Validator. As seen above, setting unique:users as a validation rule will use the default database connection to query the database. To override this, specify the connection and the table name using "dot" syntax:
```php
'email' => 'unique:connection.users,email_address'
```
<strong>Forcing A Unique Rule To Ignore A Given ID:</strong>
Sometimes, you may wish to ignore a given ID during the unique check. For example, consider an "update profile" screen that includes the user's name, e-mail address, and location. Of course, you will want to verify that the e-mail address is unique. However, if the user only changes the name field and not the e-mail field, you do not want a validation error to be thrown because the user is already the owner of the e-mail address.
To instruct the validator to ignore the user's ID, we'll use the Rule class to fluently define the rule. In this example, we'll also specify the validation rules as an array instead of using the | character to delimit the rules:
```php
use Illuminate\Validation\Rule;

Validator::make($data, [
    'email' => [
        'required',
        Rule::unique('users')->ignore($user->id),
    ],
]);
```
If your table uses a primary key column name other than id, you may specify the name of the column when calling the ignore method:
```php
'email' => Rule::unique('users')->ignore($user->id, 'user_id')
```
<strong>Adding Additional Where Clauses:</strong>
You may also specify additional query constraints by customizing the query using the where method. For example, let's add a constraint that verifies the account_id is 1:
```php
'email' => Rule::unique('users')->where(function ($query) {
    return $query->where('account_id', 1);
})
```
<a name="rule-url"></a>
#### url
The field under validation must be a valid URL.
<a name="rule-uuid"></a>
#### uuid
The field under validation must be a valid RFC 4122 (version 1, 3, 4, or 5) universally unique identifier (UUID).
<a name="conditionally-adding-rules"></a>
## <a href="#conditionally-adding-rules">Conditionally Adding Rules</a>
#### Validating When Present
In some situations, you may wish to run validation checks against a field <strong>only</strong> if that field is present in the input array. To quickly accomplish this, add the sometimes rule to your rule list:
```php
$v = Validator::make($data, [
    'email' => 'sometimes|required|email',
]);
```
In the example above, the email field will only be validated if it is present in the $data array.
If you are attempting to validate a field that should always be present but may be empty, check out <a href="#a-note-on-optional-fields">this note on optional fields</a>
#### Complex Conditional Validation
Sometimes you may wish to add validation rules based on more complex conditional logic. For example, you may wish to require a given field only if another field has a greater value than 100. Or, you may need two fields to have a given value only when another field is present. Adding these validation rules doesn't have to be a pain. First, create a Validator instance with your <em>static rules</em> that never change:
```php
$v = Validator::make($data, [
    'email' => 'required|email',
    'games' => 'required|numeric',
]);
```
let's assume our web application is for game collectors. If a game collector registers with our application and they own more than 100 games, we want them to explain why they own so many games. For example, perhaps they run a game resale shop, or maybe they just enjoy collecting. To conditionally add this requirement, we can use the sometimes method on the Validator instance.
```php
$v->sometimes('reason', 'required|max:500', function ($input) {
    return $input->games >= 100;
});
```
The first argument passed to the sometimes method is the name of the field we are conditionally validating. The second argument is the rules we want to add. If the Closure passed as the third argument returns true, the rules will be added. This method makes it a breeze to build complex conditional validations. You may even add conditional validations for several fields at once:
```php
$v->sometimes(['reason', 'cost'], 'required', function ($input) {
    return $input->games >= 100;
});
```
The $input parameter passed to your Closure will be an instance of Illuminate\Support\Fluent and may be used to access your input and files.
<a name="validating-arrays"></a>
## <a href="#validating-arrays">Validating Arrays</a>
Validating array based form input fields doesn't have to be a pain. You may use "dot notation" to validate attributes within an array. For example, if the incoming HTTP request contains a photos[profile] field, you may validate it like so:
```php
$validator = Validator::make($request->all(), [
    'photos.profile' => 'required|image',
]);
```
You may also validate each element of an array. For example, to validate that each e-mail in a given array input field is unique, you may do the following:
```php
$validator = Validator::make($request->all(), [
    'person.*.email' => 'email|unique:users',
    'person.*.first_name' => 'required_with:person.*.last_name',
]);
```
Likewise, you may use the * character when specifying your validation messages in your language files, making it a breeze to use a single validation message for array based fields:
```php
'custom' => [
    'person.*.email' => [
        'unique' => 'Each person must have a unique e-mail address',
    ]
],
```
<a name="custom-validation-rules"></a>
## <a href="#custom-validation-rules">Custom Validation Rules</a>
<a name="using-rule-objects"></a>
### Using Rule Objects
Space MVC provides a variety of helpful validation rules; however, you may wish to specify some of your own. One method of registering custom validation rules is using rule objects. To generate a new rule object, you may use the make:rule Artisan command. let's use this command to generate a rule that verifies a string is uppercase. Space MVC will place the new rule in the app/Rules directory:
```php
php artisan make:rule Uppercase
```
Once the rule has been created, we are ready to define its behavior. A rule object contains two methods: passes and message. The passes method receives the attribute value and name, and should return true or false depending on whether the attribute value is valid or not. The message method should return the validation error message that should be used when validation fails:
```php
<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return strtoupper($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be uppercase.';
    }
}
```
Of course, you may call the trans helper from your message method if you would like to return an error message from your translation files:
```php
/**
 * Get the validation error message.
 *
 * @return string
 */
public function message()
{
    return trans('validation.uppercase');
}
```
Once the rule has been defined, you may attach it to a validator by passing an instance of the rule object with your other validation rules:
```php
use App\Rules\Uppercase;

$request->validate([
    'name' => ['required', 'string', new Uppercase],
]);
```
<a name="using-closures"></a>
### Using Closures
If you only need the functionality of a custom rule once throughout your application, you may use a Closure instead of a rule object. The Closure receives the attribute's name, the attribute's value, and a $fail callback that should be called if validation fails:
```php
$validator = Validator::make($request->all(), [
    'title' => [
        'required',
        'max:255',
        function ($attribute, $value, $fail) {
            if ($value === 'foo') {
                $fail($attribute.' is invalid.');
            }
        },
    ],
]);
```
<a name="using-extensions"></a>
### Using Extensions
Another method of registering custom validation rules is using the extend method on the Validator <a href="/docs/5.7/facades">facade</a>. let's use this method within a <a href="/docs/5.7/providers">service provider</a> to register a custom validation rule:
```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('foo', function ($attribute, $value, $parameters, $validator) {
            return $value == 'foo';
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
```
The custom validator Closure receives four arguments: the name of the $attribute being validated, the $value of the attribute, an array of $parameters passed to the rule, and the Validator instance.
You may also pass a class and method to the extend method instead of a Closure:
```php
Validator::extend('foo', 'FooValidator@validate');
```
#### Defining The Error Message
You will also need to define an error message for your custom rule. You can do so either using an inline custom message array or by adding an entry in the validation language file. This message should be placed in the first level of the array, not within the custom array, which is only for attribute-specific error messages:
```php
"foo" => "Your input was invalid!",

"accepted" => "The :attribute must be accepted.",

// The rest of the validation error messages...
```
When creating a custom validation rule, you may sometimes need to define custom place-holder replacements for error messages. You may do so by creating a custom Validator as described above then making a call to the replacer method on the Validator facade. You may do this within the boot method of a <a href="/docs/5.7/providers">service provider</a>:
```php
/**
 * Bootstrap any application services.
 *
 * @return void
 */
public function boot()
{
    Validator::extend(...);

    Validator::replacer('foo', function ($message, $attribute, $rule, $parameters) {
        return str_replace(...);
    });
}
```
#### Implicit Extensions
By default, when an attribute being validated is not present or contains an empty value as defined by the <a href="#rule-required">required</a> rule, normal validation rules, including custom extensions, are not run. For example, the <a href="#rule-unique">unique</a> rule will not be run against a null value:
```php
$rules = ['name' => 'unique'];

$input = ['name' => null];

Validator::make($input, $rules)->passes(); // true
```
For a rule to run even when an attribute is empty, the rule must imply that the attribute is required. To create such an "implicit" extension, use the Validator::extendImplicit() method:
```php
Validator::extendImplicit('foo', function ($attribute, $value, $parameters, $validator) {
    return $value == 'foo';
});
```
An "implicit" extension only <em>implies</em> that the attribute is required. Whether it actually invalidates a missing or empty attribute is up to you.