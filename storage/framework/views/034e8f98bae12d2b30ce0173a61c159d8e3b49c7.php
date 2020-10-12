<a href="<?=route("$entity"."_init")?>">Create New</a>
<table>
	<?foreach($iterable as $item):?>
		<tr>
			<?foreach($fields as $key =>$value ):?>
				<?if($value['listed']??false):?>
					<td><?=$item->$key?></td>
				<?endif?>
			<?endforeach?>
			
			<td><button onclick="edit(<?=$item->id?>)">edit</button></td>
			<td><button onclick="deleteMe(<?=$item->id?>)">delete</button></td>
		</tr>
	<?endforeach?>
</table>
<script>
	function edit(id){
		window.location.assign(
				window.location.href+'/id/'+id
			)
	}
	function deleteMe(id){
		window.location.assign(
				window.location.href+'/id/'+id+"/delete"
			)
	}
</script><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/generic_media/index.blade.php ENDPATH**/ ?>