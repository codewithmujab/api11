<?php

namespace App\Providers;

//interfaces

use App\Interfaces\OrderRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\TaskRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\OrderRepository;
//repositories
use App\Repositories\ProductRepository;
use App\Repositories\TaskRepository;
use App\Repositories\UserRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //users
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        //product
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

        //task
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);

        //orders
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
