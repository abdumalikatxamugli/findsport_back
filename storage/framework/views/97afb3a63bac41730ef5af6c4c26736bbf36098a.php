<style>
	.action{
		margin:10px 20px 10px 0;
	}
	
</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form  method="POST" id="editForm" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<div id="fields"></div>
					
					<?foreach ($fields as $name => $value): ?>
						<?if($value['fk']??false):?>
							<?$options=DB::select($value['query']);?>
							<div class="form-group">
							<label><?php echo e($name); ?></label><br>
							<select name="<?php echo e($name); ?>" class="form-control">
								<?foreach ($options as $option): ?>
									<option value="<?php echo e($option->id); ?>">
										<?php echo e(json_decode($option->title)->uz); ?>

									</option>
								<?endforeach ?>
							</select>
							</div>
						<?endif?>
						<?if($value['custom_json']??false):?>
						    <div class="form-group">
							<label><?php echo e($name); ?></label><br>
							<?foreach($value['custom_json_fields'] as $prop):?>
								<label><?php echo e($prop); ?></label>
								<input type="<?php echo e($value['type']); ?>" 
									name="<?php echo e($name.'['.$prop.']'); ?>"
								><br>
							<?endforeach?>
							</div>
						<?endif?>
					<?endforeach ?>
				

				<button class="btn btn-success action">Submit</button>
				<button class="btn btn-danger action">Cancel</button>
			</form>
		</div>
	</div>
</div>

<!-- template tabs -->
<div id="tabs" style="display: none;">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<?foreach($langs as $index=>$lang):?>
		<li class="nav-item">
			<a class="nav-link <?=$index==0?'active':''?> <?php echo e($lang); ?>nav" 
				id="<?php echo e($lang); ?>-tab" 
			data-toggle="tab" href="#<?php echo e($lang); ?>" 
			role="tab" aria-controls="<?php echo e($lang); ?>" 
			aria-selected="<?=$index==0?'true':'false'?>"
			>
			<?php echo e($lang); ?>

			</a>
		</li>
	<?endforeach?>

	</ul>
	<div class="tab-content">
		<?foreach($langs as $index=>$lang):?>
		<div class="tab-pane fade show <?php echo e($lang); ?> <?=$index==0?'active':''?>" 
			id="<?php echo e($lang); ?>" role="tabpanel" 
			aria-labelledby="<?php echo e($lang); ?>-tab">

		</div>
		<?endforeach?>

	</div>
</div>
<!-- end template -->

<link href="/trz/public/summernote/summernote.min.css" rel="stylesheet">
<script src="/trz/public/summernote/summernote.min.js"></script>

<script>
	document.getElementById("editForm").action=window
	.location.href.slice(0, -5);
	const formFields=document.getElementById("fields");

	const fields=JSON.parse('<?=addslashes(json_encode($fields))?>');

	const langs=JSON.parse('<?=addslashes(json_encode($langs))?>');

	for(const field in fields){
		if(fields[field].readonly)
			continue;
		if(fields[field].fk || fields[field].custom_json ){
			continue;
		}
		if(fields[field].json){
			const tabs=document.getElementById('tabs').cloneNode(true);
			tabs.style.display="";
			tabs.id=field;
			for(const lang of langs){
				let input=document.createElement(fields[field].tag);
				if(fields[field].html){
					input.classList.add("summernote");
				}
				let label=document.createElement('label');
				label.innerHTML=field+"("+lang+")";
				input.name=field+"["+lang+"]";
				input.classList.add("form-control");
				input.type=fields[field].type;
				// configure tabs
				let nav=tabs.getElementsByClassName(`${lang}nav`)[0];
				nav.href=nav.getAttribute('href')+field;
				tabs.getElementsByClassName(lang)[0].id+=field;
				// append it
				tabs.getElementsByClassName(lang)[0].appendChild(label);
				tabs.getElementsByClassName(lang)[0].appendChild(input);
			}
			let div=document.createElement('div');
			div.classList.add('form-group');
			div.appendChild(tabs);
			formFields.appendChild(div);
			continue;
		}
		let input=document.createElement(fields[field].tag);
		input.name=field;
		input.type=fields[field].type;
		input.classList.add("form-control");
		let label=document.createElement('label');
		label.innerHTML=field;
		formFields.appendChild(label);
		formFields.appendChild(input);
	}

	$(document).ready(function() {
		$('.summernote').summernote();
	});

</script><?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/generic/init.blade.php ENDPATH**/ ?>