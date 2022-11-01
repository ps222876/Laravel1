<!DOCTYPE html>
<html lang="nl">

<head>
  <title>Clubs</title>
  <meta charset="UTF-8">
  @vite('resources/css/app.css')
</head>

<body>

  <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <span class="font-semibold text-xl tracking-tight">Football</span>
    </div>

    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-sm lg:flex-grow">
        <a href="{{route('clubs.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-yellow-100 hover:text-white mr-4">
          Clubs
        </a>
        <a href="{{route('players.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
          Players
        </a>

      </div>

</div>
  </nav>

  <br>

  <div class="grid grid-cols-5">
    <h2><strong>Club</strong></h2>
    <h2><strong>League</strong></h2>
    <h2><strong>Champions_league_titels</strong></h2>
    <h2><strong>Top_scorer</strong></h2>
    <h2><strong>Edit/Delete</strong></h2>
  </div>
  <br>


  <div class="grid grid-cols-5">
    @foreach($clubs as $club)

    <div>
            {{$club->Name}}
    </div>


        <div>
            {{$club->League}}
        </div>


            <div>
        {{$club->Champions_league_titels}}
            </div>



                 <div>
        {{$club->Top_scorer}}
                </div>


             <form action="/clubs/{{$club->ClubID}}" method="POST">
                @csrf
                @method('DELETE')
                 <div>
                    <a class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1.5 px-3 rounded-l" href="/clubs/{{$club->ClubID}}/edit">Edit</a>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-2 rounded-r" type="submit">Delete</button>

                </div>
             </form>

    @endforeach


</div>
</body>
</html>
