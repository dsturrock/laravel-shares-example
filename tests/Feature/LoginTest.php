<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserEmails;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * Test can view share dashboard
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

    /**
     * Test that auth is required to view the shares dashboard
     *
     * @return void
     */
    public function testSharesNeedAuth()
    {
        $response = $this->get('/shares');
        $response->assertDontSee("Shares Dashboard");
    }

}
