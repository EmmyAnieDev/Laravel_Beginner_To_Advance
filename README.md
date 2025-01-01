## LARAVEL FILE AND STRUCTURE

-   APP: All the app's logical stuff will go innside this.

*   HTTP: handles the HTTP request and do something out of it.
*   CONTROLLERS: These are the files where we write our logical programs and it does something with based on the request that users sends from the Frontend of our App. (LOGICAL LAYER).

-   MODELS: These folders handle communication between our App and Database. (DATA LAYER).

-   Factories: These are basically way to see our data in our database. when we create a database table it's empty, so we can use factory to create a dummy contents or default content for our tables.

-   Seeders: These seed the data in the database, most of the time dummy or default values for our application.

-   Public: This is the public accessible folder. This folder can be accessible from the frontend.

-   Views: These are basically the HTML of our project. it's the frontend part. (PRESENTATION LAYER).

-   Vendor: all our dependencies, plugins are stored here.

-   Composer.json: all composer dependencies we install are stored here.

-   Package.json: npm packages we install go here

-   Vite.lconfig.js: This a compiler. It compiles asstes like Javascript and CSS

## UNDERSTANDING LARAVEL ARCHITECTURE

-   HOW MVC WORKS

*   USER ----> CONTROLLER -----> MODEL -----> CONNTROLLER -----> VIEWS -----> USER.

-   User request goes to the Routes file which goes to the Controller, then the Controller request infromation from the Model which returns the information to the Controller then it sends to the View which send a response to the User.

## LARAVEL ARTISAN and CONSOLE

-   php artisan: This shows the list of all Artisan command.

-   php artisa about: This shows the version of our app.

-   php artisan make:view Home: To create a Home.blade.php file in the Views folder.

-   php artisan make:controller HomeController: To create a HomeController.php file in our app/http/controller folder.

## LARAVEL ARTISAN TINKER

-   php artisan tinker: We use this command to communicate with our Application from the terminal, testing, debugging, and interacting with your application's data and features

*   We can perform CRUD to our database with dummy file using the "tinker".

*   App\Models\User::count(); ====>> get the total number of rows in the user table in our database.

*   App\Models\User::factory(10)->create(); ====>> This is used to insert fake data into the database using a factory in Laravel.

*   We can even use PHP function in out tinker.

## ROUTES

-   Route act as a mapping between a specific URL and the corresponding code that should be executed.

-   When a REQUEST is sent to a web server, the ROUTES checks if there is a matching URL pattern. If a match is found, the corresponding action or code (also known as the route handler) is executed.

-   Route parameter is the parameter that you pass in the URL.

-   A fallback route in Laravel is used to handle requests that do not match any of the defined routes in your application.

## BLADE

-   In Laravel Blade, a stack is a way to define sections of content that can be pushed or appended to from child views or included partials and then rendered in the parent view.

## CONTROLLER

-   This type of controller contains only one type of actions/methods.

-   Creating a single action controller ====>> php artisan make:controller SingleActionController --invokable.

-   Resource controller: This is a type of controller that provides a set of actions or for handling common Crud operations like create, read, update, delete, etc.

-   How to create a Resource Controller ====>> php artisan make:controller BlogController -r ('-r' flag meaning resource).

## MIGRATIONS

-   Migration is a version control for database schema for Laravel.

-   You can create table database table. You can define columns columns type. You can establish indexing foreign keys.

-   To create a table ====>> php artisan make:migration create_blogs_table . table name must be plural to follow laravel naming convention.

-   To add the new table created to the database ====>> php artisan migrate.

## MODEL

-   A model is a presentation of a table in your database.

-   Models are used to interact with the database and encapsulate the logic related to the data manipulation. Each model corresponds to a data table.

-   To create a model ====>> php artisan make:model Blog . model name must be singular to follow laravel naming convention.

-   When creating a model with a custom name, for example, MyBlog instead of Blog, we must define the name of the corresponding table in the model using the following property ====>> protected $table = 'blogs'.

## SEEDERS

-   Seeders are basically used to seed data into the database.

-   In Laravel, seeders are used to put sample or initial data into your database, so you don't have to do it by hand.

-   To create a user seeder ====>> php artisan make:seeder UserSeeder

-   Before running the new created seeder call the seeder in the the DatabaseSeeder file ====>> $this->call(UserSeeder::class);

-   to run the seeder ====>> php artisan db:seed .

## FACTORIES

-   Factories in Laravel help you create fake data for testing.

-   To create a factory for a particular model ====>> php artisan make:factory BlogFactory.

-   Unlike Seeders where we hardcode the contents, Factories generate dynamic/ dummy contents.

-   To create the dummy data ====>> App\Models\Blog::factory(5)->create();

-   Before running the new created factory add the feeder in the the DatabaseSeeder file ====>> Blog::factory(10)->create();

-   to run the factory ====>> php artisan db:seed .

## ADD TABLE TO EXISTING TABLE

-   To add a column to an exisitng table ====>> php artisan make:migration add_author_to_blogs_table .

-   Define the column properties then ====>> php artisan migrate .

## QUERY BUILDER

-   Query Builder directly work with the Dataabse table. Eloquent works with the models.

-   Query Builder is really handy because it is more faster than eloquent when we have much data in our database.

-   First we have to import the "DB Facades" class before we can use the Query Builder. =====>> use Illuminate\Support\Facades\DB or ===> use DB .

-   When we want to select all items in a particular column we use the (pluck method), passing two parrams. first the column to fetch, second the key example in our case the id.

## AGGREGATE METHODS

-   Aggregate functions perform calculations on a set of values and return a single summary value. In the context of databases, they are typically used for summarizing data.

*   Aggregates methods are mostly used for time calculating. Suppose you have to calculate the sum of your price column.

*   You can also count how many columns you have. How many rows you have in the database.

## FILLABLE & MASS ASSIGNMENT

-   The Fillable property specifies which attributes can be mass-assigned.

-   Mass assignment allows setting multiple attributes on a model at once using an array of key-value pairs.

-   Guarded property specifies which attributes that can't be mass-assigned.

## CONDITION CLAUSE

-   LIKE: Used to search for a value within a column, often with wildcard characters (% or \_).

-   WHERE: Used to filter records based on a specified condition.

## FORM & VALIDATION

-   When you hit a Laravel application, Laravel automatically generates a unique token, and saves it in the user session.

-   Whenever you need to make a request such as POST, PUT, PATCH, or DELETE in Laravel, you must generate and include a CSRF token with your request. Laravel validates this token by comparing the token provided in the request (e.g., through a form or header) with the token it has stored in the session on your browser. If both tokens match, Laravel considers the request valid and processes it.

-   CSRF: This is for protection against malicious attacks.

-   When a form is submitted, Laravel by default automatically inject all of the data in the HTTP request.

-   CUSTOM REQUEST CLASS: To create ====>> php artisan make:request ContactStoreRequest .

## FILE STORAGE

-   We can store file locally or in AWS s3

-   Whenever we upload a file from our application by default Laravel store it in the Storage folder. we can also store it in the public folder.

-   The image uploaded is saved to the local disk, which is not publicly accessible via URL. Only files stored in the public disk or within the public folder can be accessed via URL.

-   Storage Link: This is a feature in Laravel that allows us to connect the storage/app/public directory to the public/storage directory via a symbolic link. This makes files stored in the public disk accessible via URLs. ====>> php artisan storage:link .

-   http://127.0.0.1:8000/storage/aWCxIuAG6JaXQyYqsOs9dGdt1JB4KiOZID0BBU74.png To view the File via URL.

-   Some shared hosting environments do not allow us to create the storage link because we can't run PHP Artisan commands using SSH on the server.

-   Unlink previous Storage file. ====>> php artisan storage:unlink .

-   Create a Custom Disk in the config/filesystems.php file.

-   File names should be unique to prevent malicious users from guessing and manipulating files. This also ensures that previously saved files are not overwritten by new uploads with the same name.

-   When a file is uploaded, the database stores only the file path, while the actual uploaded images are stored either locally on the server or in a cloud storage service like AWS S3.

-   The UI dynamically displays the uploaded files by retrieving their paths from the database and serving them either from the local "upload" directory or a cloud storage service like AWS S3.

## HTTP REDIRECTS

-   RESPONSE: Responses mean that from the application you return something to your user side.

-   Redirect to the Previous URL (Go Back) =====>> return redirect()->back();

-   Redirect to a Named Route ====>> return redirect()->route('home');.

-   Redirect to a Controller Action =====>> return redirect()->action([SomeController::class, 'method']);

-   Redirect to a Specific (Extenral) URL =====>> return redirect('http://example.com');

-   Redirect with Custom Status Code ====>> return redirect()->route('home', [], 301);

-   Redirect with Flash Data ====>> return redirect()->route('home')->with('status', 'Operation successful!');

-   Redirect to a Route with Parameters =====>> return redirect()->route('profile.show', ['id' => $user->id]);

## JOINS

-   A Foreign Key helps us relate or join two tables together.

-   An example of a foreign key can be a user_id, which must exist in the users table in order to establish a relationship with a different table.

-   INNER JOIN: This is a type of join that returns only the rows that have matching values in both tables involved in the join.

-   OUTTER JOIN (LEFT JOIN): This is a type of join that returns all rows from the left table and the matching rows from the right table.

-   OUTTER JOIN (RIGHT JOIN): This is a type of join that returns all rows from the right table and the matching rows from the left table.

-   OUTTER JOIN (FULL JOIN): This is a type of join that returns all rows from both tables, matching rows where they exist in both tables.

## ELOQUENT ORM RELATIONS

-   In Laravel, ORM provides a way to define and manage relationships between models, allowing you to interact with database tables.

-   Everything partaining to Relationships are done in the Model.

-   A One-to-One Relationship is a database relationship where each record in one table is associated with exactly one record in another table, and vice versa.

-   In a One-to-One relationship, belongsTo() is the opposite of hasOne().

-   hasOne(): Defines a one-to-one relationship where a model owns another model. For example, a User might have one Address.

-   belongsTo(): Defines the inverse of the one-to-one relationship, where the model belongs to another model. For example, the Address belongs to a User.

-   A One-to-Many Relationship is a database relationship where each record in one table is associated with more than one record in another table, and vice versa.

-   hasMany(): Defines a one-to-many relationship where a model owns another model. For example, a User might have multiple Orders.

-   A Many-to-Many relationship is a relationship between two entities where each instance of one entity can be related to multiple instances of the other entity, and vice-versa.

-   In a Many-to-Many relationship, foreign keys are not directly stored in the entities themselves. Instead, a separate join table is used to link the two entities, and this table contains the foreign keys referencing both entities.

-   To create a join table to relate two models in a Many-to-Many relationship, use the following command: ====>> php artisan make:migration create_car_user_table .

*   _THE TABLE NAME MUST FOLLOW THESE CONVENTION:_

-   Use singular forms of the related models' names (e.g., car and user).

-   Arrange the model names in alphabetical order (e.g., car comes before user).

-   Add the foreign IDs of both tables to the newly created join table..

-   hasManyThrough relationship: This allows you to define a relationship where a model is related to another model through an intermediate model. It’s useful when you need to retrieve data that’s indirectly related.

*   _Example Scenario: Consider a setup with Countries, States, and Cities_

-   A Country has many States.

-   A State has many Cities.

-   Thus, a Country has many Cities through States.

-   Polymorphic relationship: This is where a model can belong to more than one other model on a single association.

-   This is useful when multiple models (e.g., User and Product) can share the same relationship (e.g., Image).

-   Instead of creating separate relationships for each model, you can use a polymorphic relationship to handle it more efficiently.

*   _Example Sscenario: You have two models, User and Product, and you want to add images on both._

-   Polymorphic relationships do not use foreign keys (foreignId()) in the same way as standard relationships because the related model is determined dynamically at runtime.

## MIDDLEWARE

-   Middleware in Laravel act as a gatekeeper for incoming HTTP request.

-   Middleware allows you to inspect, modify or terminate requests before they reach the intended controller or route.

-   This is particularly useful for authentication, authorization, logging, encryption, and other any kind of task that needed to be performed before processing the request.

*   _Example Scenario: Preventing a user from accessing the Admin page. Blocking an unauthenticated user from performing a delete operation._

-   To create a Middleware, run the command ====> php artisan make:middleware CheckRoleMiddleware .

*   _The Request and Next parameteres in the Middleware's handle function are responsible for the below_

-   Request: Represents the incoming HTTP request, providing access to data like query parameters, body, and headers.

-   Next: A function that passes control to the next middleware in the stack, allowing the request to continue processing.

-   We only add the Middleware to the route we want to protect. example in our "post"->/post route and not "get"->/post route.

-   Route Group Middleware: We use the route group middleware when we want a particular group of routes to use the same middleware.

-   Controller Middleware: When we add middleware to a controller, we must define a middleware() method to specify which middleware should be applied to the controller's actions.

-   In controller middleware, we can use only() or except() to specify which actions the middleware should apply to.

-   Global Middleware: This middleware is applied to all incoming requests in the application, meaning every request will be filtered by this middleware. We can do this in the bootstrap/app.php file

-   Global Group Middleware: By default, global group middleware is not automatically loaded; we need to explicitly apply it to routes or controllers.

-   Middleware Alias: This is a short, descriptive name or label assigned to a middleware class to make it easier to reference and apply in your application.

-   Middleware parameters are additional arguments that you can pass to middleware when applying it to a route.

-   These parameters can be used to customize the behavior of the middleware for specific routes or scenarios.

-   Adding a third parameter to the Middleware's handle function.

*   _Example Scenario: /admin/dashboard?id=8_

-   ## AUTHENTICATION

-   Authentication is a process of verifying the identity of a user in your application.

-   Installing Authentication Starter Kit ====>> composer require laravel/breeze --dev.

-   After Composer has installed the Laravel Breeze package, you should run the breeze:install Artisan commands below.

*   php artisan breeze:install
*   php artisan migrate
*   npm install
*   npm run dev

-   ## AUTHORIZATION

-   Authorization is a process of checking if an authenticated user has permission to access specific rosource or perform certain action in the application.

-   Authrization comes after the Authentication.

-   _GATE_

-   Gate is a mechanism for defining authorization logic in closure based approach.

-   Gates provides a simple way to determine if a user is authorized to perform a given task.

-   _POLICY_

-   While Gates are created to handle specific actions in our application, Policies are associated with a specific Model to define authorization logic for various actions on that Model.

-   To create a Policy, run this command. ====>> php artisan make:policy PostPolicy --model=Post.

## HTTP RESPONSES

-   Laravel automatically converts the response to JSON if the return value is an array or a collection

## MAIL

-   To send an email with an HTML template, the first step is to create a Mailable class by running the command: ====>> php artisan make:mail SendMail .

*   _When attaching files to your email:_

-   Use fromPath() if the file is located in the public/uploads folder.

-   Use fromStorage() if the file is stored in the storage/app folder.

-   QUEUING EMAILS: Laravel Queuing lets you handle time-consuming tasks, like sending emails or uploads, in the background. This boosts your app's performance and responsiveness.

-   To start the queue worker, run the following command: ====>> php artisan queue:work

## BLADE COMPONENTS

-   Blade components in Laravel are reusable, customizable pieces of UI that can be included in different views, making your code cleaner and more maintainable. Components allow you to encapsulate complex HTML, logic, and styling, and reuse them across your application.

-   To create a blade components, run this command: ====>> php artisan make:component Alert

-   To create a blade components inside nested folder, run this command: ====>> php artisan make:component From/Input

-   To create a inline blade components, run this command: ====>> php artisan make:component From/Link --inline (This type of component don't have View, they only have Class. code your view inside the class).

-   To create an Anonymous blade components, run this command: ====>> php artisan make:component from.button --view (This type of component don't have Class, they only have View.)

-   To create an two words blade components, run this command: ====>> php artisan make:component From/FormSelect

-   To pass data to a component, first create a property in the component's class.

-   SLOTS: This is exactly like the @yeild() directive in blade.

## SESSIONS

-   Sessions provide a way to store information about a user across multiple requests. This is essential because HTTP-driven applications are stateless.

-   To start using sessions and storing session data, install the required package by running the command below:

-   composer require barryvdh/laravel-debugbar --dev

## CACHING

-   Caching is a technique used to store frequently accessed data in a temporary storage area (called a cache) to reduce the time it takes to retrieve the data.

-   By keeping copies of data in the cache, systems can avoid expensive operations like database queries or computations, thereby improving application performance and responsiveness.

-   _Differences Between Session and Cache_

*   Session is user-specific storage that persists data for a single user across their browsing session. It is typically used to store temporary user-related data, such as authentication information.

*   Cache is a global storage mechanism that stores frequently accessed data, often from the database, to reduce load times and improve performance. It is not user-specific and is shared across all users.

-   Caching database responses works on the first request, and subsequent requests fetch data from the cache until it expires or is manually cleared.

-   Using File Driver for Caching is faster than using Database Driver.

##  QUEUE AND BACKGROUND PROCESSING

-   A queue provides an efficient way to defer the processing of time-consuming tasks, such as sending emails or processing uploaded files.

-   This is particularly useful for improving application performance by handling such tasks asynchronously, preventing them from blocking the main execution flow.

-   Jobs are essentially classes where we define and register our time-consuming tasks. When a job is executed, it runs in the background.

-   To create a JOB class run this command:  ====>>  php artisan make:job SendWelcomeEmail.

-   To create a Mail class run this command:   ====>>   php artisan make:mail WelcomeEmail .

-   To process the Queue run this command:   ====>>   php artisan queue:work  .

-   To run the command above on the server, we use a *cron job* .

-   Ensure that the command is running continuously to process tasks (jobs) from the queue stored in the database.

##  OBSERVERS, EVENT AND LISTENERS

-   Model Observers in Laravel are classes that allow you to listen for specific events that occur on Eloquent models, such as when a model is created, updated, deleted, or retrieved. 

-   Observers help keep your application logic clean by separating business logic related to model events into dedicated classes.

-   To create an Observer run this command:   ====>>  php artisan make:observer BookObserver --model=Book  .

-   Register the Observer class in the AppServiceProvider class.

*   _WHEN WE CREATE OR UPDATE OR DELETE A RECORD IN OUR DATABASE, IT TRIGGERS AN EVENT. THE OBSERVER LISTENS FOR THAT EVENT AND PERFORM A CORRESPONDING TASK_

-   Following the SOLID principles, particularly the Single Responsibility Principle (SRP), the controller should only handle storing the data. Tasks like sending email notifications should be delegated to a separate service or listener.

-   Events: These are actions or occurrences that happens in our Application.

-   Listeners: These are the classes that react to the Events when called or triggered.

-   _A SINGLE EVENT CAN HAVE MULTIPLE LISTENERS_ Supposing we want to do multiple TASK with just an EVENT.

-   To create an Event and a Listener for that event. run the commands below:

-   php artisan make:event,     php artisan make:listener

*   _DIFFERENCE BETWEEN MODEL OBSERVERS AND EVENT & LISTENERS_

-   Model observers are specifically designed to Monitor changes in Models, 

-   while Events and Listeners can be used to handle application-wide events, making them more versatile and not limited to models.

##  BROADCASTING

-   BROADCASTING in Laravel allows you to broadcast events from your server to connected clients like browser, mobile devices, etc. in real time using technologies like WebSocket.

-   This is particularly useful for building real time features like notification, real time chat applications, live updates, etc.

*   _WEBSOCKET is a network protocol that enables full-duplex (two-way) communication between a client and a server over a single, persistent connection._

-   Via WebSocket we basically can pass our data in real time.

-   PUSHER is a platform and service that provides real-time communication APIs to facilitate the implementation of real-time features in applications. 

-   It is widely used for enabling real-time data updates, push notifications, and live interactions between clients and servers without the need for complex infrastructure setup.

-   _IN BROADCASTING, WE BROADCAST EVENT FROM THE CONTROLLER AND NOT FIRE EVENT_

##  BROADCASTING - CHANNELS

-   In Pusher and similar real-time platforms, Channels are used to organize events and messages for real-time communication.

-   They come in three types: Public, Private, and Presence. Each has specific use cases and levels of access control.

-   Public Channels: This is the type of Channel that any client can subscribe to without authentication. (e.g. Live sports scores. Stock market updates. Public announcements.).

-   Private Channels: This is the type of Channel that require user authentication before subscribing. (e.g. WhatsApp group. Facebook Messenger Stock market updates. Public announcements.).

-   User-specific notifications (e.g., order updates for a specific customer).

-   Content restricted to logged-in users or premium members.

-   Presence Channels: A special type of Private Channel with added functionality to track and broadcast user presence information (e.g., online/offline status).

-   Showing a list of users in a chat room.

-   Collaborative applications (e.g., a live document editor showing who is currently editing, Google Docs, chat apps).

##  BROADCASTING - INSTALLATION  - Server Side Installation

-   To install Broadcasting run this command:   ====>>   php artisan install:broadcasting  .   choose 'no' when asked to use Laravel Reverb.

-   To install Server side package for Pusher run this command:    ====>   composer require pusher/pusher-php-server  .

-   Add Pusher variables above the 'VITE_APP_NAME' in the .env file .

-   Set Broadcasting connection to 'pusher'  ( BROADCAST_CONNECTION=pusher )  .

##  BROADCASTING - INSTALLATION  - Client Side Installation

-   To install Client side package for Pusher run this command:    ====>   npm install --save-dev laravel-echo pusher-js .

-   Update the 'resources/js/echo.js' file to Pusher

-   Add VITE variables below the 'VITE_APP_NAME' in the .env file .  

-   Run the 'npm run build' command:   ====>>   npm run build  .

## BROADCASTING RECAP

-  We only Broadcast an event when working with real-time updates.

-  The Server broadcasts the event, while the Client side listens to the event.

-  The data we receive in the constructor will be automatically broadcast by the event.

-  routes/channels.php ====>> This route handles our broadcasting just like web routes.

-  The way web.php manages web URLs, channels.php manages who can connect to our real-time channels.

## BROADCASTING PASSING PARAMETERS

-   Passing parameters in your channel is essential for real-time communication. 

-   This allows you to send events to specific users by including an identifier to target the intended recipient.

-   Listening (/message): Requires a logged-in user because private channels enforce authentication and authorization for subscribing.

-   Broadcasting (/send-message): Does not require a logged-in user because broadcasting itself is server-controlled and security is handled by private channel subscriptions.

-   The broadcast does not involve client authentication—it just sends the event to the broadcaster (e.g., Pusher or Redis).

-   Private channels enforce access control at the listening stage (when subscribing), not at the broadcasting stage.

## BROADCASTING PRESENCE CHANnELS

-   The presence channel allows you to retrieve information about a user’s activity within a channel. Specifically, it provides data such as when a user joins or leaves the channel.

-   Additionally, you can access the current number of users connected to the channel.

*   _The presence channel primarily provides three types of information:_

-   1: When a user joins the channel.  2: When a user leaves the channel. 3: A list of users currently connected to the channel.

-   In a Presence Channel, you don't need to trigger an event manually. Instead, you simply listen to the channel, and it automatically provides updates such as when a user joins, leaves, or the list of currently connected users.

-   Then also create a route for the Presence Channel.

##  DEPENDENCY INJECTION

-   Dependency injection in Laravel is a design pattern that helps manage dependencies between different parts of our application in a clean and decoupled way.

-   In simple terms, it's a method of providing a class with its dependencies, rather than the class creating those dependencies itself. 

-   We use dependencies to access the properties or methods of another class. When a class depends on another class, it relies on that class to provide certain functionality or data.

-   This makes the code more modular and easier to test and maintain.

-   _Simple Analogy:_

-   Think of a carpenter building a house:

-   The carpenter is the class.

-   The tools (hammer, saw) are the dependencies.

-   The techniques (cutting, nailing) are the methods.
  
-   The carpenter (class) needs tools (dependencies) to perform their tasks (methods), but the tools are provided to them instead of them creating the tools themselves.

##  SERVICE CONTAINER

-   Service Container: This is where Laravel stores it services. Example: Cache, Event and more.

-   The Laravel Service Container is a powerful tool that _manages the dependencies_ of classes in your application.

-   It acts as a _central place_ where Laravel stores and resolves all the dependencies your classes need to work properly.

-   _Think of the Laravel Service Container as a big, organized toolbox that Laravel carries around._

-   Whenever your application needs something—like a specific tool—Laravel knows exactly where to find it in this toolbox. It picks out the right tool (dependency) and hands it over, ensuring your class has everything it needs to work smoothly.

-   The Service are services (tools) like Cache, database connection, Session, Mailer, Queue, Event and more that Laravel provides.

-   Services are usually provided by Laravel's core or can be custom-built to handle specific tasks in your application.

-   The Container is the tools box where these services are stored. That why it's called Service Container.

-   _For example,_ Cache is a service that helps us store and retrieve data efficiently.

-   Laravel knows how to provide the Cache service because it's registered in the Service Container. When we call for Cache, Laravel automatically resolves it from the container and gives us access to the Cache tool.

-   The Service Container ensures that we don't need to create or manage the Cache service manually. Instead, Laravel will handle it and inject it when required, simplifying the process and improving code organization.

-   **If we bind anything in our container, It will be globally accessible making us able to access that item in our entire project.**

##  SERVICE CONTAINER WITH SERVICE PROVIDER

-   **We can bind services using the AppServiceProvider class or any other service provider class. Service providers are special classes in Laravel that provide services to your application by registering them into the service container.**

-   When your application runs, Laravel first registers all available services by calling the register() method. Then, it boots the services by calling the boot() method.

-   If Laravel doesn't register the services, they won't be available for use in your project.

##  SERVICE PROVIDER

-   service provider acts as a server that provides features by registering and booting services.

-   It is used to bind services to the container and retrieve them when needed.

-   Laravel comes with default service providers. example AppServiceProvider.

-   To create a provider, run the command:  ====>>  php artisan make:provider TestServiceProvider

-   Then register the new provider in the bootstrap/providers.php file   (Laravel 11 register by default when the provider is created) .

##  SERVICE PROVIDER WITH SERVICE CLASS

-   To create a service class, run this command:   ====>>  php artisan make:class Services/NotificationService

-   Create notification service provider with command:   ====>  php artisan make:provider NotificationServiceProvider

-   When we use the Bind method ( app()->bind('') ) and we want to retrieve the service from the container using the make method ( app()->make('') ) we create a new instance everytime.

-   Singleton only create a single instance and returns the same instance everytime we call the make method.

-   Singleton is more performance efficient.

-   Programmer Code Flow [ Service class --> Service Provider --> Controller --> Route] .

-   Sending the Notification Flow: [ Routes -->  Controller --> Service class --> Service provider --> Service container ] .

##  FACADES

-   Facades are essentially a shortcut to access our services class make code more readable and easier to write.

-   Facade basically work with the service. It is an approach to easily access the Service.

-   Laravel Facades provide a convenient and static like interface to services that are bind in the Laravel service container.

-   Even though they look like a static methods, behind the scenes they are instance of classes that are resolved from the service container.

-   To crete a Facade class run this command:  ====>>  php artisan make:class Facades/Notification .

-   After creating the class, extends the Facade class and also add the method.

-   Programmer Code Flow [ Service class --> Facade --> Service Provider --> Controller --> Route] .
