<P>Titles:</P>

<table>
    @foreach($songs as $song)
<br>
    <tr>
        <form action="/songs/{{$song->id}}" method="POST">
            @csrf
            @method('DELETE')
            <li><a href="/songs/{{$song->id}}">{{$song->title}}</a><a href="/songs/{{$song->id}}/edit" style="margin-left:50px;">Bewerken</a>
            <button style="margin-left:50px;" type="submit">Delete</button></li>
        </form>
    </tr>
    @endforeach
    </ul>
</table>
