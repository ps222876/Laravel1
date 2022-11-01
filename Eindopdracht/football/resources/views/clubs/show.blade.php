@isset($club)

    @isset($club->Name)
    <p><strong>Club:</p></strong> {{$club->Name}}
    @endisset
    @empty($club->Name)
    <p><strong>Club:</p></strong>
    Unknown Club Name
    @endempty



    @isset($club->League)
    <p><strong>League:</p></strong> {{$club->League}}<br>
    @endisset
    @empty($club->League)
        <p><strong>League:</p></strong>
        Unknown League
    @endempty


    @isset($club->Champions_league_titels)
    <p><strong>Champions league titels:</p></strong> {{$club->Champions_league_titels}}
    @endisset
    @empty($club->Champions_league_titels)
    <p><strong>Champions league titels:</p></strong>
    Unknown Champions league titels
    @endempty


    @isset($club->Top_scorer)
    <p><strong>Top scorer:</p></strong> {{$club->Top_scorer}}
    @endisset

    @empty($club->Top_scorer)
    <p><strong>Top scorer:</p></strong>
    Unknown Top scorer
    @endempty



@endisset
@empty($club)
    Unknown club.
@endempty



  {{-- <p><strong>Champions league titels</p></strong> {{$club->Champions_league_titels}}<br>
    <p><strong>Top scorer</p></strong> {{$club->Top_scorer}}<br> --}}
