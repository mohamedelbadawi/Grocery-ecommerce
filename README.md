
# Grocey ecommerce web and app

it's a multi language (Ar,En) ecommerce website for selling Grocey products
developed with PHP Laravel and some other tools and frameworks such as livewire .


## Live version


http://grocery-apid.herokuapp.com/home

http://grocery-apid.herokuapp.com/api

http://grocery-apid.herokuapp.com/admin

## Admin Dashboard

I used multi guard and made a seprated table for admins to make Auth

>http://grocery-apid.herokuapp.com/admin/login

![This is an image](https://raw.githubusercontent.com/mohamedelbadawi/Grocery-ecommerce/main/AdminDashboard.png)


- Arabic and English language
- Notifications for each created order implemented with queue to reduce time
- Extract data to many files such as `PDF , Excel ,CSV` 


## Home
![This is an image](https://raw.githubusercontent.com/mohamedelbadawi/Grocery-ecommerce/main/home.png)

![This is an image](https://raw.githubusercontent.com/mohamedelbadawi/Grocery-ecommerce/main/home1.png)

- multi language for site and product.
- realtime search for product in Arabic or English.
- multi category realtime filtering.
- session and database cart for user.
- multi address and choose one to be default.
- cash and card payment method using stripe.
- realtime validation for credit card info.
# API still under development


Clone the repository

    git clone https://github.com/mohamedelbadawi/Grocery-ecommerce.git

Switch to the repo folder

    cd Grocery-ecommerce

Install all the dependencies using composer

    composer install
    composer update

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    





## to launch the server
```bash
php artisan serve
```
The  project is now up and running! Access it at http://localhost:8000.
