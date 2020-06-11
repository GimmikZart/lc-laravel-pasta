@extends ("layout")
@section ("pasta")

    @for($i = 1; $i<=$numeroIterazioni; $i++)
        <div>
            <p>{{$i}} {{$prova}}</p><br>
            <ul>
                @for($j = 1; $j<=3; $j++)
                    <li>
                        {{$test}}
                    </li>
                @endfor
            </ul>
        </div>
    @endfor

@endsection
