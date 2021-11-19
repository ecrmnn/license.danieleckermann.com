<?php

namespace App\Observers;

use App\Models\License;
use App\Models\UnclaimedLicense;
use Illuminate\Support\Str;

class LicenseObserver
{
    /**
     * Handle the License "created" event.
     *
     * @param  \App\Models\License  $license
     * @return void
     */
    public function created(License $license)
    {
        // Delete used license
        UnclaimedLicense::where('key', $license->activation_key)->delete();

        $key = collect(['!', '$', '#', '@', '*', '^', '-', ':'])
            ->merge(str_split(Str::random(64)))
            ->shuffle()
            ->take(32)
            ->join('');

        // Create license key
        $license->update(['license_key' => $key]);
    }

    /**
     * Handle the License "updated" event.
     *
     * @param  \App\Models\License  $license
     * @return void
     */
    public function updated(License $license)
    {
        //
    }

    /**
     * Handle the License "deleted" event.
     *
     * @param  \App\Models\License  $license
     * @return void
     */
    public function deleted(License $license)
    {
        //
    }

    /**
     * Handle the License "restored" event.
     *
     * @param  \App\Models\License  $license
     * @return void
     */
    public function restored(License $license)
    {
        //
    }

    /**
     * Handle the License "force deleted" event.
     *
     * @param  \App\Models\License  $license
     * @return void
     */
    public function forceDeleted(License $license)
    {
        //
    }
}
