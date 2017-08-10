<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Data Insight') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<app id="app">
    <div style="float: right" v-cloak>
        <!-- Authentication Links -->
        @if (Auth::guest())
            <el-menu-item index="/login "><a href="{{ route('login') }}">Login</a></el-menu-item>
            <el-menu-item index="/register"><a href="{{ route('register') }}">Register</a></el-menu-item>
        @else
            <el-submenu index="-1" class="dropdown">
                <template  slot="title">
                    {{ Auth::user()->name }}
                </template>
                <el-menu-item index="{{ route('logout') }}">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </el-menu-item>
            </el-submenu>
        @endif
    </div>
</app>

<!-- Scripts -->
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
