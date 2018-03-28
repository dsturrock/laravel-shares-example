<?php

namespace Tests\Feature;

use App\Models\StockShares\StockShare;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PurchaseSharesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBuyShare()
    {

        $user = $this->createUser();
        $this->be($user);

        $sharePOST = [
            'company_name' => 'Test',
            'share_instrument_name' => 'A',
            'quantity' => 1,
            'price' => 50.0005,
            'total_investment' => 75,
            'certificate_number' => 2,
        ];

        $response = $this->post('/sharePurchase', $sharePOST);

        $share = $user->user->shares()->first();

        $this->assertEquals($share->user_id, $user->user->id);
        $this->assertEquals($share->company_name, "Test");
        $this->assertEquals($share->certificate_number, 2);
    }

    public function testValidationOnSharePurchase()
    {
        $user = $this->createUser();
        $this->be($user);

        $sharePOST = [
            'share_instrument_name' => 'A',
            'quantity' => 1,
            'price' => 50.0005,
            'total_investment' => 75,
            'certificate_number' => 2,
        ];

        $response = $this->post('/sharePurchase', $sharePOST);

        $response->assertStatus(302);
        $response->assertSessionHasErrors(["company_name"]);
    }
}
