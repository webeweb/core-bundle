DEPENDENCY INJECTION
====================

The package contains the necessary classes according Symfony guidelines to assume
it own configuration.

Default configuration is:

```yaml
wbw_core:
    commands: true
    event_listeners: true
    providers: true
    quote_providers:
        worlds_wisdom: false
    security_event_listener: false
    twig: true
```

- `commands` ensures commands loading (see [Command](command.md)).
- `event_listeners` ensures event listeners loading (see [Event listener](event_listener.md)).
- `providers` ensures providers loading (see [Provider](provider.md)).
- `security_event_listener` ensures Security event listener loading (see [Event listerner](event_listener.md)).
- `twig` ensures Twig extensions loading (see [Twig](twig.md)).
- `worlds_wisdom` ensures World's wisdom quote provider loading (see [Quote](quote.md)).
