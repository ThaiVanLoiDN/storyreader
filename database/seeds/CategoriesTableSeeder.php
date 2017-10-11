<?php

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Categories;
        $category1->name = 'Anime';
        $category1->save();

        $category2 = new Categories;
        $category2->name = 'Novel';
        $category2->save();
    }
}
