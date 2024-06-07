<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="emerald">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @auth
            <div class="drawer lg:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                        @livewire('partial.navbar')
                        {{ $slot }}
                </div> 
                <div class="drawer-side">
                <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                @livewire('partial.sidebar')
                </div>
            </div>
        @endauth

        @guest
            <div class="flex flex-col items-center justify-center h-screen gap-8">
                <div class="font-bold text-3xl">{{ config('app.name') }}</div>
                {{ $slot }}
                @if (Route::is('login'))
                    <a href="{{ route('register') }}" class="text-sm link" wire:navigate>Already Have an Account? Register now!</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm link" wire:navigate>Have an Account? Login now!</a>
                @endif
            </div>
        @endguest
    </body>
</html>
