# A Shopping Cart Application 

	Using  Laravel 5.3 PHP Framework
	https://github.com/laravel/framework

# Payments Using Stripe 

	https://github.com/stripe/stripe-php

# Quick Start and Installation

To get started and start making something of your own using this repository as a base: download this repository, create an empty database that this application will use, configure a few settings in the app/config folder and enjoy!

# Configuration

Open up app/config/database.php and configure connection settings for your database.

# Installation

CD into the directory of this project and run the following three commands:

composer install
php artisan migrate
php artisan db:seed
This will install all Composer dependencies, create the database structure and populate the database with some sample data so that you could see this project in action.

# Documentation

While the code of the application is heavily documented it helps to know how the code is structured and what standards it follows.

# Project structure

We creating three models (Products.php Order.php and Cart.php) and the migrations for the two of them (Products, Orders)

On the Handler.php we keeping old url for future redirect and changing the default auth redirect form login -> user.signin
On the RedirectIfAuthenticated.php changed the default redirect from home -> product.index

-ProductController 

	- Display Products
	- Add Products to Cart
	- Reduce Products from the cart
	- Delete Products from the cart
	- Display the Cart
	- And finally making the transaction with the stripe.com API (here you provide your private API key)

-UserController
	
	- Signup 
	- Signin 
	- Logout 
	- Display User's Profile and Orders History
