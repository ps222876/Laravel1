@isset($car)
    <p>Car:</p> {{$car->merk}}
    <p>Type:</p>
    @isset($car->type)
        {{$car->type}}
    @endisset
    @empty($car->type)
        Onbekend
    @endempty 
    <p>Bouwjaar:</p> 

    @isset($car->bouwjaar)
        {{$car->bouwjaar}}
    @endisset
    @empty($car->bouwjaar)
        Onbekend
    @endempty 

    
@endisset
@empty($car)
    Onbekend auto.
@endempty
