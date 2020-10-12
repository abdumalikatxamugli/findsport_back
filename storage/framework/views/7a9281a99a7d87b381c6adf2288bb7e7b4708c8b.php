<?php
use App\Http\Controllers\MediaLibrary;
?>
<style>
	.action{
		margin:10px 20px 10px 0;
	}
	
</style>
<?$post=$item[0]?>
<!-- library -->
<?=MediaLibrary::show($entity,$post->id)?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<button onclick="open_lib()" class="btn btn-warning action">
				Media
			</button>
			<form  method="POST" id="editForm" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<div id="fields"></div>
					
					<?foreach ($fields as $name => $value): ?>
						<?if($value['file']??false):?>
							<div>
								<input type="file" name="<?php echo e($name); ?>">
								<?if($post->path??false):?>
								<img src="<?php echo e(route('unimg')."?path=".urlencode($post->path)); ?>" alt="">
									<a href="<?php echo e(route($entity.'_delete_img',$post->id)); ?>">
										remove image
									</a>
								<?endif?>
							</div>
						<?endif?>
						<?if($value['fk']??false):?>
							<?$options=DB::select($value['query']);?>
							<div class="form-group">
							<label><?php echo e($name); ?></label><br>
							<select name="<?php echo e($name); ?>" class="form-control"
								value="<?php echo e($post->$name); ?>"
							>
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
									<?=
										$value['type']=='checkbox'?
										isset(
											json_decode($post->$name,true)[$prop])?
										'checked'
										:null
										:null
									?>
									value="<?php echo e(json_decode($post->$name,true)[$prop]??null); ?>"
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


	function open_lib(){
		console.log("here");
		document.getElementsByClassName("media_library")[0].style.display="block";
	}
	document.getElementById("editForm").action=window.location.href+"/put";

	const formFields=document.getElementById("fields");

	const fields=JSON.parse('<?=addslashes(json_encode($fields))?>');

	const item=JSON.parse('<?=addslashes(json_encode($post))?>');

	const langs=JSON.parse('<?=addslashes(json_encode($langs))?>');


	for(const field in fields){
		if(fields[field].readonly)
			continue;
		if(fields[field].fk || fields[field].custom_json ||fields[field].file){
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
				if(item[field]){
					input.value=JSON.parse(item[field])[lang]?JSON.parse(item[field])[lang]:'';
				}else{
					input.value="";
				}
				
				// configure tabs
				let nav=tabs.getElementsByClassName(`${lang}nav`)[0];
				nav.href=nav.getAttribute('href')+field;
				tabs.getElementsByClassName(lang)[0].id+=field;
				// append it
				tabs.getElementsByClassName(lang)[0].appendChild(label);
				tabs.getElementsByClassName(lang)[0].appendChild(input);
			}
			formFields.appendChild(tabs);
			continue;
		}
		let input=document.createElement(fields[field].tag);
		input.name=field;
		input.value=item[field];
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
	function remove_img(elem, ev){
		ev.preventDefault;
		elem.parentNode.innerHTML="";
	}
</script>
<?php /**PATH /opt/lampp/htdocs/findsport/resources/views/admin/generic/edit.blade.php ENDPATH**/ ?>