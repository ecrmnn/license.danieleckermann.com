@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
<div class="header">
  <a href="https://laravelrush.com">
    <h1>Rush</h1>
  </a>
</div>
@endcomponent
@endslot

Thank you for purchasing a Laravel Rush lincese 🎉

---

## How to activate the license ✨
1. Create or login to your account on LaravelRush.com
2. Create new License
3. Paste in your activation key and prefered domain
4. Your license is activated
5. Install Laravel Rush and use your email and lincese key when prompted

---

## Your activation key 🔒
Activation key: `{{ $unclaimedLicense->key }}`

@slot('footer')
@component('mail::footer')
&copy; {{ date('Y') }} <a href="https://laravelrush.com" target="_blank">Laravel Rush</a> and Middleware AS
@endcomponent
@endslot
@endcomponent
