<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>

@include('partials._nav')
{{--Default navbar --}}

<div class="container">

@include('partials._messages')

   {{--{{ Auth::check() ? "Logged In" : "Logged Out" }}--}}

@yield('content')

@include('partials._footer')

</div> {{--END OF THE CONTAINER--}}

@include('partials._javascript')

@yield('scripts')

</body>
</html>