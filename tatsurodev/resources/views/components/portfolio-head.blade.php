<div id="{{ $id }}" class="collapse">
    <div class="card card-body bg-{{ $color }} text-white py-5">
        <h2>{{ $title }}</h2>
        <p class="lead">
            {{ $lead }}
        </p>
    </div>
    <div class="card card-body py-5">
        <h3>{{ $question }}</h3>
        <p>
            {{ $answer }}
        </p>
        <hr />
        {{ $body }}
    </div>
</div>