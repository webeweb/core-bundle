COMMAND
=======

This package provides:

- `AbstractCommand`
- `UnzipAssetsCommand`

`AbstractCommand`
-----------------

It's an abstract class created to provide some common methods for building another
commands.

- `getCheckbox()`
- `newStyle()`

`getCheckbox()` method returns a string containing a boolean representation
to output a command result into a console.
 
`newStyle()` method returns a `StyleInterface` like this used by Symfony to
produce elegant output into a console.

`UnzipAssetsCommand`
--------------------

This command provides a simple mechanism to unzip assets.
