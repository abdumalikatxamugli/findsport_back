@php
use App\Clubs;

$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
@endphp
<form action="{{route('sections.edit', $section->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
	<label>image</label>
	<input type="file" name="image">
	<br>
	<label>Title</label>
	@foreach($langs as $lang)
	<input type="text" name="title[{{$lang}}]"
	value="{{json_decode($section->title)->$lang}}"
	>
	@endforeach	
	<br>
	@foreach($langs as $lang)
	<label>Short Content</label>
	<textarea name="short_content[{{$lang}}]">
		{{json_decode($section->short_content)->$lang}}
	</textarea>
	@endforeach	
	@foreach($langs as $lang)
	<label>Content</label>
	<textarea name="content[{{$lang}}]">
		{{json_decode($section->content)->$lang}}
	</textarea>
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
			@foreach(json_decode($section->times, true) as $index=>$time)
			<tr>
				@foreach($days as $day)
				<td>
					<input type="text" style="width:130px" 
					name="times[$index][$day]" value="{{$time[$day]??null}}"
					>
				</td>
				@endforeach
				<td>
					<button onclick="remove_elem_deep(this)">remove</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<button onclick="add_row(event)">Add +</button>
	<br>
	<label>Trainers</label>
	<div id="trainers">
		@foreach(json_decode($section->trainers, true) as $index=>$trainer)
		<div class="trainer">
			@foreach($langs as $lang)
			<input type="text" name="trainers[$index][title][{{$lang}}]"
			value="{{$trainer['title'][$lang]}}"
			>
			<textarea name="trainers[$index][bio][{{$lang}}]" cols="30" rows="10">
				{{$trainer['bio'][$lang]}}
			</textarea><br>
			@endforeach	
			<img src="{{route('unimg')."?path=".urlencode($trainer['img'])}}" 
			style="width:100px;height:100px;object-fit: cover;">
			<a href="{{route('delete_trainer', ['sec_id'=>$section->id,
			'id'=>$index
			])}}">remove</a>
		</div>
		@endforeach
	</div>
	
	<br>
	<label>Club</label>
	<select name="club_id">
		@foreach(Clubs::all() as $club)
		<option value="{{$club->id}}">
			{{$club->id}} 
			{{json_decode($club->title)->uz}}
			{{$club->id==$section->club_id?'selected':''}}
		</option>
		@endforeach
	</select>
	<label>Address</label>
	@foreach($langs as $lang)
	<input type="text" name="address[{{$lang}}]"
	value="{{json_decode($section->address)->$lang}}"
	>
	@endforeach	
	<br>
	<label>Metro</label>
	@foreach($langs as $lang)
	<input type="text" name="metro[{{$lang}}]"
	value="{{json_decode($section->metro)->$lang}}"
	>
	@endforeach	
	<br>
	<label>Location</label>
	<input type="text" name="location[long]"
	value="{{json_decode($section->location)->long}}"
	>
	<input type="text" name="location[lat]"
	value="{{json_decode($section->location)->lat}}"
	>
	<br>
	<label>Dont Forget</label>
	<div id="things">
		@foreach(json_decode($section->dont_forget, true) as $index=>$dont_forget)
		<div>
			@foreach($langs as $lang)
			<input type="text" name="dont_forget[$index][{{$lang}}]"
			value="{{$dont_forget[$lang]}}"
			>
			@endforeach
			<button onclick="remove_elem(this)">remove</button>	
		</div>	
		@endforeach
	</div>
	<button onclick="add_thing(event)">Add dont forget</button>
	<br>
	<label>Abonements</label>
	<div id="price">
		@foreach(json_decode($section->price, true) as $index=>$price)
		<div>
			@foreach($langs as $lang)
			<input type="text" name="price[$index][{{$lang}}]"
			value="{{$dont_forget[$lang]}}"
			>
			@endforeach	
			<input type="number" name="price[$index][price]"
			value="{{$price['price']}}"
			>
			<button onclick="remove_elem(this)">remove</button>
		</div>	
		@endforeach
	</div>
	<button onclick="add_price(event)">Add abonement</button>
	<br>
	<button>Submit</button>
	
</form>
<form action="{{route('add_trainer', $section->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
	@foreach($langs as $lang)
	<input type="text" name="title[{{$lang}}]">
	<textarea name="bio[{{$lang}}]" cols="30" rows="10">
		
	</textarea><br>
	@endforeach	
	<input type="file" name="img">
	<button>add trainer</button>
</form>
<div id="template" style="display: none;">
	<table>
		<tbody>
			<tr >
				@foreach($days as $day)
				<td>
					<input type="text" style="width:130px" 
					name="times[0][{{$day}}]"
					>
				</td>
				@endforeach
				<td>
					<button onclick="remove_elem_deep(this)">remove</button>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="trainer">
		@foreach($langs as $lang)
		<input type="text" name="trainers[0][title][{{$lang}}]"
		
		>
		<textarea name="trainers[0][bio][{{$lang}}]" cols="30" rows="10">
			
		</textarea><br>
		@endforeach	
		<input type="file" name="trainers[0][img]">
		<button onclick="remove_elem(this)">remove</button>
	</div>
	<div>
		@foreach($langs as $lang)
		<input type="text" name="dont_forget[0][{{$lang}}]"

		>
		@endforeach
		<button onclick="remove_elem(this)">remove</button>	
	</div>
	<div>
		@foreach($langs as $lang)
		<input type="text" name="price[0][{{$lang}}]"
		
		>
		@endforeach	
		<input type="number" name="price[0][price]"
		
		>
		<button onclick="remove_elem(this)">remove</button>
	</div>
</div>
<script>
	var templateCont=document.getElementById("template");
	function add_row(ev){
		ev.preventDefault();
		let container=document.getElementById("timetable");
		let index=container.children.length;
		let template=templateCont.children[0].children[0].children[0].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
	function add_trainer(ev){
		ev.preventDefault();
		let container=document.getElementById("trainers");
		let index=container.children.length;
		let template=templateCont.children[1].cloneNode(true);
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
		let template=templateCont.children[2].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
	function add_price(ev){
		ev.preventDefault();
		let container=document.getElementById("price");
		let index=container.children.length;
		let template=templateCont.children[3].cloneNode(true);
		[...template.getElementsByTagName("input")].forEach(function(item){
			item.name=item.name.replace("0", `${index}`);
		});
		container.appendChild(template);
	}
	function remove_elem(elem){
		let parent=elem.parentNode;
		let grandparent=parent.parentNode;
		grandparent.removeChild(parent);
	}
	function remove_elem_deep(elem){
		let parent=elem.parentNode;
		let grandparent=parent.parentNode;
		grandparent.parentNode.removeChild(grandparent);
	}
</script>