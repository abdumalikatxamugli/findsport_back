@foreach($sections as $place)
	<td>{{$place->id}}</td>
	<td>{{json_decode($place->title)->uz}}</td>
	<td><a href="{{route('sections.edit', $place->id)}}">more</a></td>
	<td><a href="{{route('sections.delete', $place->id)}}">delete</a></td>
@endforeach