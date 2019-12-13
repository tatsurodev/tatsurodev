<div class="col-md-6">
    <div class="d-flex align-items-center">
        <h4 class="p-2">{{ $skill->name }}</h4>
        <span class="p-2 small text-muted">{{ $slot }}</span>
        @auth
        <a href="{{ route('skills.show', $skill->id) }}">編集</a>
        <a href="{{ route('skills.destroy', $skill->id) }}" onClick="event.preventDefault(); document.getElementById('skill-id-{{ $skill->id }}').submit();">削除</a>
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