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
        $category1->name = 'Children Book';
        $category1->save();

        $category2 = new Categories;
        $category2->name = 'Short Story';
        $category2->save();

        $category3 = new Categories;
        $category3->name = 'Novel';
        $category3->save();

        $category4 = new Categories;
        $category4->name = 'Funny Story';
        $category4->save();
    }
}
