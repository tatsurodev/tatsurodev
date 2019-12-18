<div class="col-md-6">
    <div class="d-flex align-items-center">
        <h4 class="p-2">{{ $skill->name }}</h4>
        <span class="mr-auto p-2 small text-muted">{{ $slot }}</span>
        @auth
        @controllerButton(['route' => 'skills', 'instance' => $skill,])
        @endcontrollerButton
        @endauth
    </div>
    <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-{{ $skill->skillLevel->color }}" style="width:{{ $skill->skillLevel->level * 20 }}%"></div>
    </div>
</div>