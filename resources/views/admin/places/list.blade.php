@foreach($places as $place)
	<td>{{$place->id}}</td>
	<td>{{json_decode($place->title)->uz}}</td>
	<td><a href="{{route('places.edit', $place->id)}}">more</a></td>
	<td><a href="{{route('places.delete', $place->id)}}">delete</a></td>
@endforeach