<?php $__currentLoopData = $places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<td><?php echo e($place->id); ?></td>
	<td><?php echo e(json_decode($place->title)->uz); ?></td>
	<td><a href="<?php echo e(route('places.edit', $place->id)); ?>">more</a></td>
	<td><a href="<?php echo e(route('places.delete', $place->id)); ?>">delete</a></td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/places/list.blade.php ENDPATH**/ ?>