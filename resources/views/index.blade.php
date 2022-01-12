<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Rush</title>
  <meta name="description" content="Build apps faster than ever with Laravel Rush">
  <link rel="canonical" href="https://www.laravelrush.com" />
  <meta property="og:title" content="Laravel Rush">
  <meta property="og:description" content="Build apps faster than ever with Laravel Rush">
  <meta property="og:url" content="https://www.laravelrush.com">
  <meta property="og:locale" content="en">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ asset('img/og.png') }}">
  <meta property="og:site_name" content="Laravel Rush">

  <link rel="icon" href="{{ asset('img/favicon.jpg') }}" type="image/jpg">
  <link rel="stylesheet" href="{{ asset('app.css') }}">
  <link rel="stylesheet" href="{{ asset('prism.css') }}">
  <script src="{{ asset('prism.js') }}"></script>
</head>

<body class="antialiased bg-gray-50">
  <div class="relative bg-gradient-to-b from-gray-800 to-indigo-900 overflow-hidden">
    <div
      class="absolute -top-60 bg-gradient-to-b from-gray-800 to-indigo-800 opacity-50 w-full h-[500px] transform -skew-y-12">
    </div>
    <div
      class="absolute -top-60 bg-gradient-to-b from-gray-800 to-indigo-800 opacity-50 w-full h-[550px] transform -skew-y-12">
    </div>
    <div
      class="absolute -top-60 bg-gradient-to-b from-gray-800 to-indigo-800 opacity-50 w-full h-[600px] transform -skew-y-12">
    </div>

    <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
      <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784" fill="none"
        viewBox="0 0 640 784">
        <defs>
          <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-indigo-900" fill="currentColor" />
          </pattern>
        </defs>

        <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
      </svg>
    </div>

    <div class="pt-6 pb-16 sm:pb-24 lg:pb-32">
      <div>
        <nav class="relative max-w-6xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
          <div class="flex items-center flex-1">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="#"
                class="inline-block tracking-tighter font-bold text-3xl text-white italic bg-clip-text text-transparent bg-gradient-to-tr from-indigo-200 to-indigo-300">
                Rush&nbsp;
              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button type="button"
                  class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                  aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
            {{-- <div class="hidden md:block md:ml-10 md:space-x-10">
              <a href="#" class="font-medium text-white hover:underline">Product</a>

              <a href="#" class="font-medium text-white hover:underline">Features</a>

              <a href="#" class="font-medium text-white hover:underline">Marketplace</a>

              <a href="#" class="font-medium text-white hover:underline">Company</a>
            </div> --}}
          </div>
          <div class="hidden md:block text-right">
            <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">
              <a href="{{ route('rush::auth.index') }}"
                class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                Log in
              </a>
            </span>
          </div>
        </nav>
      </div>

      <main class="relative mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            <h1 class="lg:mt-3">
              <span
                class="block text-sm font-semibold uppercase tracking-wide text-gray-300 sm:text-base lg:text-sm xl:text-base">
                With Laravel Rush you can
              </span>
              <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                <span class="block text-white">Build apps</span>
                <span class="block text-red-400">faster than ever 🚀</span>
              </span>
            </h1>

            <p class="mt-3 text-base text-white sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
              Supercharge you development with Laravel Rush.
              <br>
              Spend minutes instead of hours building administration panels.
            </p>

            <p class="text-base font-medium text-white pt-12 pb-2">
              Sign up to get notified when it’s ready.
            </p>

            <!-- Begin Mailchimp Signup Form -->

            <div id="mc_embed_signup">
              <form
                action="https://laravelrush.us20.list-manage.com/subscribe/post?u=94ed3f3bc6630e72fc40937b9&amp;id=741054cefb"
                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                target="_blank" novalidate>
                <div id="mc_embed_signup_scroll" class="sm:flex">
                  <label for="email-address" class="sr-only">Email address</label>
                  <input type="email" value="" name="EMAIL"
                    class="w-full border-white px-5 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white rounded-md"
                    id="mce-EMAIL" placeholder="Email address" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                      name="b_94ed3f3bc6630e72fc40937b9_741054cefb" tabindex="-1" value=""></div>
                  <div class="optionalParent">
                    <div class="clear foot">
                      <input type="submit" value="Notify me" name="subscribe" id="mc-embedded-subscribe"
                        class="cursor-pointer mt-3 w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <!--End mc_embed_signup-->
          </div>
          <div
            class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <svg
              class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top hidden lg:hidden"
              width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
              <defs>
                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
                  patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
              </defs>
              <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
              <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
            </svg>
            <div>
              <button type="button"
                class="relative block w-full rounded-md overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Watch our video to learn more</span>
                <img class="w-full" src="{{ asset('img/laravel-rush-dashboard.png') }}" alt="">
                <div class="absolute inset-0 w-full h-full flex items-center justify-center" aria-hidden="true">
                  {{-- <svg class="h-20 w-20 text-indigo-500" fill="currentColor" viewBox="0 0 84 84">
                    <circle opacity="0.9" cx="42" cy="42" r="42" fill="white" />
                    <path
                      d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z" />
                  </svg> --}}
                </div>
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>


  <div class="relative bg-indigo-900">
    <div class="absolute top-20 skew-y-6 shape w-full">
      <div class="bg-gradient-to-b from-indigo-900 to-indigo-800 opacity-50 w-full h-64"></div>
    </div>
    <div class="absolute top-20 skew-y-6 shape w-full">
      <div class="bg-gradient-to-b from-indigo-900 to-indigo-800 opacity-50 w-full h-80"></div>
    </div>
    <div class="relative py-12">
      <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-6xl lg:px-8">
        <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
          <div>
            <dt>
              <div
                class="flex items-center justify-center h-12 w-12 bg-gradient-to-br from-indigo-200 via-indigo-400 to-indigo-700 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                </svg>
              </div>
              <p class="mt-5 text-lg leading-6 font-medium text-white">Build CRUDs in minutes</p>
            </dt>
            <dd class="mt-2 text-base text-gray-300">
              Build a complete interface for listing, creating, showing, updating and deleting records. Change labels,
              add help texts, placeholder, validation and more. All using Laravel Rush
              resources.
            </dd>
          </div>

          <div>
            <dt>
              <div
                class="flex items-center justify-center h-12 w-12 bg-gradient-to-br from-indigo-200 via-indigo-400 to-indigo-700 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                </svg>
              </div>
              <p class="mt-5 text-lg leading-6 font-medium text-white">Complex UIs with blocks</p>
            </dt>
            <dd class="mt-2 text-base text-gray-300">
              Blocks are reusable, repeatable pieces of content that can be used in any resource. Creating a component
              based frontend have never been easier.
            </dd>
          </div>

          <div>
            <dt>
              <div
                class="flex items-center justify-center h-12 w-12 bg-gradient-to-br from-indigo-200 via-indigo-400 to-indigo-700 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </div>
              <p class="mt-5 text-lg leading-6 font-medium text-white">Smart relationships</p>
            </dt>
            <dd class="mt-2 text-base text-gray-300">
              Smart relationships enables blocks to have relationships too. We'll figure out the best way to
              resolve them for you, so that you can focus on building your app.
            </dd>
          </div>
        </dl>
      </div>
    </div>


    <div class="relative pt-0 pb-12 lg:py-12">
      <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-6xl lg:px-8">
        <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8">
          <div>
            <dt>
              <div
                class="flex items-center justify-center h-12 w-12 bg-gradient-to-br from-indigo-200 via-indigo-400 to-indigo-700 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
              <p class="mt-5 text-lg leading-6 font-medium text-white">Global search</p>
            </dt>
            <dd class="mt-2 text-base text-gray-300">
              Find and move between resources super fast with the global search. You can customize searchable fields and
              presentable title of each item.
            </dd>
          </div>

          <div>
            <dt>
              <div
                class="flex items-center justify-center h-12 w-12 bg-gradient-to-br from-indigo-200 via-indigo-400 to-indigo-700 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </div>
              <p class="mt-5 text-lg leading-6 font-medium text-white">Utilize Laravel policies</p>
            </dt>
            <dd class="mt-2 text-base text-gray-300">
              Use Laravel policies to allow or deny access to resources as in any app. Rush will read and follow your
              policies automatically.
            </dd>
          </div>

          <div>
            <dt>
              <div
                class="flex items-center justify-center h-12 w-12 bg-gradient-to-br from-indigo-200 via-indigo-400 to-indigo-700 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </div>
              <p class="mt-5 text-lg leading-6 font-medium text-white">20 field types</p>
            </dt>
            <dd class="mt-2 text-base text-gray-300">
              Regular input fields, datepickers, timepickers, code editors and embeddable sources? You got the data,
              Rush got the fields.
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>

  <div class="bg-indigo-900">
    <div class="pt-12 sm:pt-16 lg:pt-24">
      <div class="max-w-7xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto space-y-2 lg:max-w-none">
          <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">
            Pricing
          </h2>
          <p class="text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">
            Affordable pricing for individuals and agencies
          </p>
          <p class="text-base text-gray-300 pt-4">
            License is valid for a single domain with one year of updates
          </p>
        </div>
      </div>
    </div>
    <div class="mt-8 pb-12 bg-gray-50 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
      <div class="relative">
        <div class="absolute inset-0 h-3/4 bg-gradient-to-b from-indigo-900 to-indigo-800"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-md mx-auto space-y-4 lg:max-w-5xl lg:grid lg:grid-cols-2 lg:gap-5 lg:space-y-0">
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                <div>
                  <h3
                    class="inline-flex px-4 py-1 mb-4 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600"
                    id="tier-standard">
                    Personal
                  </h3>
                </div>
                {{-- <div class="flex items-baseline text-4xl font-bold text-gray-400 line-through">
                  &nbsp;$TBA&nbsp;
                </div> --}}
                <div class="flex items-baseline text-6xl font-extrabold">
                  TBA
                </div>
              </div>
              <div
                class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6 border-t">
                <ul role="list" class="space-y-4">
                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Create resources in record time
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Field types for any app
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Uses Laravel policies out of the box
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Global resource search
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Build dynamic content with repeatable blocks
                    </p>
                  </li>
                </ul>
                <div class="rounded-md shadow">
                  <a href="#"
                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-700 hover:bg-green-800"
                    aria-describedby="tier-standard">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    Buy personal license
                  </a>
                </div>
              </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                <div>
                  <h3
                    class="inline-flex px-4 py-1 mb-4 rounded-full text-sm font-semibold tracking-wide uppercase bg-indigo-100 text-indigo-600"
                    id="tier-standard">
                    Agency
                  </h3>
                </div>
                {{-- <div class="flex items-baseline text-4xl font-bold text-gray-400 line-through">
                  &nbsp;$TBA&nbsp;
                </div> --}}
                <div class="flex items-baseline text-6xl font-extrabold">
                  TBA
                </div>
              </div>
              <div
                class="flex-1 flex flex-col justify-between px-6 pt-6 pb-8 bg-gray-50 space-y-6 sm:p-10 sm:pt-6 border-t">
                <ul role="list" class="space-y-4">
                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Create resources in record time
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Field types for any app
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Uses Laravel policies out of the box
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Global resource search
                    </p>
                  </li>

                  <li class="flex items-start">
                    <div class="flex-shrink-0">
                      <!-- Heroicon name: outline/check -->
                      <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <p class="ml-3 text-base text-gray-700">
                      Build dynamic content with repeatable blocks
                    </p>
                  </li>
                </ul>
                <div class="rounded-md shadow">
                  <a href="#"
                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-700 hover:bg-green-800"
                    aria-describedby="tier-standard">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>

                    Buy agency license
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-gradient-to-b from-gray-50 to-indigo-100">
    <div class="relative mx-auto max-w-6xl px-4 sm:px-6 py-20">
      <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div
          class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
          <div class="bg-gray-800 p-1 rounded-md shadow-md text-sm lg:text-base" data-tilt data-tilt-startX="-8" data-tilt-startY="-4"
            data-tilt-max="15">
            <pre><code class="language-php">class Page
{
    public function fields(): array
    {
        return [
            Field::id(),
            Field::text('slug'),
            Field::text('title'),
            Field::text('description'),
        ];
    }
}</code></pre>
          </div>
        </div>
        <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
          <h2>
            <span class="mt-8 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl lg:mt-16">
              <span class="text-gray-700">Descriptive and fluent</span>
              <span class="text-indigo-700">resource definitions 🏄‍♂️</span>
            </span>
          </h2>
          <p class="mt-3 text-lg text-gray-700">
            Laravel Rush uses resource definitions to create a complete UI for creating, reading, updating and deleting
            items.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-gradient-to-b from-teal-700 to-teal-900">
    <div class="relative pt-16 mx-auto max-w-6xl px-4 sm:pt-24 sm:px-6 py-20">
      <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
          <h2>
            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl lg:mt-52">
              <span class="text-green-100">Repeatable</span>
              <span class="text-white">content blocks 🧱</span>
            </span>
          </h2>
          <p class="mt-3 text-lg text-white">
            Repeatable content blocks enables you to create <br>complex UIs with multiple components with ease.
          </p>
        </div>
        <div
          class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center text-right">
          <div class="w-full bg-gray-800 p-1 rounded-md shadow-md text-sm lg:text-base" data-tilt data-tilt-startX="8" data-tilt-startY="4"
            data-tilt-max="15">
            <pre><code class="language-php">class Page
{
    public function fields(): array
    {
        return [
            Field::id(),
            Field::text('slug'),
            Field::text('title'),
            Field::text('description'),
            Field::repeater('content')->blocks([
                CallToAction::class,
                Hero::class,
                Campaign::class,
                SelectedArticles::class,
                Shortcuts::class,
                TextWithBackgroundImage::class,
            ]),
        ];
    }
}</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-gradient-to-b from-slate-100 to-slate-300">
    <div class="relative pt-16 mx-auto max-w-6xl px-4 sm:pt-24 sm:px-6 py-20">
      <div class="lg:grid lg:grid-cols-12 lg:gap-8">
        <div
          class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-7 lg:flex lg:items-center text-right">
          <div class="bg-gray-800 p-1 rounded-md shadow-md text-sm lg:text-base" data-tilt data-tilt-startX="-4" data-tilt-startY="5"
            data-tilt-max="15">
            <pre><code class="language-php">class User
{
    public function fields(): array
    {
        return [
            Field::email('email'),
                ->label('Email address')
                ->help('Enter your work email address')
                ->placeholder('joe@doe.com')
                ->rules(['required', 'email']),
        ];
    }
}</code></pre>
          </div>
        </div>

        <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-5 lg:text-left">
          <h2>
            <span class="mt-8 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl lg:mt-12">
              <span class="text-slate-500">Make it even more</span>
              <span class="text-orange-700">user friendly 💡</span>
            </span>
          </h2>
          <p class="mt-3 text-lg text-slate-800">
            Change labels, add help texts, placeholders and validation rules within the resource file.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-indigo-800 pt-10 pb-10">
    <div class="mx-auto max-w-6xl">
      <p class="text-base text-indigo-400 text-center">
        &copy; {{ date('Y') }} Laravel Rush and Middleware AS. All rights reserved.
      </p>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
</body>

</html>
