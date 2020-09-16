# Petshop

## Members: 
- Felipe Ríos Lopez
- Juan Felipe Londoño Gaviria
- Santiago Hincapié Murillo

## INFORMATION ABOUT THIS REPOSITORY

### In this repository your going to find three particular folders. 
- **PetShop folder**: contain all the source code for   the project. 
- **coding_documents folder**: contain two files: 

    - **programming style guide:** Short document with all coding style indications. For example, define styles for ifs, for while, such as naming classes, methods, variables, etc.

    - **programming rules:** Short document with the rules that the architect considers essential for programming the Laravel project

    - **Other_files**: Folder that includes some extra files related to the project. (Entregable, Screenshots and excel-funtionalities)




# HOW TO RUN THE PROGRAM:

# 1 What do you need to have installed to run the project correctly?
- php
- Xampp or Wampp
- MYSQL 
- Apache 
- Laravel (This project was developed with laravel 7.x)
- DomPDF Library
- Auth for login (Laravel)
- Cofigure the port of the data base for MYSQL connection
- Create a DB in MYSQL

## Installing DompDF Library: 
Run the following command to install the DompPDF library in your machine: 

`
 composer require barryvdh/laravel-dompdf
`
![Alt text](/PetShop/storage/images_Guide/guide2.png)

If you have any problem please check out the 
[Official Documentation:](https://github.com/barryvdh/laravel-dompdf) of DomPDF Library

-----------------------------------------------------------------------
## Installing Auth for login (Laravel):
`
php artisan serve
`

**Now you are ready to run the app with dependencies issues.**


-----------------------------------------------------------------------
# Running the Project - If you have download the project (Not cloning from Github)

Place the foder project called PetShop inside the folder Petshop. 


In this case we have the project in the following path:  
![Alt text](/PetShop/storage/images_Guide/guide1.png)
(If you use Xampp just go to folder `htdocs`, if you use Wampp go to the respective folder to place Laravel projects and place there the folder)

Make the following command to run the project:

`
php artisan serve
`
![Alt text](/PetShop/storage/images_Guide/guide3.png)

The Page will display on your screen like this: 
![Alt text](/PetShop/storage/images_Guide/guide4.png)

Go to the following url in your browser: 
`http://127.0.0.1:8000/login`

---------------------------------------------------------------------------

# Running the Project - If you clone the project from github:
