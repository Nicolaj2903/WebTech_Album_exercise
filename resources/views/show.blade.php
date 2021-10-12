<html>
<body>
<h1>{{$artist->name}}</h1>
{{--<a href="/">Back</a>--}}
<a href="{{ route('home') }}">Back</a>

@if(session()->has('message'))
    <p style="background-color: aqua;padding: 4px;color: white;">{{ session()->get('message') }}</p>
@endif
<h2>Albums:</h2>
<ul>
    @foreach($artist->albums as $album)
{{--        <li>{{ $album->name}} - <a href="/artists/{{$artist->id}}/albums/{{$album->id}}">Remove</a></li>--}}
        <li> {{ $album->name}} - <a href="{{ route('artists.deleteAlbum', [$artist->id, $album->id]) }}">Remove</a></li>
    @endforeach
</ul>

<h3>Add album</h3>
{{--<form action="/artists/{{ $artist->id }}/albums" method="post">--}}
<form action="{{ route('artists.addAlbum', [$artist->id]) }}" method="post">
    @csrf
    <label>Album:</label>
    <input type="text" name="name" placeholder="Album name">
    <button type="submit">Add</button>
</form>
</body>
</html>
