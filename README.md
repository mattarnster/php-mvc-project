# php-mvc-project

Built this in a couple of days. Core functionality is done!
* Controllers work
* Models work
* Views work

## Controllers

Controllers are routed to depending on the config.yml file which contains the routes.
An example follows below:
```
Welcome: /
```
So, the 'Welcome' bit is which controller the route corresponds to. It needs to be in the format like so:
ControllerName: Path (but without the 'Controller' on the end).

## Views

Views are Twig template files which get rendered.

