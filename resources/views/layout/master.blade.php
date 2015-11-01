<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('layout.header')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
       @section('sidebar')
            
        @show

        
            @yield('content')
        </div>
        <!-- Close wrapper -->
       
    </body>
    @include('layout.footer')
</html>