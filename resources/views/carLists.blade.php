<h1>{{$heading}}</h1>

@unless (count($carList) == 0)
    
@foreach($carList as $list)
    <h2><a href="/cars/{{$list['id']}}">{{$list['title']}}</a></h2>
    <p>{{$list['description']}}</p>
@endforeach

@else

<p>No listing found!</p>

@endunless