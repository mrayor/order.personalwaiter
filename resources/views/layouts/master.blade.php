<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if !(IE)]><!--><html lang="en-US" class="turbolinks-progress-bar"><!--[if !(IE)]><!-->

<head>
    @include('partials._head')
</head>

<body>
    @include('partials._nav') 
    @yield('content') 
    @include('partials._footer')
    @include('partials._scripts')  
</body>
</html>