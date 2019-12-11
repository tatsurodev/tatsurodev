<div class="card mb-3">
    <!-- <img src="img/avatar.png" class="card-img-top" /> -->
    <div class="card-header d-flex justify-content-between align-items-center">
        {{ $title }}
        <div>
            <a href="{{ $githubUrl }}" class="btn btn-secondary ml-3" target="_blank" alt="github">
                <i class="fab fa-github"></i>
            </a>
            <a href="{{ $demoUrl }}" class="btn btn-info ml-3 text-white">
                <i class="fas fa-desktop"></i>
            </a>
        </div>
    </div>
    <!--.card-header-->
    <div class="card-body">
        <h4 class="card-title">概要</h4>
        <p class="card-text">
            {{ $description }}
        </p>
        <h5 class="card-subtitle">主な機能</h1>
            <ul>
                @foreach($features as $feature)
                <li>{{ $feature }}</li>
                @endforeach
            </ul>
    </div>
    <!--.card-body-->
    <div class="card-footer">
        <div class="row">
            <div class="col-3 align-self-center text-center">
                <i class="fas fa-tags text-secondary"></i>
            </div>
            <div class="col-9">
                @foreach($tags as $tag)
                <a class="badge badge-pill badge-success text-white" href="#">{{ $tag }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <!--.card-footer-->
</div>