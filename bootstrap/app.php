<?php

use App\Http\Middleware\CheckRoleMiddleware;
use App\Http\Middleware\DummyMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // $middleware->web(append: [
        //     CheckRoleMiddleware::class,
        //     DummyMiddleware::class
        // ]);

        // $middleware->appendToGroup('dummy-group', [
        //     DummyMiddleware::class,
        //     CheckRoleMiddleware::class
        // ]);

        $middleware->alias([
            'checkRole' => CheckRoleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
