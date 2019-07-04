CONTROLLER
==========

This bundle contains an `AbstractController` to provide a backward compatibility with Symfony.

The following methods are available:

- `dispatchEvent($eventName, BaseEvent $event)`
- `getEventDispatcher()`
- `getFormHelper()`
- `getLogger()`
- `getRouter()`
- `getSession()`
- `getTranslator()`
- `notify($eventName, NotificationInterface $notification)`
- `toast($eventName, ToastInterface $toast)`

`dispatchEvent($eventName, BaseEvent $event)`
---------------------------------------------

This method provides the same prototype regardless of Symfony version.

Into a controller with Symfony < 4.3:

```php
    $eventDispatcher = $this->get("event_dispatcher");
    $eventDispatcher->dispatch($eventName, $event);
```

Into a controller with Symfony 4.3 and more:

```php
    $eventDispatcher = $this->get("event_dispatcher");
    $eventDispatcher->dispatch($event, $eventName);
```

> IMPORTANT NOTICE: The $eventName and $event are permuted.

With a controller inherit from our `AbstractController`, the usage of
`dispatchEvent($eventName, $event)` works always with the following code:

```php
    $this->dispatchEvent($eventName, $event);
```
