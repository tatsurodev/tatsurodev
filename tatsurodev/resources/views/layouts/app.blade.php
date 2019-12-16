<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- app.cssより後に読み込まないと、bootstrapのtoastが動いてしまう -->
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header id="main-header">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('img/avatar.png') }}" />
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex flex-column">
                        <div class="px-3 py-5 bg-dark text-white">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h1 class="display-4">{{ config('app.name', 'Laravel') }}</h1>
                                <div class="d-flex flex-row justify-content-end">
                                    <div class="ml-2">
                                        <a href="http://twitter.com/tatsurodev" class="text-white" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="d-none ml-2">
                                        <a href="http://facebook.com" class="text-white" target="_blank">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="d-none ml-2">
                                        <a href="http://instagram.com" class="text-white" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="ml-2">
                                        <a href="http://github.com/tatsurodev" class="text-white" target="_blank">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                    <!--
                                    <div class="ml-2">
                                        <a href="" class="text-white">
                                            <i class="fas fa-language"></i>
                                        </a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                        <div class="text-muted p-4 bg-white">
                            @lang('messages.welcome')
                            <!--
                            <div class="btn-group dropup">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="fas fa-language"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">日本語</a>
                                </div>
                            </div>
                            -->
                        </div>
                        <div>
                            <div class="d-flex flex-row text-white align-items-stretch text-center">
                                @foreach($menus as $menu)
                                @include('homes._portfolio-menu', [
                                'id' => $menu->name,
                                'color' => $menu->color,
                                'icon' => $menu->fontawesome,
                                ])
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <!-- FOOTER -->
        <footer id="main-footer" class="clearfix p-5 bg-dark text-white">
            <div class="row">
                @guest
                <div class="col-md-3 my-2 text-center">
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">
                        <i class="fas fa-user-cog"></i>
                        <span class="text-capitalize">{{ __('admin') }}</span>
                    </a>
                </div>
                @else
                <div class="col-md-3 my-2 text-center">
                    <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm" onClick="event.preventDefault(); document.getElementById('logout').submit();">
                        <i class="fas fa-user-cog"></i>
                        <span class="text-capitalize">{{ __('logout') }}</span>
                    </a>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
                </div>
                @endguest
                <div class="col-md-6 my-2 text-center">
                    <small>Copyright &copy; {{ config('app.name') }}</small>
                </div>
                <div class="col-md-3 my-2 text-center">
                    <form name="locale">
                        <select name="language" class="form-control form-control-sm" onChange="changeLocale()">
                            <option>{{ __('Select Lang') }}</option>
                            <option value="{{ route('homes.locale', 'en') }}">English
                            </option>
                            <option value="{{ route('homes.locale', 'ja') }}">日本語</option>
                        </select>
                    </form>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- status表示 -->
    @if(session('status'))
    <script>
        toastr.success('{{ session("status") }}')
    </script>
    @endif
    <!-- 入力errors時の簡易的な表示 -->
    @if(session('errors'))
    <script>
        toastr.error('入力エラーがあります')
    </script>
    @endif
</body>

</html>