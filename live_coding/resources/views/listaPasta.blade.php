@extends ("layout")
@section ("pasta")
  <h1>Pasta: {{$count}}</h1>
  @foreach($pastaGenerica as $key => $pasta)

    <h2> {{$key+1}}/{{$count}}) {{$pasta["tipo"]}}: {{$pasta["titolo"]}}</h2>
    <img src="{{$pasta['src']}}" alt="">
    <p> tempo di cottura: {{$pasta["cottura"]}}</p>

  @endforeach
@endsection
