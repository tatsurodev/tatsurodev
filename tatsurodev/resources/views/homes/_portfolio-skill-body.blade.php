@auth
@include('skills._create')
@endauth
<hr>
<div class="row">
    @foreach($skills as $skill)
    @skillBar(['skill' => $skill,])
    {!! $skill->message !!}
    @endskillBar
    @endforeach
</div>