# Programming Style Guide
The following section is written to be followed as the standard coding elements that are required to ensure the high level of technical interoperability between shared PHP code in our team.

# 1.	Overview
-	Files MUST use only `<?php` and `<?=` tags.
-   Class names MUST be declared in `StudlyCaps`.
-   Class constants MUST be declared in all upper case with underscore separators. 
-   Method names MUST be declared in `camelCase`

# 2. Files 
## 2.1 PHP Tags 
PHP code MUST use the long `<?php ?>` tags or the short-echo `<?= ?>` tags; it MUST NOT use the other tag variations.

~~~php
<?php
// side effect: change ini settings
ini_set('error_reporting', E_ALL);

// side effect: loads a file
include "file.php";

// side effect: generates output
echo "<html>\n";

// declaration
function nameFunction()
{
    // function body
}
~~~
## 2.2 Declaration of conditionals 
### IF statements
~~~php
//good 
if ($condition)
{
    ...
}

//bad 
if ($condition) ...
~~~

## 2.3 Declaration of loops


# 3. Namespace and class Names
Namespaces and classes MUST follow an "autoloading" PSR: [PSR-0, PSR-4].

This means each class is in a file by itself, and is in a namespace of at least one level: a top-level vendor name.

Class names MUST be declared in StudlyCaps.

Code written for PHP 5.3 and after MUST use formal namespaces.

For example:

~~~php
<?php
namespace Vendor\Model;

class Pet
{
    const PROJECT_NAME = "PetShop";
    const PROJECT_SEMESTER = '7'; 

}
~~~


# 4. Class Constants, Properties and Methods
The term "class" refers to all classes, interfaces, and traits.

## 4.1 Constants
Class constants MUST be declared in all upper case with underscore separators. For example:

~~~php
<?php
namespace Vendor\Model;

class Pet
{
    const PROJECT_NAME = "PetShop";
    const PROJECT_SEMESTER = '7'; 

}
~~~

## 4.2 Properties 
This guide avoids any recommendation regarding the use of: `$StudlyCaps`, `$camelCase`, `$under_score`  property names. 

## 4.3 Methods
Methods names MUST be declared in `camelCase()`

## 4.4 Routing
Routes names must use camelCase
~~~php
Route::get('open-source', 'OpenSourceController@index')->name('openSource');
~~~


REFERENCE FOR THE DEVELOPMENT OF THIS GUIDE WAS TAKEN FROM: [Basic Coding Standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)