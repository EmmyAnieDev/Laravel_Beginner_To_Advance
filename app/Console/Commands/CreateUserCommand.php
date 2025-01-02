<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     *
     * This is the command itself example php artisan make:command. so the "make:command" is a signature
     */
    // protected $signature = 'user:create {name} {email} {password}';

    protected $signature = 'user:create {--name=} {--email=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $user = Str::random(6);
        // $email = "$user@example.com";
        // $password = 'password';

        # Using the arguments to create a new user...
        // $user = $this->argument('name');
        // $email = $this->argument('email');
        // $password = $this->argument('password');

        # Using the options to create a new user...
        # If there's no optional parameter use the default below.
        $user = $this->option('name') ?? 'Test Admin';
        $email = $this->option('email') ?? Str::random(4).'@example.com';
        $password = $this->option('password') ?? 'password';


        User::create([
            'name' => $user,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $this->info("User created: Name: $user Email: $email Password: $password");
    }
}
