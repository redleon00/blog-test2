<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::updateOrCreate(['user' => "Jhon Doe", 'comments' =>  "First comments"]);
        Comment::updateOrCreate(['user' => "Peter Parker", 'comments' =>  "Not the real spiderman"]);
    }
}
