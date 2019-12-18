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
                                </div>
                            </div>
                        </div>
                        <div class="text-muted p-4 bg-white">
                            @lang('messages.welcome')
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
                <div class="col-md-3 my-2">
                    @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light">
                        <i class="fas fa-user-cog"></i>
                        <span class="text-capitalize">{{ __('admin') }}</span>
                    </a>
                    @else
                    <a href="{{ route('logout') }}" class="btn btn-outline-light" onClick="event.preventDefault(); document.getElementById('logout').submit();">
                        <i class="fas fa-user-cog"></i>
                        <span class="text-capitalize">{{ __('logout') }}</span>
                    </a>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
                    @endguest
                </div>
                <div class="col-md-6 my-2 text-center">
                    <small>Copyright &copy; {{ config('app.name') }}</small>
                </div>
                <div class="col-md-3 my-2">
                    <form name="locale">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-dark text-white">
                                        <i class="fas fa-language fa-lg"></i>
                                    </span>
                                </div>
                                <select name="language" class="form-control bg-dark text-white" onChange="changeLocale()">
                                    @foreach($locales as $locale)
                                    <option value="{{ route('homes.locale', $locale->name) }}" {{ $currentLocale->id === $locale->id ? 'selected' : ''}} />{{ $locale->language }}
                                    @endforeach
                                </select>
                            </div>
                        </div>
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