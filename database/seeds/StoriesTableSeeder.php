<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Categories;
use App\Models\Stories;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minCategory = Categories::min('id');
        $maxCategory = Categories::max('id');

        $minUser = User::min('id');
        $maxUser = User::max('id');

        $story1 = new Stories;
        $story1->title = 'Sed porttitor pretium venenatis';
        $story1->author = 'Akira Phan';
        $story1->file = 'Graphics#1.pdf';
        $story1->image = 'story1.jpg';
        $story1->preview = 'Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci';
        $story1->category_id = $minCategory;
        $story1->user_id = $minUser;
        $story1->save();

        $story2 = new Stories;
        $story2->title = 'Aliquam quis ligula elit';
        $story2->author = 'Tokyo Toriyama';
        $story2->file = 'Graphics#1.pdf';
        $story2->image = 'story2.jpg';
        $story2->preview = 'Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti.';
        $story2->category_id = $maxCategory;
        $story2->user_id = $maxUser;
        $story2->save();
    }
}
