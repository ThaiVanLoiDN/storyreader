<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            
        ]);

        $user1 = new User;
        $user1->name = 'Administrator';
        $user1->email = 'admin@gmail.com';
        $user1->image = 'avatar2.png';
        $user1->role = 2;
        $user1->password = bcrypt('123456');
        $user1->save();

        $user2 = new User;
        $user2->name = 'Moderator A';
        $user2->email = 'moderator@gmail.com';
        $user2->image = 'avatar.png';
        $user2->role = 1;
        $user2->password = bcrypt('123456');
        $user2->save();

        $user3 = new User;
        $user3->name = 'Moderator B';
        $user3->email = 'moderator2@gmail.com';
        $user3->image = 'avatar1.jpg';
        $user3->role = 1;
        $user3->password = bcrypt('123456');
        $user3->save();
    }
}
