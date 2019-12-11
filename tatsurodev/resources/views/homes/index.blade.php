@extends('layouts.app')
@section('content')
<!-- SKILL -->
@component('components.portfolio-head', [
'id' => 'skill',
'color' => 'primary',
'title' => 'My Skills',
'lead' => 'Laravelをメインのフレームワークとして使いこなせるよう学習中。バックをLaravel、フロントをNuxt.js等でウェブ開発できるようになることを直近の目標にしています。機械学習、ファイナンス関連の開発もできるようPythonも学習しています。',
'question' => 'At which coding level do I think I am?',
'answer' => '2017年からプログラミングの学習を開始しています。言語はPHP、次にJavascriptあたりが得意です。Pythonは、ほぼ初心者。プログラミングとは別に、機械学習、ブロックチェーン、フィンテック勉強中です。'
])
@slot('body')
<div class="row">
    <div class="col-md-6">
        @skillBar(['skill' => 'HTML5', 'color' => 'primary', 'level' => 80])
        @endskillBar
        @skillBar(['skill' => 'CSS3', 'color' => 'warning', 'level' => 40])
        スタイリングをBootstrapで済ませてしまうことが多く、苦手
        @endskillBar
        @skillBar(['skill' => 'Bootstrap4', 'color' => 'success', 'level' => 60])
        Laravelのviewでもよく使用
        @endskillBar
        @skillBar(['skill' => 'MySQL', 'color' => 'warning', 'level' => 40])
        @endskillBar
    </div>
    <div class="col-md-6">
        @skillBar(['skill' => 'HTML5', 'color' => 'primary', 'level' => 80])
        @endskillBar
        @skillBar(['skill' => 'CSS3', 'color' => 'warning', 'level' => 40])
        スタイリングをBootstrapで済ませてしまうことが多く、苦手
        @endskillBar
        @skillBar(['skill' => 'Bootstrap4', 'color' => 'success', 'level' => 60])
        Laravelのviewでもよく使用
        @endskillBar
        @skillBar(['skill' => 'MySQL', 'color' => 'warning', 'level' => 40])
        @endskillBar
    </div>
</div>
@endslot
@endcomponent
<!--PORTFOLIO-->
@component('components.portfolio-head', [
'id' => 'portfolio',
'color' => 'success',
'title' => 'My Portfolios',
'lead' => 'Laravel、Vue.js、Scrapy等で作った制作物がメインです',
'question' => 'What kind of app did you create?',
'answer' => 'ブログ、フォーラム、ショッピングサイト、近眼者向けメガネシェアサイト等を作成しました'
])
@slot('body')
<div class="row card-deck">
    <div class="col-md-6">
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
    </div>
    <div class="col-md-6">
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
    </div>
</div>
@endslot
@endcomponent
<!-- BOOK -->
@component('components.portfolio-head', [
'id' => 'book',
'color' => 'warning',
'title' => 'My Book\'s Review',
'lead' => 'This section is under construction!',
'question' => 'What kind of books did you read?',
'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.'
])
@slot('body')
<div class="row no-gutters">
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=252" alt="" class="img-fluid" />
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=253" alt="" class="img-fluid" />
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=254" alt="" class="img-fluid" />
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=255" alt="" class="img-fluid" />
        </a>
    </div>
</div>
<div class="row no-gutters">
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=256" alt="" class="img-fluid" />
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=257" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=257" alt="" class="img-fluid" />
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=258" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=258" alt="" class="img-fluid" />
        </a>
    </div>
    <div class="col-md-3">
        <a href="https://unsplash.it/1200/768.jpg?image=259" data-toggle="lightbox">
            <img src="https://unsplash.it/600.jpg?image=259" alt="" class="img-fluid" />
        </a>
    </div>
</div>
@endslot
@endcomponent
<!-- UDEMY -->
@component('components.portfolio-head', [
'id' => 'udemy',
'color' => 'danger',
'title' => 'My Udemy Course\'s Reviews',
'lead' => '修了したプログラミング系コースのレビューです',
'question' => 'What kind of courses do you take?',
'answer' => '基本的に、その分野で評価の高い、言語は英語で、必ず英語キャプションが付いているものを選ぶようにしています。いくら英語ネイティブにとって評価の高いものでも、非ネイティブにとって聞き取りきれないものも多いので、キャプションがあると安心です。'
])
@slot('body')
<div class="row card-deck">
    <div class="col-md-6">
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
    </div>
    <div class="col-md-6">
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
        @include('homes._portfolio-card', [
        'title' => 'CMSサイト',
        'githubUrl' => '',
        'demoUrl' => '',
        'description' => 'Laravelで制作したブログサイトです。',
        'features' => [
        '会員登録、ログイン、ログアウト',
        'ブログのCRUD',
        'ブログ機能にPolicy作成',
        'ブログ投稿に対するタグ付け',
        'ブログ投稿ユーザーに対するコメント通知',
        'Disqus追加',
        ],
        'tags' => [
        'Laravel',
        'Vue.js',
        'Nuxt.js',
        'Bootstrap',
        ]
        ])
    </div>
</div>
@endslot
@endcomponent
<!-- CONTACT -->
@component('components.portfolio-head', [
'id' => 'contact',
'color' => 'dark',
'title' => 'Contact Me',
'lead' => 'ツイッター、もしくはこちらのフォームからご連絡ください',
'question' => 'Get In Touch',
'answer' => 'どんな内容でもお気軽にどうぞ！'
])
@slot('body')
<form>
    <div class="form-group">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark text-white">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" class="form-control bg-dark text-white" placeholder="Name" />
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark text-white">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            <input type="email" class="form-control bg-dark text-white" placeholder="Email" />
        </div>
    </div>
    <div class="form-group">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text bg-dark text-white">
                    <i class="fas fa-pencil-alt"></i>
                </span>
            </div>
            <textarea class="form-control bg-dark text-white" placeholder="Name"></textarea>
        </div>
    </div>
    <input type="submit" value="Submit" class="btn btn-dark btn-block btn-lg" />
</form>
@endslot
@endcomponent
@endsection