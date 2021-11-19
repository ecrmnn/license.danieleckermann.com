<?php

namespace App\Mail;

use App\Models\UnclaimedLicense;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Activation extends Mailable
{
    use Queueable, SerializesModels;

    private $unclaimedLicense;

    public function __construct(UnclaimedLicense $unclaimedLicense)
    {
        $this->unclaimedLicense = $unclaimedLicense;
    }

    public function build()
    {
        return $this->to($this->unclaimedLicense->email)
            ->markdown('mail.activation', [
                'unclaimedLicense' => $this->unclaimedLicense,
            ]);
    }
}
