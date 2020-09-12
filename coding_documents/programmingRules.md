# Essential programming rules in the Laravel project.

## Models:

## Views
- EVERY view must extend from the master layout.
- EVERY view must be `Blade`.
- NEVER open and close `php` inside the VIEWS.
- ALWAYS make correct use of `scripts section` in master layout.

## Routes
- EVERY route must be associated with a CONTROLLER.
- Follow the SAME format for ROUTES.


## Controllers 
- NEVER `echo` in a Controller.
- Do the VALIDATIONS inside the controller