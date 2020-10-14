@php
use App\Clubs;
use App\Sport;
$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
@endphp
<form action="{{route('places.edit', $place->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
	<label>image</label>
	<input type="file" name="image">
	<br>
	<label>Title</label>
	@foreach($langs as $lang)
		<input type="text" name="title[{{$lang}}]" 
				value={{json_decode($place->title)->$lang}}
		>
	@endforeach	
	<br>
	@foreach($langs as $lang)
	<label>Description</label>
	<textarea name="description[{{$lang}}]"
				
	>{{json_decode($place->description)->$lang}}
	</textarea>
	@endforeach	
	<br>
	<label>Rate</label>
	<input type="text" name="rate" value="{{$place->rate}}">
	<br>
	<label>Capacity</label>
	<input type="text" name="capacity" value="{{$place->capacity}}">
	<br>
	<label>Sports</label>
	@foreach(Sport::all() as $index=>$sport)
		<input type="checkbox" name="sport[{{$sport->id}}]"
			{{isset(json_decode($place->sport, true)[$sport->id])?"checked":null}}
		>
		{{json_decode($sport->title)->uz}}
		<br>
	@endforeach
	<br>
	<label>price</label>
	<table>
		<thead>
			<th>Day/Hr</th>
			@foreach($days as $day)
			<th>{{$day}}</th>
			@endforeach
		</thead>
		<tbody>
			@for($i=$interval[0]; $i<$interval[1];$i=$i+0.5)
			<tr>
				<td>{{$i}}-{{$i+0.5}}</td>
				@foreach($days as $day)
					<td>
						<input type="text" style="width:130px" 
						name="price[{{$day}}][{{$i}}]" 
						value={{json_decode($place->price, true)["$day"]["$i"]}}
						>
					</td>
				@endforeach
			</tr>
			@endfor
		</tbody>
	</table>
	<br>
	<label>Attributes</label>
	<ul id="attr">
	
		@foreach(json_decode($place->attributes,true) as $index=>$attr)
			<li>
			@foreach($langs as $lang)
				<input type="text" name="attributes[$index][{{$lang}}]" 
						value="{{$attr["$lang"]}}"
				>
			@endforeach
			</li>
		@endforeach	
	</ul>
	<button onclick="add_attr(event)">add</button>
	<br>
	<label>Club</label>
	<select name="club_id">
		@foreach(Clubs::all() as $club)
			<option value="{{$club->id}}" {{$place->id==$club->id?'selected':''}}>
			    {{$club->id}} 
			    {{json_decode($club->title)->uz}}
			</option>
		@endforeach
	</select>
	<label>Parameters</label>
	<input type="text" name="params[height]" 
			value={{json_decode($place->params)->height??null}}
	>
	<input type="text" name="params[width]"
			value={{json_decode($place->params)->width??null}}
	>
	<input type="text" name="params[length]"
			value={{json_decode($place->params)->length??null}}
	>
	<br>
	<label>Cover</label>
	@foreach($langs as $lang)
		<input type="text" name="cover[{{$lang}}]"
				value={{json_decode($place->cover)->$lang}}
		>
	@endforeach
	<br>	
	<label>Type</label>
	@foreach($langs as $lang)
		<input type="text" name="type[{{$lang}}]"
				value={{json_decode($place->type)->$lang}}
		>
	@endforeach	
	<br>
	<label>Address</label>
	@foreach($langs as $lang)
		<input type="text" name="address[{{$lang}}]"
			value={{json_decode($place->address)->$lang}}
		>
	@endforeach	
	<br>
	<label>Metro</label>
	@foreach($langs as $lang)
		<input type="text" name="metro[{{$lang}}]"
				value={{json_decode($place->metro)->$lang}}
		>
	@endforeach	
	<br>
	<label>Location</label>
		<input type="text" name="location[long]"
			value={{json_decode($place->location)->long??null}}
		>
		<input type="text" name="location[lat]"
			value={{json_decode($place->location)->lat??null}}
		>
	<br>
	<label>Open_time</label>
		<input type="text" name="open_time[start]"
				value={{json_decode($place->open_time)->start??null}}
		>
		<input type="text" name="open_time[finish]"
				value={{json_decode($place->open_time)->finish??null}}
		>
	<br>
	<button>Submit</button>
	<script>
		
		function add_attr(ev){
			ev.preventDefault();
			let container=document.getElementById("attr");
			let index=container.children.length;
			let template=container.children[0].cloneNode(true);
			[...template.children].forEach(function(item){
				item.name=item.name.replace("0", `${index}`);
			});
			container.appendChild(template);
		}
	</script>
</form>