<?php
use App\Clubs;
use App\Sport;
$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
?>
<form action="<?php echo e(route('places.create')); ?>" method="POST" enctype="multipart/form-data">
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
		<label>Description</label>
		<textarea name="description[<?php echo e($lang); ?>]">
		</textarea>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<label>Rate</label>
	<input type="text" name="rate">
	<br>
	<label>Capacity</label>
	<input type="text" name="capacity">
	<br>
	<label>Sports</label>
	<?php $__currentLoopData = Sport::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="checkbox" name="sport[<?php echo e($sport->id); ?>]"><?php echo e(json_decode($sport->title)->uz); ?>

		<br>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br>
	<label>price</label>
	<table>
		<thead>
			<th>Day/Hr</th>
			<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<th><?php echo e($day); ?></th>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</thead>
		<tbody>
			<?php for($i=$interval[0]; $i<$interval[1];$i=$i+0.5): ?>
			<tr>
				<td><?php echo e($i); ?>-<?php echo e($i+0.5); ?></td>
				<?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<td>
					<input type="text" style="width:130px" 
					name="price[<?php echo e($day); ?>][<?php echo e($i); ?>]"
					>
				</td>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tr>
			<?php endfor; ?>
		</tbody>
	</table>
	<br>
	<label>Attributes</label>
	<ul id="attr">
		<li>
			<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<input type="text" name="attributes[0][<?php echo e($lang); ?>]">
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		</li>
	</ul>
	<button onclick="add_attr(event)">add</button>
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
	<label>Parameters</label>
	<input type="text" name="params[height]">
	<input type="text" name="params[width]">
	<input type="text" name="params[length]">
	<br>
	<label>Cover</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="cover[<?php echo e($lang); ?>]">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br>	
	<label>Type</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="type[<?php echo e($lang); ?>]">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
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
</form><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/places/create.blade.php ENDPATH**/ ?>