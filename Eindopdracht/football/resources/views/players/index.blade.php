<!DOCTYPE html>
<html lang="nl">

<head>
  <title>Players</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')

</head>

<body>

<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="font-semibold text-xl tracking-tight">Football</span>
  </div>
  <!-- <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div> -->
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="{{route('clubs.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Clubs
      </a>
      <a href="{{route('players.index')}}" class="block mt-4 lg:inline-block lg:mt-0  text-yellow-100 hover:text-white mr-4">
        Players
      </a>

    </div>

  </div>
</nav>
<br>

<div class="grid grid-cols-6">
    <h2><strong>Name</strong></h2>
    <h2><strong>Position</strong></h2>
    <h2><strong>Nationality</strong></h2>
    <h2><strong>Birthdate</strong></h2>
    <h2><strong>Club</strong></h2>
    <h2><strong>Edit/Delete</strong></h2>
  </div>
  <br>

    @foreach($players as $player)


<div class="grid grid-cols-6">

    <div>
        {{$player->Name}}
    </div>


    <div>
        {{$player->Position}}
    </div>


    <div>
    {{$player->Nationality}}
    </div>



    <div>
    {{$player->Birthdate}}
    </div>


    <div>
        {{$player->ClubID}}
    </div>


    <form action="/players/{{$player->id}}" method="POST">
        @csrf
        @method('DELETE')
         <div>
            <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1.5 px-3 rounded-l" href="/players/{{$player->id}}/edit">Edit</a>
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-r" type="submit">Delete</button>

        </div>
     </form>


</div>
    @endforeach

</body>
</html>
