@isset($player)

    @isset($player->Name)
    <p><strong>Name:</p></strong> {{$player->Name}}
    @endisset
    @empty($player->Name)
    <p><strong>Name:</p></strong>
    Unknown Player Name
    @endempty



    @isset($player->Position)
    <p><strong>Position:</p></strong> {{$player->Position}}<br>
    @endisset
    @empty($player->Position)
        <p><strong>Position:</p></strong>
        Unknown player Position
    @endempty


    @isset($player->Nationality)
    <p><strong>Nationality:</p></strong> {{$player->Nationality}}
    @endisset
    @empty($player->Nationality)
    <p><strong>Nationality:</p></strong>
    Unknown player Nationality
    @endempty


    @isset($player->Birthdate)
    <p><strong>Birthdate:</p></strong> {{$player->Birthdate}}
    @endisset

    @empty($player->Birthdate)
    <p><strong>Birthdate:</p></strong>
    Unknown Player Birthdate
    @endempty



@endisset
@empty($player)
    Unknown player.
@endempty



  {{-- <p><strong>Champions league titels</p></strong> {{$club->Champions_league_titels}}<br>
    <p><strong>Top scorer</p></strong> {{$club->Top_scorer}}<br> --}}
