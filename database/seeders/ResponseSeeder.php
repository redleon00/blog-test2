<?php

namespace Database\Seeders;

use App\Models\Response;
use Illuminate\Database\Seeder;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Response::updateOrCreate(['user' => "Doe Ramon", 'response' =>  "First comments", 'commnent_id'=>1]);
        Response::updateOrCreate(['user' => "Peter Parker", 'response' =>  "Not the real spiderman", 'commnent_id'=>1]);
    }
}
