<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dyka - UI/UX Designer' }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo/Dykailhamp.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans">
<header class="sticky top-0 z-30 border-b border-black/5 bg-white/90 backdrop-blur" x-data="{ open: false }">
    <div class="mx-auto flex h-16 max-w-[1120px] items-center justify-between px-6 md:h-[78px]">
        <a href="{{ url('/') }}" aria-label="Dyka home">
            <img src="{{ asset('images/logo/Dykailhamp.svg') }}" alt="Dyka" class="h-9 w-auto">
        </a>
        <button class="text-xl md:hidden" @click="open = !open" aria-label="Toggle menu">&#9776;</button>
        <nav class="hidden items-center gap-10 text-[11px] text-[#5d6370] md:flex">
            <a class="{{ request()->is('/') ? 'font-semibold text-[#10131f]' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="{{ request()->is('about') ? 'font-semibold text-[#10131f]' : '' }}" href="{{ url('/about') }}">About Me</a>
            <a class="button-blue !rounded-md !px-4 !py-2 !text-[11px]" target="_blank" rel="noreferrer" href="https://wa.me/6281234567890">Contact Me</a>
        </nav>
        <nav x-show="open" x-transition class="absolute left-0 right-0 top-16 grid gap-5 border-b bg-white p-6 text-sm md:hidden">
            <a href="{{ url('/') }}">Home</a><a href="{{ url('/about') }}">About Me</a><a class="button-blue text-center" target="_blank" rel="noreferrer" href="https://wa.me/6281234567890">Contact Me</a>
        </nav>
    </div>
</header>
{{ $slot }}
<footer class="mx-auto flex min-h-[74px] max-w-[1120px] items-center justify-between border-t border-black/10 px-6 text-[9px] text-[#9b9da4] md:px-0"><span>&copy; 2024 Dyka. All rights reserved.</span><div class="flex gap-5"><a href="https://www.instagram.com/dykailhamp.portofolio?stkn=bmVxMWNoa25ybmgz" target="_blank" rel="noreferrer">Instagram</a><a href="http://www.linkedin.com/in/dyka-ilham-pangestu-525b0b343" target="_blank" rel="noreferrer">LinkedIn</a></div></footer>
</body>
</html>
