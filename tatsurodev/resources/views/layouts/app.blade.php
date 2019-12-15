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
                                <h1 class="display-4">tatsuro.dev</h1>
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
                            フルスタックエンジニア目指して奮闘中<br />
                            令和の出島Udemyで諸先生方に日々師事しています
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
        <footer id="main-footer" class="p-5 bg-dark text-white text-center">
            <div class="row">
                <div class="col-md-12">
                    <small>Copyright &copy; tatsuro.dev</small>
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