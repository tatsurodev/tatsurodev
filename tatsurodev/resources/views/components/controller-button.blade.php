<div>
    <div>
        <a class="text-primary" href='{{ route("{$route}.edit", $instance->id) }}'><i class="fas fa-edit fa-lg"></i></a>
        <a class="text-danger" href='{{ route("{$route}.destroy", $instance->id) }}' onClick='event.preventDefault(); document.getElementById("{$route}-id-{$instance->id}").submit();'><i class="fas fa-trash-alt fa-lg"></i></a>
    </div>
    <form action='{{ route("{$route}.destroy", $instance->id) }}' method="post" id="skill-id-{{ $instance->id }}">
        @csrf
        @method('delete')
    </form>
</div>