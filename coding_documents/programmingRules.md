# Essential programming rules in the Laravel project.

## Models:
- DO the VALIDATIONS inside the models
- IMPLEMENT getter and setter methods in the model.
- USE properly Laravel eloquent.

## Views
- EVERY view must extend from the master layout.
- EVERY view must be `Blade`.
- NEVER open and close `php` inside the VIEWS.
- ALWAYS make correct use of `scripts section` in master layout.
- USE getters and setters.

## Routes
- EVERY route must be associated with a CONTROLLER.
- Follow the SAME format for ROUTES.

## Controllers 
- NEVER `echo` in a Controller.
- DON'T DO the VALIDATIONS inside the controller
