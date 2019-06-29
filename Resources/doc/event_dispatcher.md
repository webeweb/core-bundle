EVENT DISPATCHER
================

This bundle provide an `EventDispatcherHelper` to preserve the backward compatibility
and ensures events dispatching whatever the used version of Symfony.

Inside Symfony before version 4.3, you dispatch events with following code:

```php
    $eventDispatcher = $this->get("event_dispatcher");
    
    if (null !== $eventDispatcher || true === $eventDispatcher->hasListeners($eventName)) {
        $eventDispatcher->dispatch($eventName, $event);
    }
```

Inside Symfony after version 4.3, you dispatch events with following code:

```php
    $eventDispatcher = $this->get("event_dispatcher");
    
    if (null !== $eventDispatcher || true === $eventDispatcher->hasListeners($eventName)) {
        $eventDispatcher->dispatch($event, $eventName);
    }
```

With `EventDispatcherHelper`:

```php
    $eventDispatcher = $this->get("event_dispatcher");
    EventDispatcherHelper::dispatchEvent($eventDispatcher, $eventName, $event);
```
