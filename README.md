Link for the project: http://ec2-184-72-114-127.compute-1.amazonaws.com/public
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

# 1. What do you need to have installed to run the project correctly?
- php
- Xampp or Wampp
- MYSQL 
- Apache 
- Composer
- Laravel (This project was developed with laravel 7.x)
- DomPDF Library
- Configure the port of the data base for MYSQL connection
- Create the DB for the page in MYSQL
- Run Fakers (optional)

## Installing DompDF Library: 
Run the following command to install the DompPDF library in your machine: 

`
 composer require barryvdh/laravel-dompdf
`
![Alt text](/PetShop/storage/images_Guide/guide2.png)

If you have any problem please check out the 
[Official Documentation:](https://github.com/barryvdh/laravel-dompdf) of DomPDF Library

## Configure the port of the data base for MYSQL connection
in the `.env` file in `DB_PORT=` replace with the port you have MSQL with Xampp or Wampp. In this case we use port 3307
![Alt text](/PetShop/storage/images_Guide/guide5.png)

## Create the DB for the page in PHPMYADMIN
As you saw before we have `DB_DATABSE=petshopdb`


You must go to `http://localhost/phpmyadmin/` and create a table with the specific name, in this project we use `petshopdb`


![Alt text](/PetShop/storage/images_Guide/guide6.png)

## Run fakers
Run the following command:
` php artisan migrate:fresh --seed`

![Alt text](/PetShop/storage/images_Guide/guide7.png)

**Now you are ready to run the app without dependencies issues.**

-----------------------------------------------------------------------
# 2. Running the Project - If you have download the project (Not cloning from Github)

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

Now you can start using the page

---------------------------------------------------------------------------

# 2.Running the Project - If you clone the project from github:
Run the following command in the project folder: `php artisan key:generate `

![Alt text](/PetShop/storage/images_Guide/guide8.png)

Run the following command: `composer update `
![Alt text](/PetShop/storage/images_Guide/guide9.png)

*Now you can following the steps of: Running the Project - If you have download the project (Not cloning from Github)*
