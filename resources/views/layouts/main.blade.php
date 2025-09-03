<!DOCTYPE html>
<html>

@include('layouts.head')
@stack('css')

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    @include('layouts.aside')
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </main>
    @include('layouts.js')
    @stack('js')
</body>
</html>
