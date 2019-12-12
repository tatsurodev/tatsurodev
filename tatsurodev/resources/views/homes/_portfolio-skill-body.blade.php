<div class="row">
    @foreach($skills as $skill)
    @skillBar(['skill' => $skill->name, 'color' => $skill->skillLevel->color, 'level' => $skill->skillLevel->level])
    {!! $skill->message !!}
    @endskillBar
    @endforeach
</div>