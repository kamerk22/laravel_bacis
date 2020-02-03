<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = 'Post';
        $body = 'Body of Artical';

        $userIds = User::all()->pluck('id')->toArray();

        for ($i = 1; $i <= 12; $i++) {
            Post::create([
                'title' => "Post - $i",
                'body' => "Body of Post - $i",
                'user_id' => Arr::random($userIds)
            ]);
        }
    }
}
