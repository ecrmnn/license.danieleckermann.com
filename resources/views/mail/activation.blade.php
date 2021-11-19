@component('mail::message')
Thank you for purchasing a Laravel Rush lincese.

## How to activate the license
1. Create or login to your account on LaravelRush.com
2. Create new License
3. Paste in your activation key and prefered domain
4. Your license is activated
5. Install Laravel Rush and use your email and lincese key when prompted

## Your activation key
Activation key: `{{ $unclaimedLicense->key }}`

Thanks,<br>
{{ config('app.name') }}
@endcomponent
