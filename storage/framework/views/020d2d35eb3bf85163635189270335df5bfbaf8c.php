<?php $__currentLoopData = $iterable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li><?php echo e($post->id); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/frontend/list.blade.php ENDPATH**/ ?>