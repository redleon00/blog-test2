<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ResponseController;

class ResponseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPostResponse()
    {
        $response = new ResponseController();
        $request = new Request([
            'user' => 'Redis',
            'response' => 'rest response',
            'commnent_id' => 1
        ]);
       
        $res = $response->postResponse($request);
        $res->assertSessionHas('status', 'Post has been created sucessfully');
        $this->assertEmpty($response->postResponse($request));
        //$this->assertTrue(true);
    }
}
