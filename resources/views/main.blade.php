<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('includes.navbar')
        @include('includes.sidebar')    
        @yield('content')
        
        @include('includes.script')
        @yield('pageScripts')
    </div>
</body>
</html>