@extends("layout")
@section("pasta")
  @foreach ($pastaLunga as $key => $pasta)
    <h2> {{$key+1}}) {{$pasta["tipo"]}}: {{$pasta["titolo"]}}</h2>
    <img src="{{$pasta['src']}}" alt="">
    <p> tempo di cottura: {{$pasta["cottura"]}}</p>

  @endforeach
@endsection
