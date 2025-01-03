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

    // protected $signature = 'user:create {--name=} {--email=} {--password=}';

    protected $signature = 'user:create {--name=} {--email=} {--password=} {--count=1}';

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
        // $user = $this->option('name') ?? 'Test Admin';
        // $email = $this->option('email') ?? Str::random(4).'@example.com';
        // $password = $this->option('password') ?? 'password';

        # Ask a user for values.
        // $user = $this->ask('Type your username: ');
        // $email = $this->ask('Type your email: ');
        // $password = $this->ask('Type your password: ');

        $count = $this->option('count');
        $bar = $this->output->createProgressBar($count);
        $bar->start();
        for ($i = 1; $i < $count; $i++) {
            $user = Str::random(5);
            $email = Str::random(5).'@example.com';
            $password = '12345678';
            User::create([
                'name' => $user,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
            $bar->advance();
        }
        $bar->finish();

        $this->info("\nUser created successfully!");
    }
}
