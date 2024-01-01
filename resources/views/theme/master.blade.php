<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    @include('theme.partials.header')

    @yield('content')

    @include('theme.partials.footer')

    @include('theme.partials.scripts')
</body>

</html>
