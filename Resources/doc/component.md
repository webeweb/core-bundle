COMPONENT
=========

This package contains a `BaseEvent` to provide a backward compatibility with Symfony.

With Symfony < 4.3, an event must inherit from `Symfony\Component\EventDispatcher\Event`.

With Symfony 4.3 and more, an event must inherit from `Symfony\Contracts\EventDispatcher\Event`.

> IMPORTANT NOTICE: It's an useful alias to maintain our bundle with a lot of Symfony versions and
> keep the same code base into our multiple applications regardless of Symfony version.
