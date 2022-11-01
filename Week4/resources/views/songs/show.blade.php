@isset($song)
    <p>Song:</p> {{$song->title}}<br/>
    <p>Singer:</p> 

    @isset($song->singer)
        {{$song->singer}}
    @endisset
    @empty($song->singer)
        Onbekend
    @endempty 
@endisset
@empty($song)
    Onbekend nummer.
@endempty
