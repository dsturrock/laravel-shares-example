<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserEmails;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = $this->createUser();
        
        $this->be($user);
        $this->assertAuthenticatedAs($user);
        $response = $this->get('/shares');

        $response->assertStatus(200);
        $response->assertSee('Shares Dashboard');
    }

}
