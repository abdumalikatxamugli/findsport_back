<?php
use App\Clubs;
use App\Sport;
use App\Http\Controllers\MediaLibrary;
$langs=['uz', 'oz', 'ru'];
$days=['Mon', "Tue", "Wed", "Thi", "Fri", "Sat", "Sun"];
$interval=[7, 22];
?>
<?=MediaLibrary::show('places',$place->id)?>

<button onclick="open_lib()" class="btn btn-warning action">
	Media
</button>
<script type="text/javascript">
	function open_lib(){
		console.log("here");
		document.getElementsByClassName("media_library")[0].style.display="block";
	}
</script>
<form action="<?php echo e(route('places.edit', $place->id)); ?>" method="POST" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<label>image</label>
	<input type="file" name="image">
	<br>
	<label>Title</label>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<input type="text" name="title[<?php echo e($lang); ?>]" 
	value=<?php echo e(json_decode($place->title)->$lang); ?>

	>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	<br>
	<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<label>Description</label>
	<textarea name="description[<?php echo e($lang); ?>]"

	><?php echo e(json_decode($place->description)->$lang); ?>

</textarea>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<br>
<label>Rate</label>
<input type="text" name="rate" value="<?php echo e($place->rate); ?>">
<br>
<label>Capacity</label>
<input type="text" name="capacity" value="<?php echo e($place->capacity); ?>">
<br>
<label>Sports</label>
<?php $__currentLoopData = Sport::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$sport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<input type="checkbox" name="sport[<?php echo e($sport->id); ?>]"
	<?php echo e(isset($place->sports()[$sport->id])?"checked":null); ?>

>
<?php echo e(json_decode($sport->title)->uz); ?>

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
				value=<?php echo e(json_decode($place->price, true)["$day"]["$i"]); ?>

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
	
	<?php $__currentLoopData = json_decode($place->attributes,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li>
		<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" name="attributes[$index][<?php echo e($lang); ?>]" 
		value="<?php echo e($attr["$lang"]); ?>"
		>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
</ul>
<button onclick="add_attr(event)">add</button>
<br>
<label>Club</label>
<select name="club_id">
	<?php $__currentLoopData = Clubs::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($club->id); ?>" <?php echo e($place->id==$club->id?'selected':''); ?>>
		<?php echo e($club->id); ?> 
		<?php echo e(json_decode($club->title)->uz); ?>

	</option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<label>Parameters</label>
<input type="text" name="params[height]" 
value=<?php echo e(json_decode($place->params)->height??null); ?>

>
<input type="text" name="params[width]"
value=<?php echo e(json_decode($place->params)->width??null); ?>

>
<input type="text" name="params[length]"
value=<?php echo e(json_decode($place->params)->length??null); ?>

>
<br>
<label>Cover</label>
<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<input type="text" name="cover[<?php echo e($lang); ?>]"
value=<?php echo e(json_decode($place->cover)->$lang); ?>

>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>	
<label>Type</label>
<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<input type="text" name="type[<?php echo e($lang); ?>]"
value=<?php echo e(json_decode($place->type)->$lang); ?>

>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<br>
<label>Address</label>
<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<input type="text" name="address[<?php echo e($lang); ?>]"
value=<?php echo e(json_decode($place->address)->$lang); ?>

>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<br>
<label>Metro</label>
<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<input type="text" name="metro[<?php echo e($lang); ?>]"
value=<?php echo e(json_decode($place->metro)->$lang); ?>

>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
<br>
<label>Location</label>
<input type="text" name="location[long]"
value=<?php echo e(json_decode($place->location)->long??null); ?>

>
<input type="text" name="location[lat]"
value=<?php echo e(json_decode($place->location)->lat??null); ?>

>
<br>
<label>Open_time</label>
<input type="text" name="open_time[start]"
value=<?php echo e(json_decode($place->open_time)->start??null); ?>

>
<input type="text" name="open_time[finish]"
value=<?php echo e(json_decode($place->open_time)->finish??null); ?>

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
</form><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/places/one.blade.php ENDPATH**/ ?>