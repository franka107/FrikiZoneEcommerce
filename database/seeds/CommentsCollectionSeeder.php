<?php

use Illuminate\Database\Seeder;

class CommentsCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comment::class, 10)->create();
        //
    }
}
