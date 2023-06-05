<?php

// *** Assignment-16 *** 


// Task -1 :
// Answer :

//  To create a new Laravel project we have to run the following command:

laravel new MigrationAssignment //(command for commandline)


// ---------------------------------------------------------------------


// Task -2 :
// Answer :


// To Generate the migration file need to run the following command:

 php artisan make:migration create_products_table --create=products  //(php artisan command for commandline)

public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->text('description');
        $table->timestamps();
    });
}



// ---------------------------------------------------------------------


// Task -3 :
// Answer :

//To run the migration and create the "products" table in the database, need to run the following command:


  php artisan migrate //(php artisan command for commandline)


Migrating: 2023_06_05_000000_create_products_table
Migrated:  2023_06_05_000000_create_products_table

// The "Migrated" message indicates that the migration was successful.



// ---------------------------------------------------------------------


// Task -4 :
// Answer :

// Add the following code inside the up() method

$table->integer('quantity')->nullable();

// The modified up() method look like this:

public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->text('description');
        $table->timestamps();
        $table->integer('quantity')->nullable();
    });
}

// Run the migration :

php artisan migrate //(php artisan command for commandline)



// ---------------------------------------------------------------------


// Task -5 :
// Answer :

// Run the following command to generate the migration file:

php artisan make:migration add_category_to_products_table --table=products  //(php artisan command for commandline)


public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('category', 50)->nullable();
    });
}



// ---------------------------------------------------------------------


// Task -6 :
// Answer :

// Run the migration :

php artisan migrate //(php artisan command for commandline)


Migrating: 2023_06_06_000000_add_category_to_products_table
Migrated:  2023_06_06_000000_add_category_to_products_table


// The "Migrated" message indicates that the migration was successful.



// ---------------------------------------------------------------------


// Task -7 :
// Answer :

// Run the following command:

php artisan make:migration create_orders_table --create=orders //(php artisan command for commandline)


public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('product_id');
        $table->integer('quantity');
        $table->timestamps();

        $table->foreign('product_id')->references('id')->on('products');
    });
}




// ---------------------------------------------------------------------


// Task -8 :
// Answer :

// Run the following command:

php artisan migrate //(php artisan command for commandline)

Migrating: 2023_06_07_000000_create_orders_table
Migrated:  2023_06_


// ---------------------------------------------------------------------

?>