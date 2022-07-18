<h1>{{$heading }}</h1>

@foreach($listings as $listings)

    <h2>{{$listings['title']}}</h2>

    <p>{{$listings['description']}}</p>
    
@endforeach