@extends('layouts.app')
@section('content')
<!-- menuのhead部、body部のループ -->
@foreach($menus as $menu)
@portfolioHead([
'id' => $menu->name,
'color' => $menu->color,
'title' => $menu->title,
'lead' => $menu->description,
'qAndAs' => $menu->qAndAs,
])
@slot('body')
@include('homes._portfolio-body',['menu' => $menu])
@endslot
@endcomponent
@endforeach
@endsection