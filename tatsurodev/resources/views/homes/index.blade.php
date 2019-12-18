@extends('layouts.app')
@section('content')
<!-- menuのhead部、body部のループ -->
@foreach($menus as $menu)
<!-- QAndAControllerから得られる$qAndAのmenu_idがループで表示させる$menuのidと同じ時のみ、QAndA form内にinstance内容を表示させる -->
@if(isset($qAndA) && $qAndA->menu->id === $menu->id)
<!-- QAndAControllerから得られる$qAndAをportfolioHead componentへ渡す、明示しないと$qAndAをportfolioHead component内で使用できない -->
@portfolioHead([
'menu' => $menu,
'qAndA' => $qAndA,
])
@slot('body')
@include('homes._portfolio-body',['menu' => $menu])
@endslot
@endcomponent
<!-- QAndAControllerから得られる$qAndAが表示させる$menuと関係ない時、QAndA formを空にするため$qAndA変数を渡さない -->
@else
@portfolioHead([
'menu' =>$menu,
])
@slot('body')
@include('homes._portfolio-body',['menu' => $menu])
@endslot
@endportfolioHead
@endif
@endforeach
@endsection