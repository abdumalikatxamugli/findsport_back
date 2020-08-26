<html>
	<head>
		
	</head>
	<body>
		
		<form method="POST" 
			  action="<?php echo e(route('create_menu',1)); ?>" 
			  enctype="multipart/form-data">
			  <?php echo csrf_field(); ?>
			<input type="file" name="media">
			<button type="submit">Submit</button>
		</form>
	</body>
</html><?php /**PATH /opt/lampp/htdocs/maxs/v2/resources/views/admin/file.blade.php ENDPATH**/ ?>