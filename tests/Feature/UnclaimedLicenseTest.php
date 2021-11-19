<?php

namespace Tests\Feature;

use App\Mail\Activation;
use App\Models\UnclaimedLicense;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class UnclaimedLicenseTest extends TestCase
{
    public function testCanPurchaseLicense()
    {
        Mail::fake();

        $this->assertDatabaseCount('unclaimed_licenses', 0);

        $this->postJson(route('api.unclaimedLicense.store'), $this->stub())
            ->assertCreated();

        $this->assertDatabaseCount('unclaimed_licenses', 1);

        Mail::assertSent(Activation::class, function (Mailable $mail) {
            $mail->build();

            return $mail->hasTo('danieleckermann@gmail.com');
        });
    }

    public function testMailShouldContainUnclaimedLicense()
    {
        $this->assertDatabaseCount('unclaimed_licenses', 0);

        $this->postJson(route('api.unclaimedLicense.store'), $this->stub())
            ->assertCreated();

        $this->assertDatabaseCount('unclaimed_licenses', 1);

        $unclaimedLicense = UnclaimedLicense::first();
        $mail = new Activation($unclaimedLicense);

        $mail->assertSeeInText($unclaimedLicense->key);
    }

    private function stub()
    {
        $payload = File::get(base_path('tests/Fixtures/Stripe/charge.succeeded.stub.json'));

        return json_decode($payload, true);
    }
}
