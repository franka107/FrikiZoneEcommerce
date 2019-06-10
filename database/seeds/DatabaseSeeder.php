<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        
       // $this->call(OrdersCollectionSeeder::class);
        $this->call(UsersCollectionSeeder::class);
        $this->call(CategoriesCollectionSeeder::class);
        $this->call(CommentsCollectionSeeder::class);
        $this->call(ProductsCollectionSeeder::class);
    }
}
