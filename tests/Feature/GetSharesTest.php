<?php

namespace Tests\Feature;

use App\Models\StockShares\StockShare;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetSharesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetSharesForUser()
    {

        $user = $this->createUser();
        $this->be($user);

        $share = factory(StockShare::class)->create(['user_id' => $user->user_id]);

        $response = $this->get('/shares');

        $response->assertStatus(200);
        $response->assertSee('Price: $100.0055');
    }
}
