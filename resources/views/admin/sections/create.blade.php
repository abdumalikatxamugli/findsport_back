@php
use App\Clubs;

$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
@endphp
<form action="{{route('sections.create')}}" method="POST" enctype="multipart/form-data">
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
	<label>Short Content</label>
	<textarea name="short_content[{{$lang}}]">
	</textarea>
	@endforeach	
	@foreach($langs as $lang)
	<label>Content</label>
	<textarea name="content[{{$lang}}]">
	</textarea>
	@endforeach	
	<br>
	<label>Occupations</label>
	@foreach(Sport::all() as $index=>$sport)
		<input type="checkbox" name="sport[{{$sport->id}}]">{{json_decode($sport->title)->uz}}
		<br>
	@endforeach
	<br>
	<label>Timetable</label>
	<table>
		<thead>
			@foreach($days as $day)
			<th>{{$day}}</th>
			@endforeach
		</thead>
		<tbody id="timetable">
			<tr>
				@foreach($days as $day)
				<td>
					<input type="text" style="width:130px" 
					name="times[0][{{$day}}]"
					>
				</td>
				@endforeach
			</tr>
		</tbody>
	</table>
	<button onclick="add_row(event)">Add +</button>
	<br>
	<label>Trainers</label>
	<div id="trainers">
		<div class="trainer">
			@foreach($langs as $lang)
			<input type="text" name="trainers[0][title][{{$lang}}]">
			<textarea name="trainers[0][bio][{{$lang}}]" cols="30" rows="10">
			</textarea><br>
			@endforeach	
			<input type="file" name="trainers[0][img]">
		</div>
	</div>
	<button onclick="add_trainer(event)">add trainer</button>
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
	<label>Dont Forget</label>
	<div id="things">
		<div>
			@foreach($langs as $lang)
			<input type="text" name="dont_forget[0][{{$lang}}]">
			@endforeach	
		</div>	
	</div>
	<button onclick="add_thing(event)">Add dont forget</button>
	<br>
	<label>Abonements</label>
	<div id="price">
		<div>
			@foreach($langs as $lang)
				<input type="text" name="price[0][{{$lang}}]">
			@endforeach	
			<input type="number" name="price[0][price]">
		</div>	
	</div>
	<button onclick="add_price(event)">Add abonement</button>
	<br>
	<button>Submit</button>
	
</form>

<script>

	function add_row(ev){
		ev.preventDefault();
		let container=document.getElementById("timetable");
		let index=container.children.length;
		let template=container.children[0].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
	function add_trainer(ev){
		ev.preventDefault();
		let container=document.getElementById("trainers");
		let index=container.children.length;
		let template=container.children[0].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		[...template.getElementsByTagName("textarea")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
	function add_thing(ev){
		ev.preventDefault();
		let container=document.getElementById("things");
		let index=container.children.length;
		let template=container.children[0].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
	function add_price(ev){
		ev.preventDefault();
		let container=document.getElementById("price");
		let index=container.children.length;
		let template=container.children[0].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
</script>