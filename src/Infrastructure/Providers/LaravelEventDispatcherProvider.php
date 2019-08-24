<?php

declare(strict_types=1);

namespace Jc9Group\LaravelEventDispatcher\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Jc9Group\LaravelEventDispatcher\EventDispatcherImpl;
use Psr\EventDispatcher\EventDispatcherInterface;

final class LaravelEventDispatcherProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            EventDispatcherInterface::class,
            EventDispatcherImpl::class
        );
    }
}
