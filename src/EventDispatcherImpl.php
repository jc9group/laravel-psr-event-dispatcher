<?php

declare(strict_types=1);

namespace Jc9Group\LaravelEventDispatcher;

use Psr\EventDispatcher\EventDispatcherInterface;

final class EventDispatcherImpl implements EventDispatcherInterface
{
    public function dispatch(object $event)
    {
        event($event);
    }
}
