<form  method="POST" id="editForm" enctype="multipart/form-data">
	@csrf
	<div id="fields"></div>
	
	<button>Submit</button>
</form>

<script>
	document.getElementById("editForm").action=window.location.href.slice(0, -5);
	const formFields=document.getElementById("fields");
	const fields=JSON.parse('<?=addslashes(json_encode($fields))?>');
	
	const langs=JSON.parse('<?=addslashes(json_encode($langs))?>');
	
	for(const field in fields){
		if(fields[field].readonly)
			continue;
		let input=document.createElement(fields[field].tag);
		let label=document.createElement('label');
		label.innerHTML=field;
		input.name=field;
		input.type=fields[field].type;
		formFields.appendChild(label);
		formFields.appendChild(input);
	}
	

	
</script>