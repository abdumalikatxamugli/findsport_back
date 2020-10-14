<?php
use App\Clubs;

$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
?>
<form action="<?php echo e(route('sections.create')); ?>" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<label>image</label>
	<input type="file" name="image">
	<br>
	<label>Title</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" name="title[<?php echo e($lang); ?>]">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<label>Short Content</label>
	<textarea name="short_content[<?php echo e($lang); ?>]">
	</textarea>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<label>Content</label>
	<textarea name="content[<?php echo e($lang); ?>]">
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
			<tr>
				<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<td>
					<input type="text" style="width:130px" 
					name="times[0][<?php echo e($day); ?>]"
					>
				</td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tr>
		</tbody>
	</table>
	<button onclick="add_row(event)">Add +</button>
	<br>
	<label>Trainers</label>
	<div id="trainers">
		<div class="trainer">
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="text" name="trainers[0][title][<?php echo e($lang); ?>]">
			<textarea name="trainers[0][bio][<?php echo e($lang); ?>]" cols="30" rows="10">
			</textarea><br>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			<input type="file" name="trainers[0][img]">
		</div>
	</div>
	<button onclick="add_trainer(event)">add trainer</button>
	<br>
	<label>Club</label>
	<select name="club_id">
		<?php $__currentLoopData = Clubs::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e($club->id); ?>">
			<?php echo e($club->id); ?> 
			<?php echo e(json_decode($club->title)->uz); ?>

		</option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
	<label>Address</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="address[<?php echo e($lang); ?>]">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<label>Metro</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="metro[<?php echo e($lang); ?>]">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<label>Location</label>
	<input type="text" name="location[long]">
	<input type="text" name="location[lat]">
	<br>
	<label>Dont Forget</label>
	<div id="things">
		<div>
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="text" name="dont_forget[0][<?php echo e($lang); ?>]">
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		</div>	
	</div>
	<button onclick="add_thing(event)">Add dont forget</button>
	<br>
	<label>Abonements</label>
	<div id="price">
		<div>
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<input type="text" name="price[0][<?php echo e($lang); ?>]">
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
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
</script><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/sections/create.blade.php ENDPATH**/ ?>