@php
use App\Clubs;
use App\Sport;
$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
@endphp
<form action="{{route('places.create')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<label>image</label>
	<input type="file" name="image">
	<br>
	<label>Title</label>
	@foreach($langs as $lang)
		<input type="text" name="title[{{$lang}}]">
	@endforeach	
	<br>
	@foreach($langs as $lang)
		<label>Description</label>
		<textarea name="description[{{$lang}}]">
		</textarea>
	@endforeach	
	<br>
	<label>Rate</label>
	<input type="text" name="rate">
	<br>
	<label>Capacity</label>
	<input type="text" name="capacity">
	<br>
	<label>Sports</label>
	@foreach(Sport::all() as $index=>$sport)
		<input type="checkbox" name="sport[{{$sport->id}}]">{{json_decode($sport->title)->uz}}
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
		<li>
			@foreach($langs as $lang)
			<input type="text" name="attributes[0][{{$lang}}]">
			@endforeach	
		</li>
	</ul>
	<button onclick="add_attr(event)">add</button>
	<br>
	<label>Club</label>
	<select name="club_id">
		@foreach(Clubs::all() as $club)
		<option value="{{$club->id}}">
			{{$club->id}} 
			{{json_decode($club->title)->uz}}
		</option>
		@endforeach
	</select>
	<label>Parameters</label>
	<input type="text" name="params[height]">
	<input type="text" name="params[width]">
	<input type="text" name="params[length]">
	<br>
	<label>Cover</label>
	@foreach($langs as $lang)
	<input type="text" name="cover[{{$lang}}]">
	@endforeach
	<br>	
	<label>Type</label>
	@foreach($langs as $lang)
	<input type="text" name="type[{{$lang}}]">
	@endforeach	
	<br>
	<label>Address</label>
	@foreach($langs as $lang)
	<input type="text" name="address[{{$lang}}]">
	@endforeach	
	<br>
	<label>Metro</label>
	@foreach($langs as $lang)
	<input type="text" name="metro[{{$lang}}]">
	@endforeach	
	<br>
	<label>Location</label>
	<input type="text" name="location[long]">
	<input type="text" name="location[lat]">
	<br>
	<label>Open_time</label>
	<input type="text" name="open_time[start]">
	<input type="text" name="open_time[finish]">
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