<form  method="POST" id="editForm" enctype="multipart/form-data">
	@csrf
	<div id="fields"></div>
	
	<button>Submit</button>
</form>

<script>
	document.getElementById("editForm").action=window.location.href+"/put"
	const formFields=document.getElementById("fields");

	const fields=JSON.parse('<?=addslashes(json_encode($fields))?>');
	
	const item=JSON.parse('<?=addslashes(json_encode($item[0]))?>');
	
	const langs=JSON.parse('<?=addslashes(json_encode($langs))?>');
	
	for(const field in fields){
		if(fields[field].readonly)
			continue;
		let input=document.createElement(fields[field].tag);
		input.name=field;
		input.value=item[field];
		input.type=fields[field].type;
		formFields.appendChild(input);
	}
	

	
</script>