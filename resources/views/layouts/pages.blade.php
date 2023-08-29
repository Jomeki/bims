<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    External css--}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel')}} -  @yield('pagetitle')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Popover style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="modal fade" id="useredit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">User Profile details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="floatingInput">
                    <label for="floatingInput">Phone number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput">
                    <label for="floatingInput">E-mail</label>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<input type="checkbox" name="" id="sidebar-toggle">

<div class="sidebar">
    <div class="sidebar-brand">
        <div class="brand-flex">
            <img src="{{asset('assets/img/logo.png')}}" alt="logo " width="40px">

            <div class="brand-icons">
                <a href="" data-bs-toggle="modal" data-bs-target="#useredit"><span class="las la-user-circle"></span></a>
            </div>
        </div>
    </div>

    <div class="sidebar-main">
        <div class="sidebar-user">
            <img src="{{asset('assets/img/2.jpg')}}" alt="" height="80px">
            <div>
                <h3>{{ Auth::user()->name }}</h3>
                <span>{{ Auth::user()->email }}</span><br>
                <span class="sidebar-title">(Business Owner)</span>
            </div>
        </div>

        <div class="sidebar-menu">
            <!-- //Dashboard -->
            <div class="menu-head">
                <span>Dashboard</span>
            </div>
            <ul>
                <li><a href="{{route('home')}}"><span class="las la-chart-pie">Analytics</span></a></li>
                <li><a href="{{route('home')}}"><span class="las la-balance-scale">Finance</span></a></li>
            </ul>

            <!-- //Applications -->
            <div class="menu-head">
                <span>MANAGE</span>
            </div>
            <ul>
                <li><a href="{{route('products')}}"><span class="las la-box">Add New Product</span></a></li>
                <li><a href="{{route('purchases')}}"><span class="las la-shopping-cart">Add New Purchase</span></a></li>
                <li><a href="{{route('orders')}}"><span class="las la-envelope">Add New Order</span></a></li>
                <li><a href="{{route('employees')}}"><span class="las la-user">Add New Employee</span></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="main-content">
    <header>
        <div class="menu-toggle">
            <label for="sidebar-toggle"><span class="las la-bars"></span></label>
        </div>
        <span class="bars"></span>
        <div class="header-icons">

            <a tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Notifications" data-bs-content="No notification currently">
                <span class="las la-bell"></span>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="las la-sign-out-alt"></span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>
</div>

@yield('content')

<label for="sidebar-toggle" class="body-label"></label>
</div>

{{--External JS Links--}}
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
