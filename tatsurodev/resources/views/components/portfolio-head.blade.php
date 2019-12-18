<div id="{{ $menu->name }}" class="collapse">
    <div class="card card-body bg-{{ $menu->color }} text-white py-5">
        <h2>{{ $menu->title }}</h2>
        <p class="lead">
            {{ $menu->description }}
        </p>
    </div>
    <div class="card card-body py-5">
        @auth
        @include('qandas._create')
        @endauth
        <hr>
        <!-- QAndAsがない場合undefinedのエラーが出るのでその防止 -->
        @if(isset($menu->qAndAs))
        <!-- $qAndAだと、このcomponentへ渡された$qAndA変数とconflictする可能性があるので名前を変更 -->
        @foreach($menu->qAndAs as $qAndAForeach)
        <div class="mb-2 text-muted">
            <div class="d-flex justify-content-between">
                <h3 class="font-weight-bold">{{ $qAndAForeach->question }}</h3>
                @auth
                <div>
                    @controllerButton(['route' => 'qandas', 'instance' => $qAndAForeach,])
                    @endcontrollerButton
                </div>
                @endauth
            </div>
            <p class="ml-2">
                {{ $qAndAForeach->answer }}
            </p>
            <hr />
        </div>
        @endforeach
        @endif
        {{ $body }}
    </div>
</div>