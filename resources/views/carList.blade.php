@extends('layout')

@section('content')

@include('partials._search')

<h2>{{$carList['title']}}</h2>
<p>{{$carList['description']}}</p>

@endsection