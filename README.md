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
