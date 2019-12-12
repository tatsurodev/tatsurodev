<div class="col-md-6">
    <div class="d-flex align-items-center">
        <h4 class="p-2">{{ $skill }}</h4>
        <span class="p-2 small text-muted">{{ $slot }}</span>
    </div>
    <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-{{ $color }}" style="width:{{ $level * 20 }}%"></div>
    </div>
</div>