<div class="col-md-6">
    <div class="d-flex align-items-center">
        <h4 class="p-2">{{ $skill->name }}</h4>
        <span class="mr-auto p-2 small text-muted">{{ $slot }}</span>
        @auth
        <div>
            <a class="text-primary" href="{{ route('skills.edit', $skill->id) }}"><i class="fas fa-edit fa-lg"></i></a>
            <a class="text-danger" href="{{ route('skills.destroy', $skill->id) }}" onClick="event.preventDefault(); document.getElementById('skill-id-{{ $skill->id }}').submit();"><i class="fas fa-trash-alt fa-lg"></i></a>
        </div>
        <form action="{{ route('skills.destroy', $skill->id) }}" method="post" id="skill-id-{{ $skill->id }}">
            @csrf
            @method('delete')
        </form>
        @endauth
    </div>
    <div class="progress mb-3">
        <div class="progress-bar progress-bar-striped bg-{{ $skill->skillLevel->color }}" style="width:{{ $skill->skillLevel->level * 20 }}%"></div>
    </div>
</div>