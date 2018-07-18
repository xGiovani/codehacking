<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createPosts();
        $this->command->info('Herro');
    }

    private function createPosts(){
        Post::create([
            'title' => 'My first post',
            'body' => 'I love laravel'
        ]);

        $this->command->info('Post "My first post create"');
    }

}
