<div id="{{ $id }}" class="collapse">
    <div class="card card-body bg-{{ $color }} text-white py-5">
        <h2>{{ $title }}</h2>
        <p class="lead">
            {{ $lead }}
        </p>
    </div>
    <div class="card card-body py-5">
        <!-- QAndAsがない場合undefinedのエラーが出るのでその防止 -->
        @if(isset($qAndAs))
        @foreach($qAndAs as $qAndA)
        <div class="mb-2 text-muted">
            <div class="d-flex justify-content-between">
                <h3 class="font-weight-bold">{{ $qAndA->question }}</h3>
                @auth
                <div>
                    @controllerButton(['route' => 'qandas', 'instance' => $qAndA,])
                    @endcontrollerButton
                </div>
                @endauth
            </div>
            <p class="ml-2">
                {{ $qAndA->answer }}
            </p>
            <hr />
        </div>
        @endforeach
        @endif
        {{ $body }}
    </div>
</div>