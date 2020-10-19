<?php
use App\Clubs;
use App\Sport;
$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
?>
<form action="<?php echo e(route('sections.edit', $section->id)); ?>" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<label>image</label>
	<input type="file" name="image">
	<br>
	<label>Title</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="title[<?php echo e($lang); ?>]"
	value="<?php echo e(json_decode($section->title)->$lang); ?>"
	>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<label>Short Content</label>
	<textarea name="short_content[<?php echo e($lang); ?>]">
		<?php echo e(json_decode($section->short_content)->$lang); ?>

	</textarea>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<label>Content</label>
	<textarea name="content[<?php echo e($lang); ?>]">
		<?php echo e(json_decode($section->content)->$lang); ?>

	</textarea>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<label>Timetable</label>
	<table>
		<thead>
			<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<th><?php echo e($day); ?></th>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</thead>
		<tbody id="timetable">
			<?php $__currentLoopData = json_decode($section->times, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<td>
					<input type="text" style="width:130px" 
					name="times[$index][$day]" value="<?php echo e($time[$day]??null); ?>"
					>
				</td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<td>
					<button onclick="remove_elem_deep(this)">remove</button>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<button onclick="add_row(event)">Add +</button>
	<br>
	<label>Trainers</label>
	<div id="trainers">
		<?php $__currentLoopData = json_decode($section->trainers, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="trainer">
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="text" name="trainers[$index][title][<?php echo e($lang); ?>]"
			value="<?php echo e($trainer['title'][$lang]); ?>"
			>
			<textarea name="trainers[$index][bio][<?php echo e($lang); ?>]" cols="30" rows="10">
				<?php echo e($trainer['bio'][$lang]); ?>

			</textarea><br>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			<img src="<?php echo e(route('unimg')."?path=".urlencode($trainer['img'])); ?>" 
			style="width:100px;height:100px;object-fit: cover;">
			<a href="<?php echo e(route('delete_trainer', ['sec_id'=>$section->id,
			'id'=>$index
			])); ?>">remove</a>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<label>Occupations</label>
	<?php $__currentLoopData = Sport::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="checkbox" name="sport[<?php echo e($sport->id); ?>]"
		<?php echo e(isset($section->sports()[$sport->id])?"checked":null); ?>

	>
	<?php echo e(json_decode($sport->title)->uz); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br>
	<br>
	<label>Club</label>
	<select name="club_id">
		<?php $__currentLoopData = Clubs::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($club->id); ?>">
			<?php echo e($club->id); ?> 
			<?php echo e(json_decode($club->title)->uz); ?>

			<?php echo e($club->id==$section->club_id?'selected':''); ?>

		</option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
	<label>Address</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="address[<?php echo e($lang); ?>]"
	value="<?php echo e(json_decode($section->address)->$lang); ?>"
	>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<label>Metro</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="metro[<?php echo e($lang); ?>]"
	value="<?php echo e(json_decode($section->metro)->$lang); ?>"
	>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<label>Location</label>
	<input type="text" name="location[long]"
	value="<?php echo e(json_decode($section->location)->long); ?>"
	>
	<input type="text" name="location[lat]"
	value="<?php echo e(json_decode($section->location)->lat); ?>"
	>
	<br>
	<label>Dont Forget</label>
	<div id="things">
		<?php $__currentLoopData = json_decode($section->dont_forget, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$dont_forget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div>
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="text" name="dont_forget[$index][<?php echo e($lang); ?>]"
			value="<?php echo e($dont_forget[$lang]); ?>"
			>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<button onclick="remove_elem(this)">remove</button>	
		</div>	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<button onclick="add_thing(event)">Add dont forget</button>
	<br>
	<label>Abonements</label>
	<div id="price">
		<?php $__currentLoopData = json_decode($section->price, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div>
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="text" name="price[$index][<?php echo e($lang); ?>]"
			value="<?php echo e($dont_forget[$lang]); ?>"
			>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			<input type="number" name="price[$index][price]"
			value="<?php echo e($price['price']); ?>"
			>
			<button onclick="remove_elem(this)">remove</button>
		</div>	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<button onclick="add_price(event)">Add abonement</button>
	<br>
	<button>Submit</button>
	
</form>
<form action="<?php echo e(route('add_trainer', $section->id)); ?>" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="title[<?php echo e($lang); ?>]">
	<textarea name="bio[<?php echo e($lang); ?>]" cols="30" rows="10">
		
	</textarea><br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<input type="file" name="img">
	<button>add trainer</button>
</form>
<div id="template" style="display: none;">
	<table>
		<tbody>
			<tr >
				<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<td>
					<input type="text" style="width:130px" 
					name="times[0][<?php echo e($day); ?>]"
					>
				</td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<td>
					<button onclick="remove_elem_deep(this)">remove</button>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="trainer">
		<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" name="trainers[0][title][<?php echo e($lang); ?>]"
		
		>
		<textarea name="trainers[0][bio][<?php echo e($lang); ?>]" cols="30" rows="10">
			
		</textarea><br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		<input type="file" name="trainers[0][img]">
		<button onclick="remove_elem(this)">remove</button>
	</div>
	<div>
		<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" name="dont_forget[0][<?php echo e($lang); ?>]"

		>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<button onclick="remove_elem(this)">remove</button>	
	</div>
	<div>
		<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" name="price[0][<?php echo e($lang); ?>]"
		
		>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
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
</script><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/sections/one.blade.php ENDPATH**/ ?>