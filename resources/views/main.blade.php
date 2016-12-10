<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>

@include('partials._nav')
{{--Default navbar --}}

<div class="container">

@yield('content')

@include('partials._footer')

</div> {{--END OF THE CONTAINER--}}

@include('partials._javascript')

</body>
</html>