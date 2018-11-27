## Space Command Line Interface (CLI) Tool
Space is the command-line interface included with Space MVC. It provides a number of helpful commands that can assist you while you build your application. To view a list of all available Space commands, you may use the list command:
```bash
php space list
```
Every command also includes a "help" screen which displays and describes the command's available arguments and options. To view a help screen, precede the name of the command with help:

```bash
php space help migrate
```
#### Space MVC REPL
All Space MVC applications include Tinker, a REPL powered by the [PsySH](https://github.com/bobthecow/psysh) package. Tinker allows you to interact with your entire Space MVC application on the command line, including the Eloquent ORM, jobs, events, and more. To enter the Tinker environment, run the tinker Space command:
```bash
php space tinker
```
<a name="writing-commands"></a>
## <a href="#writing-commands">Writing Commands</a>
In addition to the commands provided with Space, you may also build your own custom commands. Commands are
        typically stored in the app/Console/Commands directory; however, you are free to choose your own
        storage location as long as your commands can be loaded by Composer.
<a name="generating-commands"></a>
### Generating Commands
To create a new command, use the make:command
        Space command. This command will create a new command class in the app/Console/Commands
        directory. Don't worry if this directory does not exist in your application, since it will be created the first
        time you run the make:command Space
        command. The generated command will include the default set of properties and methods that are present on all
        commands:
```bash
php space make:command SendEmails
```
<a name="command-structure"></a>
### Command Structure
After generating your command, you should fill in the signature and description properties of the class, which will be used when displaying
        your command on the list screen. The handle method will be called when your command is executed. You may place
        your command logic in this method.
For greater code reuse, it is good practice to keep your console commands light and let them defer to
    application services to accomplish their tasks. In the example below, note that we inject a service class to do
    the "heavy lifting" of sending the e-mails.
Let's take a look at an example command. Note that we are able to inject any dependencies we need into the
        command's constructor or handle method. The Space MVC <a
                href="/docs/5.7/container">service container</a> will automatically inject all dependencies type-hinted
        in the constructor or handle method:

```php
<?php

namespace App\Console\Commands;

use App\User;
use App\DripEmailer;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected \$signature = \'email:send {user}\';

    /**
     * The console command description.
     *
     * @var string
     */
    protected \$description = \'Send drip e-mails to a user\';

    /**
     * The drip e-mail service.
     *
     * @var DripEmailer
     */
    protected \$drip;

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  \$drip
     * @return void
     */
    public function __construct(DripEmailer \$drip)
    {
        parent::__construct();

        \$this->drip = \$drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \$this->drip->send(User::find(\$this->argument(\'user\')));
    }
}
```
```php
<?php

namespace App\Console\Commands;

use App\User;
use App\DripEmailer;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = \'email:send {user}\';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = \'Send drip e-mails to a user\';

    /**
     * The drip e-mail service.
     *
     * @var DripEmailer
     */
    protected $drip;

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  $drip
     * @return void
     */
    public function __construct(DripEmailer $drip)
    {
        parent::__construct();

        $this->drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->drip->send(User::find($this->argument(\'user\')));
    }
}
```
<a name="closure-commands"></a>
### Closure Commands
Closure based commands provide an alternative to defining console commands as classes. In the same way that route
        Closures are an alternative to controllers, think of command Closures as an alternative to command classes.
        Within the commands method of your app/Console/Kernel.php file, Space MVC loads the routes/console.php file:
```php
/**
 * Register the Closure based commands for the application.
 *
 * @return void
 */
protected function commands()
{
    require base_path(\'routes/console.php\');
}
```
Even though this file does not define HTTP routes, it defines console based entry points (routes) into your
        application. Within this file, you may define all of your Closure based routes using the Space::command
        method. The command method accepts two arguments: the <a
                href="#defining-input-expectations">command signature</a> and a Closure which receives the commands
        arguments and options:
```php
Space::command(\'build {project}\', function ($project) {
    $this->info("Building {$project}!");
});
```
The Closure is bound to the underlying command instance, so you have full access to all of the helper methods you
        would typically be able to access on a full command class.
#### Type-Hinting Dependencies
In addition to receiving your command's arguments and options, command Closures may also type-hint additional
        dependencies that you would like resolved out of the <a href="/docs/5.7/container">service container</a>:
```php
use App\User;
use App\DripEmailer;

Space::command(\'email:send {user}\', function (DripEmailer $drip, $user) {
    $drip->send(User::find($user));
});
```
#### Closure Command Descriptions
When defining a Closure based command, you may use the describe method to add
        a description to the command. This description will be displayed when you run the php
            space list or php space help commands:
```php
Space::command(\'build {project}\', function ($project) {
    $this->info("Building {$project}!");
})->describe(\'Build the project\');
```
<a name="defining-input-expectations"></a>
## <a href="#defining-input-expectations">Defining Input Expectations</a>
When writing console commands, it is common to gather input from the user through arguments or options. Space MVC
        makes it very convenient to define the input you expect from the user using the signature
        property on your commands. The signature property allows you to define the
        name, arguments, and options for the command in a single, expressive, route-like syntax.
<a name="arguments"></a>
### Arguments
All user supplied arguments and options are wrapped in curly braces. In the following example, the command
        defines one <strong>required</strong> argument: user:
```php
/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send {user}\';
```
You may also make arguments optional and define default values for arguments:
```php
// Optional argument...
email:send {user?}

// Optional argument with default value...
email:send {user=foo}
```
<a name="options"></a>
### Options
Options, like arguments, are another form of user input. Options are prefixed by two hyphens (--) when they are specified on the
        command line. There are two types of options: those that receive a value and those that don't. Options that
        don't receive a value serve as a boolean "switch". Let's take a look at an example of this type of option:
```php
/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send {user} {--queue}\';
```
In this example, the --queue switch may be
        specified when calling the Space command. If the --queue switch is passed, the value of the option will be true. Otherwise, the value will be false:
```php
php space email:send 1 --queue
```
<a name="options-with-values"></a>
#### Options With Values
Next, let's take a look at an option that expects a value. If the user must specify a value for an option, suffix
        the option name with a = sign:
```php
/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send {user} {--queue=}\';
```
In this example, the user may pass a value for the option like so:
```php
php space email:send 1 --queue=default
```
You may assign default values to options by specifying the default value after the option name. If no option
        value is passed by the user, the default value will be used:
```php
email:send {user} {--queue=default}
```
<a name="option-shortcuts"></a>
#### Option Shortcuts
To assign a shortcut when defining an option, you may specify it before the option name and use a | delimiter to
        separate the shortcut from the full option name:
```php
email:send {user} {--Q|queue}
```
<a name="input-arrays"></a>
### Input Arrays
If you would like to define arguments or options to expect array inputs, you may use the * character. First, let's take a look
        at an example that specifies an array argument:
```php
email:send {user*}
```
When calling this method, the user arguments may be passed in order to the
        command line. For example, the following command will set the value of user
        to ['foo', 'bar']:
```php
php space email:send foo bar
```
When defining an option that expects an array input, each option value passed to the command should be prefixed
        with the option name:
```php
email:send {user} {--id=*}

php space email:send --id=1 --id=2
```
<a name="input-descriptions"></a>
### Input Descriptions
You may assign descriptions to input arguments and options by separating the parameter from the description using
        a colon. If you need a little extra room to define your command, feel free to spread the definition across
        multiple lines:
```php
/**
 * The name and signature of the console command.
 *
 * @var string
 */
protected $signature = \'email:send
                        {user : The ID of the user}
                        {--queue= : Whether the job should be queued}\';
```
<a name="command-io"></a>
## <a href="#command-io">Command I/O</a>
<a name="retrieving-input"></a>
### Retrieving Input
While your command is executing, you will obviously need to access the values for the arguments and options
        accepted by your command. To do so, you may use the argument and option methods:
```php
/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $userId = $this->argument(\'user\');

    //
}
```
If you need to retrieve all of the arguments as an array, call the arguments
        method:
```php
$arguments = $this->arguments();
```
Options may be retrieved just as easily as arguments using the option method.
        To retrieve all of the options as an array, call the options method:
```php
// Retrieve a specific option...
$queueName = $this->option(\'queue\');

// Retrieve all options...
$options = $this->options();
```
If the argument or option does not exist, null will be returned.
<a name="prompting-for-input"></a>
### Prompting For Input
In addition to displaying output, you may also ask the user to provide input during the execution of your
        command. The ask method will prompt the user with the given question, accept
        their input, and then return the user's input back to your command:
```php
/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $name = $this->ask(\'What is your name?\');
}
```
The secret method is similar to ask, but
        the user's input will not be visible to them as they type in the console. This method is useful when asking for
        sensitive information such as a password:
```php
$password = $this->secret(\'What is the password?\');
```
#### Asking For Confirmation
If you need to ask the user for a simple confirmation, you may use the confirm
        method. By default, this method will return false.
        However, if the user enters y or yes in
        response to the prompt, the method will return true.
```php
if ($this->confirm(\'Do you wish to continue?\')) {
    //
}
```
#### Auto-Completion
The anticipate method can be used to provide auto-completion for possible
        choices. The user can still choose any answer, regardless of the auto-completion hints:
```php
$name = $this->anticipate(\'What is your name?\', [\'Taylor\', \'Dayle\']);
```
#### Multiple Choice Questions
If you need to give the user a predefined set of choices, you may use the choice method. You may set the array index of the default value to be
        returned if no option is chosen:
```php
$name = $this->choice(\'What is your name?\', [\'Taylor\', \'Dayle\'], $defaultIndex);
```
<a name="writing-output"></a>
### Writing Output
To send output to the console, use the line, info, comment, question and error methods. Each of
        these methods will use appropriate ANSI colors for their purpose. For example, let's display some general
        information to the user. Typically, the info method will display in the
        console as green text:
```php
/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $this->info(\'Display this on the screen\');
}
```
To display an error message, use the error method. Error message text is
        typically displayed in red:
```php
$this->error(\'Something went wrong!\');
```
If you would like to display plain, uncolored console output, use the line
        method:
```php
$this->line(\'Display this on the screen\');
```
#### Table Layouts
The table method makes it easy to correctly format multiple rows / columns of
        data. Just pass in the headers and rows to the method. The width and height will be dynamically calculated based
        on the given data:
```php
$headers = [\'Name\', \'Email\'];

$users = App\User::all([\'name\', \'email\'])->toArray();

$this->table($headers, $users);
```
#### Progress Bars
For long running tasks, it could be helpful to show a progress indicator. Using the output object, we can start,
        advance and stop the Progress Bar. First, define the total number of steps the process will iterate through.
        Then, advance the Progress Bar after processing each item:
```php
$users = App\User::all();

$bar = $this->output->createProgressBar(count($users));

$bar->start();

foreach ($users as $user) {
    $this->performTask($user);

    $bar->advance();
}

$bar->finish();
```
For more advanced options, check out the <a
                href="https://symfony.com/doc/current/components/console/helpers/progressbar.html">Symfony Progress Bar
            component documentation</a>.
<a name="registering-commands"></a>
## <a href="#registering-commands">Registering Commands</a>
Because of the load method call in your console kernel's commands method, all commands within the app/Console/Commands directory will automatically be registered with
        Space. In fact, you are free to make additional calls to the load method to
        scan other directories for Space commands:
```php
/**
 * Register the commands for the application.
 *
 * @return void
 */
protected function commands()
{
    $this->load(__DIR__.\'/Commands\');
    $this->load(__DIR__.\'/MoreCommands\');

    // ...
}
```
You may also manually register commands by adding its class name to the $commands property of your app/Console/Kernel.php file. When Space boots, all the commands listed in this
        property will be resolved by the <a href="/docs/5.7/container">service container</a> and registered with Space:
    
```php
protected $commands = [
    Commands\SendEmails::class
];
```
<a name="programmatically-executing-commands"></a>
## <a href="#programmatically-executing-commands">Programmatically Executing Commands</a>
Sometimes you may wish to execute an Space command outside of the CLI. For example, you may wish to fire an Space
        command from a route or controller. You may use the call method on the Space facade to accomplish this. The call method accepts either the command's name or class as the first
        argument, and an array of command parameters as the second argument. The exit code will be returned:
```php
Route::get(\'/foo\', function () {
    $exitCode = Space::call(\'email:send\', [
        \'user\' => 1, \'--queue\' => \'default\'
    ]);

    //
});
```
Using the queue method on the Space facade,
        you may even queue Space commands so they are processed in the background by your <a href="/docs/5.7/queues">queue
            workers</a>. Before using this method, make sure you have configured your queue and are running a queue
        listener:
```php
Route::get(\'/foo\', function () {
    Space::queue(\'email:send\', [
        \'user\' => 1, \'--queue\' => \'default\'
    ]);

    //
});
```
You may also specify the connection or queue the Space command should be dispatched to:
```php
Space::queue(\'email:send\', [
    \'user\' => 1, \'--queue\' => \'default\'
])->onConnection(\'redis\')->onQueue(\'commands\');
```
#### Passing Array Values
If your command defines an option that accepts an array, you may pass an array of values to that option:
```php
Route::get(\'/foo\', function () {
    $exitCode = Space::call(\'email:send\', [
        \'user\' => 1, \'--id\' => [5, 13]
    ]);
});
```
#### Passing Boolean Values
If you need to specify the value of an option that does not accept string values, such as the --force flag on the migrate:refresh command, you should
        pass true or false:
```php
$exitCode = Space::call(\'migrate:refresh\', [
    \'--force\' => true,
]);
```
<a name="calling-commands-from-other-commands"></a>
### Calling Commands From Other Commands
Sometimes you may wish to call other commands from an existing Space command. You may do so using the call method. This call method accepts
        the command name and an array of command parameters:
```php
/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    $this->call(\'email:send\', [
        \'user\' => 1, \'--queue\' => \'default\'
    ]);

    //
}
```
If you would like to call another console command and suppress all of its output, you may use the callSilent method. The callSilent method
        has the same signature as the call method:
```php
$this->callSilent(\'email:send\', [
    \'user\' => 1, \'--queue\' => \'default\'
]);
```