<!DOCTYPE html>
<html>
@include('layouts.head')

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500"
    @if (session('success') || session('error')) data-toast-message="{{ session('success') ?? session('error') }}"
    data-toast-type="{{ session('success') ? 'success' : 'error' }}" @endif>
    @include('layouts.aside')
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </main>
    @include('layouts.js')
</body>

</html>
