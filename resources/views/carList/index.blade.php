{{-- @extends('layout') --}}

{{-- <h1>{{$heading}}</h1> --}}

{{-- @section('content') --}}
<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless (count($carList) == 0)
    
@foreach($carList as $list)
    <x-car-card :list="$list" />
@endforeach

@else

<p>No listing found!</p>

@endunless

</div>

</x-layout>


    {{-- <h2><a href="/cars/{{$list['id']}}">{{$list['title']}}</a></h2>
    <p>{{$list['description']}}</p> --}}