<table>
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
	</thead>
	<tbody>
		<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($message->name); ?></td>
			<td><?php echo e($message->email); ?></td>
			<td><?php echo e($message->message); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/messages/list.blade.php ENDPATH**/ ?>